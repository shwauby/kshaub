<?php

$cminds_plugin_config = array(
    'plugin-is-pro' => FALSE,
    'plugin-has-addons' => FALSE,
    'plugin-version' => com\cminds\listmanager\App::VERSION,
    'plugin-abbrev' => com\cminds\listmanager\App::PREFIX,
    'plugin-short-slug' => com\cminds\listmanager\App::SLUG,
    'plugin-parent-short-slug' => '',
	'plugin-redirect-after-install'	 => admin_url( 'admin.php?page=cmlm-options' ),
    'plugin-show-guide'              => TRUE,
     'plugin-upgrade-text'           => 'Good Reasons to Upgrade to Pro',
    'plugin-upgrade-text-list'      => array(
        array( 'title' => 'Introduction to curated list manager', 'video_time' => '0:00' ),
        array( 'title' => 'Search and filter main list', 'video_time' => '0:35' ),
        array( 'title' => 'Filter list by category', 'video_time' => '0:55' ),
        array( 'title' => 'Tooltip support with additional information', 'video_time' => '1:03' ),
        array( 'title' => 'Checkbox support', 'video_time' => '1:15' ),
        array( 'title' => 'Tags support', 'video_time' => '1:27' ),
        array( 'title' => 'Advanced configuration options', 'video_time' => '1:45' ),
        array( 'title' => 'Advanced apperance options', 'video_time' => '2:00' ),
    ),
    'plugin-upgrade-video-height'   => 240,
    'plugin-upgrade-videos'         => array(
        array( 'title' => 'Curated List Premium Features', 'video_id' => '173797080' ),
    ),

    'plugin-guide-text'              => '    <div style="display:block">
        <ol>
            <li>Go to <strong>"Categories"</strong> under the CM List Manager menu</li>
            <li>Add as many categories as needed</li>
            <li>Go to <strong>"Links"</strong> under the CM List Manager menu</li>
            <li>Add as many links as needed while assigning each one of them to a category</li>
            <li>Place the shortcode [cm_list_manager] in any post or page.</li>
            <li><strong>View</strong> this post or page to see the curated list created</li>
        </ol>
    </div>',
    'plugin-guide-video-height'      => 240,
    'plugin-guide-videos'            => array(
        array( 'title' => 'Installation tutorial', 'video_id' => '164061177' ),
    ),
    'plugin-file' => com\cminds\listmanager\App::PLUGIN_FILE,
    'plugin-dir-path' => plugin_dir_path(com\cminds\listmanager\App::PLUGIN_FILE),
    'plugin-dir-url' => plugin_dir_url(com\cminds\listmanager\App::PLUGIN_FILE),
    'plugin-basename' => plugin_basename(com\cminds\listmanager\App::PLUGIN_FILE),
    'plugin-icon' => '',
    'plugin-name' => com\cminds\listmanager\App::PLUGIN_NAME,
    'plugin-license-name' => com\cminds\listmanager\App::PLUGIN_NAME_EXTENDED,
    'plugin-slug' => '',
    'plugin-menu-item' => com\cminds\listmanager\App::SLUG,
    'plugin-textdomain' => com\cminds\listmanager\App::SLUG,
    'plugin-userguide-key' => '663-curated-list-manager-cmclm',
    'plugin-store-url' => 'https://www.cminds.com/wordpress-plugins-library/curated-list-manager-and-knowledgebase-plugin-for-wordpress/',
    'plugin-support-url' => '',
    'plugin-review-url' => '',
    'plugin-changelog-url' => 'https://www.cminds.com/wordpress-plugins-library/curated-list-manager-and-knowledgebase-plugin-for-wordpress/#changelog',
    'plugin-licensing-aliases' => array(com\cminds\listmanager\App::PLUGIN_NAME_EXTENDED),
    'plugin-compare-table'   => '
             <div class="pricing-table" id="pricing-table"><h2 style="padding-left:10px;">Upgrade The Curated List Manager Plugin:</h2>
                <ul>
                    <li class="heading" style="background-color:red;">Current Edition</li>
                    <li class="price">FREE<br /></li>
                 <li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Create one list of curated links</li>
                 <li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Place anywhere using a shortcode</li>
                     <hr>
                    Other CreativeMinds Offerings
                    <hr>
                 <a href="https://www.cminds.com/wordpress-plugins-library/seo-keyword-hound-wordpress/" target="blank"><img src="' . plugin_dir_url( __FILE__ ). 'views/Hound2.png"  width="220"></a><br><br><br>
                <a href="https://www.cminds.com/store/cm-wordpress-plugins-yearly-membership/" target="blank"><img src="' . plugin_dir_url( __FILE__ ). 'views/banner_yearly-membership_220px.png"  width="220"></a><br>
               </ul>

                <ul>
                         <li class="heading">Pro<a href="https://www.cminds.com/wordpress-plugins-library/curated-list-manager-and-knowledgebase-plugin-for-wordpress/" style="float:right;font-size:11px;color:white;" target="_blank">More</a></li>
                    <li class="price">$39.00<br /> <span style="font-size:14px;">(For one Year / 2 Sites)<br />Additional pricing options available <a href="https://www.cminds.com/wordpress-plugins-library/curated-list-manager-and-knowledgebase-plugin-for-wordpress/" target="_blank"> >>> </a></span> <br /></li>
                    <li class="action"><a href="https://www.cminds.com/downloads/cm-curated-list-manager/?edd_action=add_to_cart&download_id=99707&wp_referrer=https://www.cminds.com/checkout/&edd_options[price_id]=1" style="font-size:18px;" target="_blank">Upgrade Now</a></li>
                     <li style="text-align:left;"><span class="dashicons dashicons-yes"></span>All Free Version Features <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="All free features are supported in the pro"></span></li>
<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Multiple lists<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="User can create multiple lists and place them anywhere on a page or a post."></span></li>
<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Tags support<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Tags can be placed near links. User can filter list items by tags. User can set color for each tag."></span></li>
<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Fast filtering support<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="User can filter links by text, categories or tags."></span></li>
<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Category background color<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="User can choose to set a background color for each category."></span></li>
<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Styling options<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="User can define several options for the look and feel of the list including the  tooltip color, the category background colors, font size and more."></span></li>
<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Last update date <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="In each list show the last update date."></span></li>
<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Number of items/links included in list<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="For each list show the number of items included in list."></span></li>
<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Ordering options<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Order categories within each list and links within each category using drag and drop interface."></span></li>
<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Link type<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title=" Link can have an icon or a checkbox. Once used with a checkbox plugin remember user selection using a tracking cookie. This is good for todo lists"></span></li>
<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Subtitle<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Each link can have a subtitle text while appears under the link title."></span></li>
<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Image<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Each link can have an image beside the favicon which appears on the right side of the link. User need to specify for each link the image URL."></span></li>
<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Mark new links<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="You can define in the plugin setting to automatically mark links not older than X days with the tag NEW."></span></li>
<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Bookmarklet<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="You can easily add links to your curated list while adding a bookmarklet to your browser bar. Clicking on it will open a pop-up showing the link most important fields."></span></li>
<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Category widget and shortcode<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Support both widget to display a category with all links and also a shortcode to be placed on any post or pages showing all links related to category."></span></li>
<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Import and Export<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Export all links to a CSV file which contains the category, URL, Title, Description and slug. Easily import it to another site"></span></li>
<li style="text-align:left;"><span class="dashicons dashicons-yes"></span>Order Links in Category<span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:green" title="Ability to define how links are ordered in category ."></span></li>             
                  <li class="support" style="background-color:lightgreen; text-align:left; font-size:14px;"><span class="dashicons dashicons-yes"></span> One year of expert support <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:grey" title="You receive 365 days of WordPress expert support. We will answer questions you have and also support any issue related to the plugin. We will also provide on-site support."></span><br />
                         <span class="dashicons dashicons-yes"></span> Unlimited product updates <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:grey" title="During the license period, you can update the plugin as many times as needed and receive any version release and security update"></span><br />
                        <span class="dashicons dashicons-yes"></span> Plugin can be used forever <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:grey" title="Once license expires, If you choose not to renew the plugin license, you can still continue to use it as long as you want."></span><br />
                        <span class="dashicons dashicons-yes"></span> Save 40% once renewing license <span class="dashicons dashicons-admin-comments cminds-package-show-tooltip" style="color:grey" title="Once license expires, If you choose to renew the plugin license you can do this anytime you choose. The renewal cost will be 35% off the product cost."></span></li>
                 </ul>

            </div>',
);