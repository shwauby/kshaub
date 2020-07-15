<?php

use com\cminds\listmanager\App;
use com\cminds\listmanager\plugin\taxonomies\CategoryTaxonomy;
use com\cminds\listmanager\plugin\taxonomies\TagTaxonomy;
?>

<tr class="form-field form-required">
    <th scope="row" valign="top"><label for="term-url">URL</label></th>
    <td>
        <input name="<?php echo sprintf('%s_url', App::PREFIX); ?>" id="term-url" type="url" value="<?php echo esc_html($url); ?>" size="40" aria-required="true"/>
        <p class="description">The link is target address.</p>
    </td>
</tr>
<tr class="form-field form-required">
    <th scope="row" valign="top"><label for="term-category_id">Category</label></th>
    <td>
        <?php
        wp_dropdown_categories(array(
            'show_option_none' => 'Select category',
            'name' => sprintf('%s_category', App::PREFIX),
            'id' => 'term-category_id',
            'taxonomy' => CategoryTaxonomy::TAXONOMY,
            'hide_empty' => FALSE,
            'selected' => $category_id,
            'hierarchical' => TRUE
        ));
        ?>
        <p class="description">The category group your links.</p>
    </td>
</tr>

