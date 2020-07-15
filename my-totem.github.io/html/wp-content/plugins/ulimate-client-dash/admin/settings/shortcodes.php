<?php


// Shortcodes Settings

add_action( 'ucd_settings_content', 'ucd_shortcodes_page' );
function ucd_shortcodes_page() {
		global $ucd_active_tab;
		if ( 'shortcodes' != $ucd_active_tab )
		return;
?>

  	<h3><?php _e( 'Usable Shortcodes', 'ultimate-client-dash' ); ?></h3>

		<!-- Begin settings form -->
    <form action="options.php" method="post">

						<!-- Dashboard Styling Option Section -->

						<div class="ucd-inner-wrapper settings-shortcodes">
						<p class="ucd-settings-desc">Useful shortcodes you can use throughout your website to dynamically populate data. Example: Auto update copyright date in footer based on current year.</p>

						<div class="ucd-form-message"><?php settings_errors('ucd-notices'); ?></div>

								<table class="form-table">
								<tbody>

                  <tr class="ucd-title-holder">
                  <th><h2 class="ucd-inner-title"><?php _e( 'Site Information', 'ultimate-client-dash' ) ?></h2></th>
                  </tr>

                        <tr class="ucd-shortcode-tr ucd-pro-version">
                        <th><code>[site-title]</code></th>
                            <td><p>Shortcode to display the site title.</p></td>
                        </tr>

                        <tr class="ucd-shortcode-tr ucd-pro-version">
                        <th><code>[site-description]</code></th>
                            <td><p>Shortcode to display the site description.</p></td>
                        </tr>

                        <tr class="ucd-shortcode-tr ucd-pro-version">
                        <th><code>[url]</code></th>
                            <td><p>Shortcode to display the site url.</p></td>
                        </tr>

                        <tr class="ucd-shortcode-tr ucd-pro-version">
                        <th><code>[admin-email]</code></th>
                            <td><p>Shortcode to display the admin email.</p></td>
                        </tr>

                <tr class="ucd-title-holder">
                <th><h2 class="ucd-inner-title"><?php _e( 'User Information', 'ultimate-client-dash' ) ?></h2></th>
                </tr>

                      <tr class="ucd-shortcode-tr ucd-pro-version">
                      <th><code>[username]</code></th>
                          <td><p>Shortcode to display the current users username.</p></td>
                      </tr>

                      <tr class="ucd-shortcode-tr ucd-pro-version">
                      <th><code>[email]</code></th>
                          <td><p>Shortcode to display the current users email.</p></td>
                      </tr>

											<tr class="ucd-shortcode-tr ucd-pro-version">
                      <th><code>[first-name]</code></th>
                          <td><p>Shortcode to display the current users first name.</p></td>
                      </tr>

											<tr class="ucd-shortcode-tr ucd-pro-version">
                      <th><code>[last-name]</code></th>
                          <td><p>Shortcode to display the current users last name.</p></td>
                      </tr>

											<tr class="ucd-shortcode-tr ucd-pro-version">
                      <th><code>[display-name]</code></th>
                          <td><p>Shortcode to display the current users display name.</p></td>
                      </tr>


                <tr class="ucd-title-holder">
								<th><h2 class="ucd-inner-title"><?php _e( 'Date', 'ultimate-client-dash' ) ?></h2></th>
								</tr>

                      <tr class="ucd-shortcode-tr ucd-pro-version">
                      <th><code>[year]</code></th>
                          <td><p>Shortcode to display the current year.</p></td>
                      </tr>

                      <tr class="ucd-shortcode-tr ucd-pro-version">
                      <th><code>[month]</code></th>
                          <td><p>Shortcode to display the current month.</p></td>
                      </tr>

                      <tr class="ucd-shortcode-tr ucd-pro-version">
                      <th><code>[day]</code></th>
                          <td><p>Shortcode to display the current day.</p></td>
                      </tr>

                <tr class="ucd-title-holder">
								<th><h2 class="ucd-inner-title"><?php _e( 'Symbols', 'ultimate-client-dash' ) ?></h2></th>
								</tr>

                      <tr class="ucd-shortcode-tr ucd-pro-version">
                      <th><code>[copyright]</code></th>
                          <td><p>Shortcode to display copyright symbol.</p></td>
                      </tr>

                      <tr class="ucd-shortcode-tr ucd-pro-version">
                      <th><code>[registered]</code></th>
                          <td><p>Shortcode to display the registered symbol.</p></td>
                      </tr>

                      <tr class="ucd-shortcode-tr ucd-pro-version">
                      <th><code>[trademark]</code></th>
                          <td><p>Shortcode to display the trademark symbol.</p></td>
                      </tr>

								</tbody>
								</table>
						</div>
      </form>
<?php }
