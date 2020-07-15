<?php

namespace com\cminds\listmanager\plugin;

abstract class PluginAbstract {

    const VERSION = '';
    const PREFIX = '';
    const SLUG = '';
    const PLUGIN_NAME = '';
    const PLUGIN_NAME_EXTENDED = '';
    const PLUGIN_FILE = '';

    public function __construct() {
        new taxonomies\CategoryTaxonomy();
        new taxonomies\LinkTaxonomy();
        new options\Options();
        new shortcodes\Shortcode();
        notices\AdminNoticeManager::init();

        add_action('admin_menu', array($this, 'actionAdminMenu'));
        add_action('init', array($this, 'actionInit'));
    }

    public function actionAdminMenu() {
        add_menu_page(
            static::SLUG,
            static::PLUGIN_NAME_EXTENDED,
            'manage_options',
            static::SLUG,
            function( $q ){ return; },
            'dashicons-list-view'
        );
    }

    public function actionInit() {
        wp_register_style(
            'cmlm-backend-admin',
            plugin_dir_url(static::PLUGIN_FILE) . 'assets/backend/css/admin.css',
            array(),
            static::VERSION
        );
    }

}
