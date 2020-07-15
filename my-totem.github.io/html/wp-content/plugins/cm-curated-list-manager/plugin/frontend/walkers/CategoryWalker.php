<?php

namespace com\cminds\listmanager\plugin\frontend\walkers;

use com\cminds\listmanager\App;
use com\cminds\listmanager\plugin\taxonomies\LinkTaxonomy;
use com\cminds\listmanager\plugin\frontend\walkers\LinkWalker;

class CategoryWalker extends \Walker_Category {

    public function start_lvl(&$output, $depth = 0, $args = array()) {
        $output .= "<div class='children'>";
    }

    public function end_lvl(&$output, $depth = 0, $args = array()) {
        $output .= "</div>";
    }

    public function start_el(&$output, $category, $depth = 0, $args = array(), $id = 0) {
        if ($depth == 0) {
            $output .= '<div class="cmlm-category-box">';
        }
        $output .= sprintf('<div class="cmlm-category" data-id="%s" data-role="category">', $category->term_id);
        $output .= sprintf('<div class="cmlm-header">%s</div>', $category->name);
        $html = wp_list_categories(array(
            'hide_empty' => FALSE,
            'hierarchical' => TRUE,
            'echo' => FALSE,
            'include' => $this->getRelatedLinkTaxID($category),
            'title_li' => NULL,
            'show_option_none' => NULL,
            'taxonomy' => LinkTaxonomy::TAXONOMY,
            'walker' => new LinkWalker()
        ));
        if ($html) {
            $output .= "<ul class='cmlm-category-link-list'>{$html}</ul>";
        }
    }

    public function end_el(&$output, $page, $depth = 0, $args = array()) {
        $output .= "</div>";
        if ($depth == 0) {
            $output .= "</div>";
        }
    }

    private function getRelatedLinkTaxID($category) {
        $terms = get_terms(LinkTaxonomy::TAXONOMY, array(
            'hide_empty' => FALSE,
            'meta_query' => array(
                array(
                    'key' => sprintf('%s_category', App::PREFIX),
                    'value' => $category->term_id,
                    'compare' => '='
                )
            )
        ));
        $term_id_arr = array_map(function($x) {
            return $x->term_id;
        }, (array) $terms);
        $term_id_arr[] = -1;
        return $term_id_arr;
    }

}
