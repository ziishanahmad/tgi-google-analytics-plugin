<?php
/*
Plugin Name: TGI Google Analytics
Description: Adds Google Analytics code to all pages and posts, with an admin area to configure the tracking ID.
Author: Zeeshan Ahmad
Author URI: https://tabsgi.com
Version: 1.0
Email: ziishanahmad@gmail.com
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Hook to add Google Analytics code in the header
add_action( 'wp_head', 'tgi_add_google_analytics_code' );

function tgi_add_google_analytics_code() {
    $ga_id = get_option( 'tgi_google_analytics_id' );
    if ( ! empty( $ga_id ) ) {
        echo "
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src='https://www.googletagmanager.com/gtag/js?id=$ga_id'></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', '$ga_id');
        </script>
        ";
    }
}

// Hook to create admin menu
add_action( 'admin_menu', 'tgi_google_analytics_menu' );

function tgi_google_analytics_menu() {
    add_menu_page(
        'TGI Google Analytics Settings',
        'TGI Google Analytics',
        'manage_options',
        'tgi-google-analytics',
        'tgi_google_analytics_settings_page',
        'dashicons-chart-area', // You can change this to any dashicon you prefer
        90 // Position in the menu
    );
}

// Settings page content
function tgi_google_analytics_settings_page() {
    ?>
    <div class="wrap">
        <h1>TGI Google Analytics Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields( 'tgi-google-analytics-settings-group' );
            do_settings_sections( 'tgi-google-analytics-settings-group' );
            $ga_id = get_option( 'tgi_google_analytics_id' );
            ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Google Analytics Tracking ID</th>
                    <td><input type="text" name="tgi_google_analytics_id" value="<?php echo esc_attr( $ga_id ); ?>" /></td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}

// Hook to register settings
add_action( 'admin_init', 'tgi_google_analytics_settings' );

function tgi_google_analytics_settings() {
    register_setting( 'tgi-google-analytics-settings-group', 'tgi_google_analytics_id' );
}
