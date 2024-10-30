<?php
/**
 * Plugin Name: Insert Adsense Auto Ads
 * Plugin URI: https://www.mainspot.net/google-adsense-auto-ads/
 * Description: Easily add your Adsense Auto Ads (or any other javascript code) to the WordPress header section.
 * Author: Albteam
 * Version: 1.1
 * License: GPL3
 * Text Domain: insert-adsense-auto-ads
 *
 * Copyright 2019 AlbTeam
 *
 * This plugin is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This plugin is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this plugin. If not, see <http://www.gnu.org/licenses/>.
 *
 */


/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Define global constants
 */
$plugin_data = get_file_data( __FILE__,
                              array(
                                     'name'    => 'Plugin Name',
                                     'version' => 'Version',
                                     'text'    => 'Text Domain'
                                   )
                            );
function albteampiaaa1_define_constants( $constant_name, $value ) {
    $constant_name = 'ALBTEAMPIAAA1_' . $constant_name;   
    if ( !defined( $constant_name ) )
        define( $constant_name, $value );
}
albteampiaaa1_define_constants( 'DIR', dirname( plugin_basename( __FILE__ ) ) );
albteampiaaa1_define_constants( 'BASE', plugin_basename( __FILE__ ) );
albteampiaaa1_define_constants( 'URL', plugin_dir_url( __FILE__ ) );
albteampiaaa1_define_constants( 'PATH', plugin_dir_path( __FILE__ ) );
albteampiaaa1_define_constants( 'SLUG', dirname( plugin_basename( __FILE__ ) ) );
albteampiaaa1_define_constants( 'NAME', $plugin_data['name'] );
albteampiaaa1_define_constants( 'VERSION', $plugin_data['version'] );
albteampiaaa1_define_constants( 'TEXT', $plugin_data['text'] );
albteampiaaa1_define_constants( 'PREFIX', 'albteampiaaa1' );
albteampiaaa1_define_constants( 'SETTINGS', 'albteampiaaa1' );

/**
 * Load the plugin modules
 */
require_once( ALBTEAMPIAAA1_PATH . 'inc/php/core.php' );
require_once( ALBTEAMPIAAA1_PATH . 'inc/php/versioning.php' );
require_once( ALBTEAMPIAAA1_PATH . 'inc/php/enqueue.php' );
require_once( ALBTEAMPIAAA1_PATH . 'inc/php/functional.php' );
require_once( ALBTEAMPIAAA1_PATH . 'inc/php/page.php' );
require_once( ALBTEAMPIAAA1_PATH . 'inc/php/messages.php' );
require_once( ALBTEAMPIAAA1_PATH . 'inc/php/uninstall.php' );