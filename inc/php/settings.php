<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Render Settings Tab Content
 */
?>
    <div class="has-sidebar sm-padded">
        <div id="post-body-content" class="has-sidebar-content">
            <div class="meta-box-sortabless">

                <form action="options.php" method="post" enctype="multipart/form-data">
                    <?php settings_fields( ALBTEAMPIAAA1_SETTINGS . '_settings_group' ); ?>

                    <?php
                        // Get options from the database
                        $options = get_option( ALBTEAMPIAAA1_SETTINGS . '_settings' );

                        // Set default value if option is empty
                        $header_end = !empty( $options['header_end'] ) ? esc_attr( $options['header_end'] ) : '';

                        // Add rows if all the rows is less than 10
                        $type = array("header_end");
                        foreach ( $type as $value ) {
                            $i = count(explode("\n", $$value));
                            for ( $i = $i; $i < 10; $i++) {
                                $$value .= "\n";
                            }
                        }
                    ?>

                    <div class="postbox" id="head">
                        <h3 class="title"><?php _e( 'Insert Adsense Auto Ads or any other script from this field will be printed in the <b>HEAD</b> section.', $text ); ?></h3>
                        <div class="inside">
                            <p class='help-text'><?php _e( 'Scripts from this field will be printed in the end of <b>HEAD</b> section. Do not place plain text in this!', $text ); ?></p>
                            <textarea name="albteampiaaa1_settings[header_end]" id="albteampiaaa1_settings[header_end]" ><?php echo $header_end; ?></textarea>

                            <input type="submit" name="submit" id="submit" class="btn btn-primary" value="<?php _e( 'Save changes', $text ); ?>">
                        </div>
                    </div>


                </form>

            </div>
        </div>
    </div>
<?php
