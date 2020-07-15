<?php

use com\cminds\listmanager\App;
use com\cminds\listmanager\plugin\taxonomies\CategoryTaxonomy;
use com\cminds\listmanager\plugin\taxonomies\TagTaxonomy;
?>

<div class="form-field form-required">
    <label for="term-url">URL</label>
    <input name="<?php echo sprintf('%s_url', App::PREFIX); ?>" id="term-url" type="url" value="" size="40" aria-required="true"/>
    <p>The link is target address.</p>
</div>

<div class="form-field form-required">
    <label for="term-category_id">Category</label>
    <?php
    wp_dropdown_categories(array(
        'show_option_none' => 'Select category',
        'name' => sprintf('%s_category', App::PREFIX),
        'id' => 'term-category_id',
        'taxonomy' => CategoryTaxonomy::TAXONOMY,
        'hide_empty' => FALSE,
        'hierarchical' => TRUE,
        'orderby' => NULL
    ));
    ?>
    <p>The category group your links.</p>
</div>
