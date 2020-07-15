<?php

namespace com\cminds\listmanager\plugin\taxonomies;

use com\cminds\listmanager\App;

abstract class TaxonomyAbstract {

    const TAXONOMY = '';

    public function __construct() {
        add_action('init', array($this, 'actionInit'));
        add_filter('parent_file', array($this, 'filterParentFile'), 10, 2);
        add_action('admin_enqueue_scripts', array($this, 'actionAdminEnqueueScripts'));
    }

    public function actionInit() {

    }

    public function filterParentFile($parent_file) {
        if (isset($_GET['taxonomy']) && ($_GET['taxonomy'] == static::TAXONOMY)) {
            $parent_file = App::SLUG;
        }
        return $parent_file;
    }

    public function actionAdminEnqueueScripts() {
        
    }

}
