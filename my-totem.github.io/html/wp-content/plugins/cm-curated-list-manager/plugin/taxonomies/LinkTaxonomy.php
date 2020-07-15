<?php

namespace com\cminds\listmanager\plugin\taxonomies;

use com\cminds\listmanager\App;
use com\cminds\listmanager\plugin\taxonomies\CategoryTaxonomy;
use com\cminds\listmanager\plugin\helpers\ViewHelper;
use com\cminds\listmanager\plugin\notices\AdminNoticeManager;
use com\cminds\listmanager\plugin\notices\AdminNotice;
use com\cminds\listmanager\plugin\options\Options;

class LinkTaxonomy extends TaxonomyAbstract {

    const TAXONOMY = 'cmlm_link';

    public function __construct() {
        parent::__construct();
        add_action('admin_menu', array($this, 'actionAdminMenu'));
        add_action('admin_head', array($this, 'actionAdminHead'));
        add_action(sprintf('%s_add_form_fields', static::TAXONOMY), array($this, 'actionAddFormFields'));
        add_action(sprintf('%s_edit_form_fields', static::TAXONOMY), array($this, 'actionEditFormFields'));
        add_action(sprintf('create_%s', static::TAXONOMY), array($this, 'actionCreate'));
        add_action(sprintf('edited_%s', static::TAXONOMY), array($this, 'actionEdited'));
        add_action('pre_delete_term', array($this, 'actionPreDeleteTerm'), 10, 2);
        add_action('edit_terms', array($this, 'actionEditTerms'), 10, 2);
        add_action('quick_edit_custom_box', array($this, 'actionQuickEditCustomBox'), 10, 3);
        add_filter(sprintf('manage_edit-%s_columns', static::TAXONOMY), array($this, 'filterManageColumns'));
        add_filter(sprintf('manage_%s_custom_column', static::TAXONOMY), array($this, 'filterManageCustomColumn'), 10, 3);
        add_filter(sprintf('%s_row_actions', static::TAXONOMY), array($this, 'filterRowActions'), 10, 2);
        add_filter('get_terms_defaults', array($this, 'filterGetTermsDefaults'), 10, 2);
    }

    public function actionInit() {
        parent::actionInit();
        register_taxonomy(static::TAXONOMY, NULL, array(
            'show_ui' => TRUE,
            'show_admin_column' => TRUE,
            'hierarchical' => FALSE,
            'labels' => array(
                'name' => 'Links',
                'singular_name' => 'Link',
                'edit_item' => 'Edit Link',
                'view_item' => 'View Link',
                'update_item' => 'Update Link',
                'add_new_item' => 'Add New Link',
                'search_items' => 'Search Links',
                'not_found' => 'No links found'
            )
        ));
        wp_register_script('cmlm-backend-link-taxonomy', plugin_dir_url(App::PLUGIN_FILE) . 'assets/backend/js/link-taxonomy.js', array('jquery', 'common', 'inline-edit-tax'), App::VERSION);
    }

    public function actionAdminEnqueueScripts() {
        if (get_current_screen()->taxonomy == static::TAXONOMY) {
            wp_enqueue_style('cmlm-backend-admin');
            if (wp_script_is('inline-edit-tax', 'enqueued')) {
                wp_enqueue_script('cmlm-backend-link-taxonomy');
            }
        }
    }

    public function actionAdminMenu() {
        add_submenu_page(App::SLUG, 'Links', 'Links', 'manage_options', sprintf('edit-tags.php?taxonomy=%s', static::TAXONOMY));
    }

    public function actionAdminHead() {
        if (get_current_screen()->taxonomy == static::TAXONOMY) {
            echo "<style>.form-field.term-description-wrap{ display: none !important; }</style>\n";
            echo "<style>.form-field.term-slug-wrap{ display: none !important; }</style>\n";
        }
    }

    public function actionAddFormFields() {
        echo ViewHelper::load('views/backend/taxonomies/link/add_form_fields.php');
    }

    public function actionEditFormFields($term) {
        $value1 = get_term_meta($term->term_id, sprintf('%s_category', App::PREFIX), TRUE);
        $value2 = get_term_meta($term->term_id, sprintf('%s_url', App::PREFIX), TRUE);
        echo ViewHelper::load('views/backend/taxonomies/link/edit_form_fields.php', array(
            'category_id' => $value1,
            'url' => $value2
        ));
    }

    public function actionCreate($term_id) {
        $key = sprintf('%s_category', App::PREFIX);
        if (isset($_POST[$key])) {
            $value = intval($_POST[$key]);
            update_term_meta($term_id, $key, $value);
            if ($value === -1) {
                delete_term_meta($term_id, $key);
            }
        }
        $key = sprintf('%s_url', App::PREFIX);
        if (isset($_POST[$key])) {
            $value = $_POST[$key];
            update_term_meta($term_id, $key, $value);
        };
        if (Options::getOption('favicons_local_cache')) {
            $this->updateFavicon($term_id);
        }
    }

    public function actionEdited($term_id) {
        return $this->actionCreate($term_id);
    }

