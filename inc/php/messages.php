<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );


/**
 * Successfull message
 */
function albteampiaaa1_successfull_message() {

    // After settings updated
    if ( isset( $_GET['settings-updated'] ) ) {
        ?>
            <div id="message" class="updated">
                <p><?php _e( 'Scripts updated successfully.', ALBTEAMPIAAA1_TEXT ); ?></p>
            </div>
        <?php
    }
}