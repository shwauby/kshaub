<?php

/*
  Plugin Name: CM Curated List Manager
  Plugin URI: https://www.cminds.com/
  Description: Lets you build curated boards of links with added description organized by categories and supported by filtering tools. This is a perfect tool for gathering and sharing knowledge.
  Author: CreativeMindsSolutions
  Version: 1.0.16
 */

namespace com\cminds\listmanager;

if (version_compare('5.3', PHP_VERSION, '>')) {
    die(sprintf('We are sorry, but you need to have at least PHP 5.3 to run this plugin (currently installed version: %s)'
                    . ' - please upgrade or contact your system administrator.', PHP_VERSION));
}

if (!class_exists('com\cminds\listmanager\App')) {

    require_once plugin_dir_path(__FILE__) . 'plugin/Psr4AutoloaderClass.php';

    $loader = new plugin\Psr4AutoloaderClass();
    $loader->register();
    $loader->addNamespace(__NAMESPACE__, untrailingslashit(plugin_dir_path(__FILE__)));

    class App extends plugin\PluginAbstract {

        const VERSION = '1.0.16';
        const PREFIX = 'cmlm';
        const SLUG = 'cm-list-manager';
        const PLUGIN_NAME = 'List Manager';
        const PLUGIN_NAME_EXTENDED = 'Curated List Manager';
        const PLUGIN_FILE = __FILE__;

    }

    include_once plugin_dir_path(__FILE__) . 'bundle/licensing/cminds-free.php';

    new App();
} else {
    die('Plugin is already activated.');
}
