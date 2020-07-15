<?php

namespace com\cminds\listmanager\plugin\options;

use com\cminds\listmanager\App;
use com\cminds\listmanager\plugin\helpers\ViewHelper;

class Options {

    private static $defaultOptions = array(
        'columns_count' => 2,
        'favicons_local_cache' => 0,
        'links_rel_nofollow' => 0,
        'links_target_blank' => 0);

    public function __construct() {
        add_action('init', array($this, 'actionInit'));
        add_action('admin_menu', array($this, 'actionAdminMenu'), 20);
    }

    public function actionInit() {
        if (isset($_POST['cmlm_action_update']) && isset($_POST['nonce']) && is_admin()) {
            if (wp_verify_nonce($_POST['nonce'], 'cmlm_action_update')) {
                foreach ($_POST as $k => $v) {
                    $this->updateOption($k, $v);
                }
            }
        }
    }

    public function actionAdminMenu() {
        add_submenu_page(App::SLUG, 'Options', 'Options', 'manage_options', sprintf('%s-options', App::PREFIX), array($this, 'displayOptionsPage'));
    }

    public function displayOptionsPage() {
        $content = ViewHelper::load('views/backend/options/options.php');
        echo ViewHelper::load('views/backend/options/template.php', array(
            'nav' => $this->nav(),
            'content' => $content)
        );
    }

    public static function getOption($option) {
        if (static::isValidOption($option)) {
            return get_option(sprintf('%s_%s', App::PREFIX, $option), static::$defaultOptions[$option]);
        } else {
            return NULL;
        }
    }

    public static function updateOption($option, $value) {
        if (static::isValidOption($option)) {
            return update_option(sprintf('%s_%s', App::PREFIX, $option), $value);
        } else {
            return FALSE;
        }
    }

    public static function isValidOption($option) {
        return key_exists($option, static::$defaultOptions);
    }

    private static function nav() {
        global $self, $parent_file, $submenu_file, $plugin_page, $typenow, $submenu;
        $submenus = array();

        $menuItem = App::SLUG;

        if (isset($submenu[$menuItem])) {
            $thisMenu = $submenu[$menuItem];

            foreach ($thisMenu as $sub_item) {
                $slug = $sub_item[2];

                // Handle current for post_type=post|page|foo pages, which won't match $self.
                $self_type = !empty($typenow) ? $self . '?post_type=' . $typenow : 'nothing';

                $isCurrent = FALSE;
                $subpageUrl = get_admin_url('', 'admin.php?page=' . $slug);

                if ((!isset($plugin_page) && $self == $slug) || (isset($plugin_page) && $plugin_page == $slug && ($menuItem == $self_type || $menuItem == $self || file_exists($menuItem) === false))) {
                    $isCurrent = TRUE;
                }

                $url = (strpos($slug, '.php') !== false || strpos($slug, 'http') !== false) ? $slug : $subpageUrl;
                $isExternalPage = strpos($slug, 'http') !== FALSE;
                $submenus[] = array(
                    'link' => $url,
                    'title' => $sub_item[0],
                    'current' => $isCurrent,
                    'target' => $isExternalPage ? '_blank' : ''
                );
            }
        }
        return ViewHelper::load('views/backend/options/nav.php', array('submenus' => $submenus));
    }

}