    public function actionPreDeleteTerm($term_id, $taxonomy) {
        if ($taxonomy == static::TAXONOMY) {
            wp_delete_attachment(intval(get_term_meta($term_id, sprintf('%s_favicon_attachment', App::PREFIX), TRUE)));
        }
    }

    public function filterManageColumns($columns) {
        unset($columns['posts']);
        unset($columns['slug']);
        unset($columns['description']);
        $columns[sprintf('%s_url', App::PREFIX)] = 'URL';
        //$columns[sprintf('%s_favicon_attachment', App::PREFIX)] = 'Favicon';
        $columns[sprintf('%s_category', App::PREFIX)] = 'Category';
        return $columns;
    }

    public function filterManageCustomColumn($out, $column_name, $term_id) {
        if ($column_name === sprintf('%s_url', App::PREFIX)) {
            $url = get_term_meta($term_id, $column_name, TRUE);
            if (Options::getOption('favicons_local_cache')) {
                $attach_id = get_term_meta($term_id, sprintf('%s_favicon_attachment', App::PREFIX), TRUE);
                $attach_url = wp_get_attachment_url($attach_id);
                return $attach_url ? sprintf('<img src="%s" alt="%s" class="cmlm-admin-link-icon" /> %s', $attach_url, $url, $url) : $url;
            } else {
                $img = sprintf('https://www.google.com/s2/favicons?domain_url=%s', urlencode($url));
                return sprintf('<img src="%s" alt="%s" class="cmlm-admin-link-icon" /> %s', $img, $url, $url);
            }
        }
        if ($column_name === sprintf('%s_category', App::PREFIX)) {
            $id = get_term_meta($term_id, $column_name, TRUE);
            $term = get_term_by('id', $id, CategoryTaxonomy::TAXONOMY);
            if ($term) {
                return $term->name;
            }
            return;
        }
    }

    public function actionEditTerms($term_id, $taxonomy) {
        if ($taxonomy === static::TAXONOMY) {
            $key = sprintf('%s_url', App::PREFIX);
            if (isset($_POST[$key]) && !strlen($_POST[$key])) {
                if (defined('DOING_AJAX') && DOING_AJAX) {
                    die('URL is required.');
                } else {
                    AdminNoticeManager::enqueue(new AdminNotice(uniqid(), 'error', 'URL is required.'));
                    wp_redirect($_POST['_wp_http_referer']);
                }
                die();
            }
            $key = sprintf('%s_category', App::PREFIX);
            if (isset($_POST[$key]) && intval($_POST[$key]) === -1) {
                AdminNoticeManager::enqueue(new AdminNotice(uniqid(), 'error', 'Category is required.'));
                wp_redirect($_POST['_wp_http_referer']);
                die();
            }
        }
    }

    public function filterGetTermsDefaults($defaults, $taxonomies) {
        $key = sprintf('%s_category', App::PREFIX);
        if ($taxonomies[0] == static::TAXONOMY && isset($_GET[$key])) {
            $id = intval($_GET[$key]);
            if ($id) {
                $defaults['meta_query'] = array(
                    array(
                        'key' => sprintf('%s_category', App::PREFIX),
                        'value' => $id,
                        'compare' => '='
                    )
                );
            }
        }
        return $defaults;
    }

    public function filterRowActions($actions, $tag) {
        unset($actions['view']);
        return $actions;
    }

    public function actionQuickEditCustomBox($column_name, $screen, $taxonomy = NULL) {
        if ($taxonomy !== static::TAXONOMY) {
            return;
        }
        $key = sprintf('%s_url', App::PREFIX);
        if ($column_name == $key) {
            echo ViewHelper::load('views/backend/taxonomies/common/quick_edit_custom_box.php', array(
                'name' => $column_name,
                'type' => 'url',
                'title' => 'URL'
            ));
        }
    }

    private function updateFavicon($term_id) {
        $url = get_term_meta($term_id, sprintf('%s_url', App::PREFIX), TRUE);
        $tmpfile = download_url(sprintf('https://www.google.com/s2/favicons?domain_url=%s', urlencode($url)), 15);
        if (is_wp_error($tmpfile)) {
            AdminNoticeManager::enqueue(new AdminNoticeHelper(uniqid(), 'error', sprintf('Error occurred during favicon update: %s.', $tmpfile->get_error_message())));
            return;
        }
        wp_delete_attachment(intval(get_term_meta($term_id, sprintf('%s_favicon_attachment', App::PREFIX), TRUE)));
        $wp_upload_dir = wp_upload_dir();
        $url = preg_replace('/^http(s?)/', '', $url);
        $filename = sanitize_file_name(sprintf('%s-%s-favicon.ico', App::PREFIX, $url));
        $filename = $wp_upload_dir['path'] . '/' . $filename;
        rename($tmpfile, $filename);
        $filetype = wp_check_filetype(basename($filename), null);
        $attachment = array(
            'guid' => $wp_upload_dir['url'] . '/' . basename($filename),
            'post_mime_type' => $filetype['type'],
            'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
            'post_content' => '',
            'post_status' => 'private'
        );
        $attach_id = wp_insert_attachment($attachment, $filename);
        $key = sprintf('%s_favicon_attachment', App::PREFIX);
        update_term_meta($term_id, $key, $attach_id);
    }

}
