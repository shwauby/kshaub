<?php

use com\cminds\listmanager\plugin\frontend\walkers\CategoryWalker;
use com\cminds\listmanager\plugin\taxonomies\CategoryTaxonomy;
?>

<div class="cmlm">
    <div class="cmlm-filter">

        <?php
        $cat_terms = get_terms(CategoryTaxonomy::TAXONOMY, array(
            'hide_empty' => FALSE
        ));

        $cat_term_id_arr = array_map(function($x) {
            return $x->term_id;
        }, (array) $cat_terms);
        $cat_term_id_arr[] = -1;
        ?>
    </div>

    <div class="cmlm-content">
        <?php
        wp_list_categories(array(
            'hide_empty' => FALSE,
            'hierarchical' => TRUE,
            'title_li' => NULL,
            'include' => $cat_term_id_arr,
            'taxonomy' => CategoryTaxonomy::TAXONOMY,
            'walker' => new CategoryWalker()
        ));
        ?>
    </div>
</div>