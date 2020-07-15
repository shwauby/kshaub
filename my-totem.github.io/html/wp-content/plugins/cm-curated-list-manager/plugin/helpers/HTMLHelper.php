<?php

namespace com\cminds\listmanager\plugin\helpers;

use com\cminds\listmanager\App;

class HTMLHelper {

    public static function inputColor($name, $value = '#FFFFFF', $arr = array()) {
        if (isset($arr['class'])) {
            $arr['class'] = $arr['class'] . ' cmlm-input-color';
        } else {
            $arr['class'] = 'cmlm-input-color';
        }
        $arr = array_merge(array(
            'size' => '40',
            'aria-required' => 'true',
            'id' => uniqid('id')
                ), $arr);
        array_walk($arr, function(&$v, $k) {
            $v = sprintf('%s="%s"', $k, $v);
        });
        return sprintf('<input name="%s" type="text" value="%s" %s />', $name, esc_html($value), implode(' ', $arr));
    }

    public static function enqueueInputColorAssets() {
        wp_enqueue_style('wp-color-picker');
        wp_enqueue_script('cmlm-backend-color-picker', plugin_dir_url(App::PLUGIN_FILE) . 'assets/backend/js/color-picker.js', array('wp-color-picker'), App::VERSION);
    }

}
