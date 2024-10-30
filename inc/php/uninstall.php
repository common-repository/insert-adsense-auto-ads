<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Delete options on uninstall
 */
function albteampiaaa1_uninstall() {
    delete_option( ALBTEAMPIAAA1_SETTINGS . '_settings' );
}
register_uninstall_hook( __FILE__, 'albteampiaaa1_uninstall' );
