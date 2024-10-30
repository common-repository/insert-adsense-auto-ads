<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Inject scripts in the frontend head and footer
 */
add_action( 'wp_head', 'albteampiaaa1_inject_head_end', 1000 );

/**
 * Prepare scripts for outputing
 */
function albteampiaaa1_inject_head_end() { albteampiaaa1_output('header_end'); }

/**
 * Outputs the given setting, if conditions are met
 */
function albteampiaaa1_output( $option ) {

    // Ignore admin, feed, robots or trackbacks
    if (is_admin() || is_feed() || is_robots() || is_trackback()) {
        return;
    }

    // Read options from database and declare variables
    $options = get_option( ALBTEAMPIAAA1_SETTINGS . '_settings' );
    $data = $options[$option];

    // If data is empty then exit
    if( empty( $data ) ) {
        return;
    }

    // Add comments to output
    $data_out = "\n<!-- [BEGIN] Scripts added via Insert Adsense Auto Ads plugin -->\n";
    $data_out .= $data;
    $data_out .= "\n<!-- [END] Scripts added via Insert Adsense Auto Ads plugin -->\n\n";

    // Output
    echo $data_out;
}
