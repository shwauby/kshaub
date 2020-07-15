<?php

namespace com\cminds\listmanager\plugin\frontend\walkers;

use com\cminds\listmanager\App;
use com\cminds\listmanager\plugin\options\Options;

class LinkWalker extends \Walker_Category {

    private $show_tags = true;

    public function __construct($arr = array()) {
        if (isset($arr['show_tags'])) {
            $this->show_tags = $arr['show_tags'];
        }
    }

    public function start_lvl(&$output, $depth = 0, $args = array()) {
        $output .= "<ul class='children'>";
    }

    public function end_lvl(&$output, $depth = 0, $args = array()) {
        $output .= "</ul>";
    }

    public function start_el(&$output, $category, $depth = 0, $args = array(), $id = 0) {
        $meta = get_term_meta($category->term_id);
        $url = isset($meta[sprintf('%s_url', App::PREFIX)]) ? $meta[sprintf('%s_url', App::PREFIX)][0] : NULL;
        $create_time = isset($meta[sprintf('%s_create_time', App::PREFIX)]) ? intval($meta[sprintf('%s_create_time', App::PREFIX)][0]) : 0;
        $edit_time = isset($meta[sprintf('%s_edit_time', App::PREFIX)]) ? intval($meta[sprintf('%s_edit_time', App::PREFIX)][0]) : 0;
        $favicon = $this->metaToFavicon($meta);
        $tag_id_arr = $this->metaToTagIdArr($meta);

        $rel_nofollow = '';
        if (Options::getOption('links_rel_nofollow')) {
            $rel_nofollow = 'rel="nofollow"';
        }

        $target = '';
        if (Options::getOption('links_target_blank')) {
            $target = 'target="_blank"';
        }

        $output .= '<li class="cmlm-category-link-list-entry">';
        $output .= sprintf('<a href="%s" class="cmlm-link" title="%s" %s %s data-create-time="%s" data-edit-time="%s">', $url, esc_attr($category->description), $rel_nofollow, $target, $create_time, $edit_time);
        if ($favicon) {
            $output .= sprintf('<img src="%s" alt="" class="cmlm-favicon" />', $favicon);
        }
        $output .= $category->name;
        $output .= '</a>';
    }

    public function end_el(&$output, $page, $depth = 0, $args = array()) {
        $output .= "</li>";
    }

    private function metaToFavicon($meta) {
        if (Options::getOption('favicons_local_cache')) {
            $key = sprintf('%s_favicon_attachment', App::PREFIX);
            $res = FALSE;
            if (isset($meta[$key])) {
                $res = wp_get_attachment_url(intval($meta[$key][0]));
            }
            return $res;
        } else {
            $url = isset($meta[sprintf('%s_url', App::PREFIX)]) ? $meta[sprintf('%s_url', App::PREFIX)][0] : NULL;
            if (!$url) {
                $url = 'localhost';
            }
            return sprintf('https://www.google.com/s2/favicons?domain_url=%s', urlencode($url));
        }
    }

    private function metaToTagIdArr($meta) {
        $key = sprintf('%s_tag', App::PREFIX);
        $res = array();
        if (isset($meta[$key])) {
            $res = $meta[$key];
        }
        return $res;
    }

}
