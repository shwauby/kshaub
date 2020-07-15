<?php

namespace com\cminds\listmanager\plugin\taxonomies;

use com\cminds\listmanager\App;
use com\cminds\listmanager\plugin\helpers\HTMLHelper;

class CategoryTaxonomy extends TaxonomyAbstract {

    const TAXONOMY = 'cmlm_category';

    public function __construct() {
        parent::__construct();
        add_action('admin_menu', array($this, 'actionAdminMenu'));
        add_action('admin_head', array($this, 'actionAdminHead'));
        add_action(sprintf('%s_add_form_fields', static::TAXONOMY), array($this, 'actionAddFormFields'));
        add_action(sprintf('%s_edit_form_fields', static::TAXONOMY), array($this, 'actionEditFormFields'));
        add_action(sprintf('create_%s', static::TAXONOMY), array($this, 'actionCreate'));
        add_action(sprintf('edited_%s', static::TAXONOMY), array($this, 'actionEdited'));
        add_filter(sprintf('%s_row_actions', static::TAXONOMY), array($this, 'filterRowActions'), 10, 2);
        add_filter(sprintf('manage_edit-%s_columns', static::TAXONOMY), array($this, 'filterManageColumns'));
        add_filter(sprintf('manage_%s_custom_column', static::TAXONOMY), array($this, 'filterManageCustomColumn'), 10, 3);
    }

    public function actionInit() {
        parent::actionInit();
        register_taxonomy(self::TAXONOMY, NULL, array(
            'label' => 'Categories',
            'show_ui' => TRUE,
            'show_admin_column' => TRUE,
            'hierarchical' => TRUE
        ));
        wp_register_script('cmlm-backend-category-taxonomy', plugin_dir_url(App::PLUGIN_FILE) . 'assets/backend/js/category-taxonomy.js', array('jquery', 'common'), App::VERSION);
    }

    public function actionAdminMenu() {
        add_submenu_page(App::SLUG, 'Categories', 'Categories', 'manage_options', 'edit-tags.php?taxonomy=cmlm_category');
    }

    public function actionAdminHead() {
        if (get_current_screen()->taxonomy == static::TAXONOMY) {
            HTMLHelper::enqueueInputColorAssets();
            echo "<style>.form-field.term-slug-wrap{ display: none !important; }</style>\n";
            echo "<style>.form-field.term-description-wrap{ display: none !important; }</style>\n";
            echo "<style>.inline-edit-col label:nth-child(2){ display: none !important; }</style>\n";
        }
    }

    public function actionAdminEnqueueScripts() {
        if (get_current_screen()->taxonomy == static::TAXONOMY) {
            wp_enqueue_script('cmlm-backend-category-taxonomy');
            wp_enqueue_style('cmlm-backend-admin');
        }
    }

    public function actionAddFormFields() {
        
    }

    public function actionEditFormFields($term) {
        
    }

    public function actionCreate($term_id) {
        
    }

    public function actionEdited($term_id) {
        return $this->actionCreate($term_id);
    }

    public function filterRowActions($actions, $tag) {
        unset($actions['view']);
        return $actions;
    }

    public function filterManageColumns($columns) {
        unset($columns['posts']);
        unset($columns['slug']);
        unset($columns['description']);
        return $columns;
    }

    public function filterManageCustomColumn($out, $column_name, $term_id) {
        
    }

}
