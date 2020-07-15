<?php

namespace com\cminds\listmanager\plugin\shortcodes;

use com\cminds\listmanager\App;
use com\cminds\listmanager\plugin\helpers\ViewHelper;
use com\cminds\listmanager\plugin\taxonomies\ListTaxonomy;
use com\cminds\listmanager\plugin\options\Options;

class Shortcode {

    const SHORTCODE = 'cm_list_manager';

    public function __construct() {
        add_action('init', array($this, 'actionInit'));
        add_action('init', array($this, 'actionAddShortcode'));
    }

    public function actionInit() {
        wp_register_style('cmlm-frontend', plugin_dir_url(App::PLUGIN_FILE) . 'assets/frontend/css/frontend.css', array(), App::VERSION);
        wp_register_script('masonry', plugin_dir_url(App::PLUGIN_FILE) . 'assets/frontend/js/masonry.pkgd.min.js', array('jquery'), App::VERSION);
        wp_register_script('cmlm-frontend', plugin_dir_url(App::PLUGIN_FILE) . 'assets/frontend/js/frontend.js', array('jquery', 'masonry'), App::VERSION);
        wp_localize_script('cmlm-frontend', 'cmlmOptions', array('columnsCount' => Options::getOption('columns_count')));
    }

    public function actionAddShortcode() {
        add_shortcode(static::SHORTCODE, array($this, 'shortcode'));
    }

    public function shortcode($atts) {

        wp_enqueue_style('cmlm-frontend');
        wp_enqueue_script('cmlm-frontend');

        return ViewHelper::load('views/frontend/shortcodes/shortcode.php');
    }

    private function error($s) {
        return ViewHelper::load('views/frontend/shortcodes/error.php', array('message' => $s));
    }

}
