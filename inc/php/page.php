<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Render Settings Page
 */
function albteampiaaa1_render_submenu_page() {

    // Put value of constants to variables for easier access
    $name = ALBTEAMPIAAA1_NAME;
    $slug = ALBTEAMPIAAA1_SLUG;
    $version = ALBTEAMPIAAA1_VERSION;
    $text = ALBTEAMPIAAA1_TEXT;

    // Call messages
    albteampiaaa1_successfull_message();

    // Layout of page
    ?>
    <div class="wrap">
        <h2>ADSENSE AUTO ADS
            <p class="version">You can place here ADSENSE AUTO ADS code or any other javascript code.</p>
        </h2>

        <div id="poststuff" class="metabox-holder has-right-sidebar">

            <!-- TABS NAVIGATION MENU -->
            <ul class="tabs-nav">
                <li class="active"><a href="#tab-core" data-toggle="tab"><?php _e( 'Main', $text ); ?></a></li>
                <li><a href="#tab-usage" data-toggle="tab"><?php _e( 'Usage', $text ); ?></a></li>
                <li><a href="#tab-faq" data-toggle="tab"><?php _e( 'F.A.Q.', $text ); ?></a></li>
            </ul>
            <!-- END-TABS NAVIGATION MENU -->

            <!-- TAB 1 -->
            <div class="tab-page fade active in" id="tab-core">
                <!-- INCLUDE SIDEBAR -->
                <?php require_once( ALBTEAMPIAAA1_PATH . 'inc/php/sidebar.php' ); ?>
                <!-- INCLUDE SETTINGS -->
                <?php require_once( ALBTEAMPIAAA1_PATH . 'inc/php/settings.php' ); ?>
            </div>
            <!-- END-TAB 1 -->

            <!-- TAB 2 -->
            <div class="tab-page fade" id="tab-usage">
                <div class="postbox">
                    <h3 class="title"><?php _e( 'Usage Instructions', $text ); ?></h3>
                    <div class="inside">
                        <p><?php _e( 'To add the script to your website, simply follow these steps:', $text ); ?></p>
                        <ol class="custom-counter">
                            <li><?php _e( 'Go to the "Main" tab.', $text ); ?></li>
                            <li><?php _e( 'Place your scripts in the field.', $text ); ?><br><br>
                                <p><?php _e( 'Note that the fields are for inserting HTML code, so JavaScript and CSS code must be wrapped in the corresponding HTML tag. For JavaScript code use the <code>&lt;script&gt;</code> tag, and for CSS code use the <code>&lt;style&gt;</code> tag. Example:', $text ); ?></p>
<?php $ExampleCode = '&lt;script&gt;
    function myFunction() {
        document.getElementById(&quot;demo&quot;).innerHTML = &quot;Hello World!&quot;;
    }
&lt;/script&gt;

&lt;style&gt;
    .example {
        color: #000;
    }
&lt;/style&gt;'; ?>
<pre><code><?php echo $ExampleCode; ?></code></pre>
                            </li>
                            <li><?php _e( 'Click the "Save changes" button.', $text ); ?></li>
                            <li><?php _e( 'Enjoy the result of applying your scripts.', $text ); ?> <?php _e( 'It\'s that simple!', $text ); ?></li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- END-TAB 2 -->

            <!-- TAB 3 -->
            <div class="tab-page fade" id="tab-faq">
                <div class="postbox">
                    <h3 class="title"><?php _e( 'Frequently Asked Questions', $text ); ?></h3>
                    <div class="inside">

                        <p class="note">
                            <?php _e( 'If you have a question, please read the Frequently Asked Questions below to see if the answer is here.', $text ); ?>
                        </p>

                        <div class="panel-group" id="collapse-group">
                            <?php
                                $loopvalue = '8';
                                for ( $i = 1; $i <= $loopvalue; $i++ ) {
                                    echo '<div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#collapse-group" href="#element' . $i . '">
                                                    <h4 class="panel-title"></h4>
                                                </a>
                                            </div>
                                            <div id="element' . $i . '" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                </div>
                                            </div>
                                          </div>';
                                }
                            ?>
                        </div>

                        <div class="question-1"><?php _e( 'Will this plugin work on my WordPress.COM website?', $text ); ?></div>
                        <div class="answer-1"><?php _e( 'Sorry, this plugin is available for use only on self-hosted (WordPress.ORG) websites.', $text ); ?></div>

                        <div class="question-2"><?php _e( 'How does it work?', $text ); ?></div>
                        <div class="answer-2"><?php _e( 'On the "Settings" tab, place your scripts in the field and click the "Save changes" button. Enjoy the result of applying your scripts. It\'s that simple!', $text ); ?></div>

                        <div class="question-3"><?php _e( 'How much of scripts I can enter in the field?', $text ); ?></div>
                        <div class="answer-3"><?php _e( 'We don\'t limit the number of characters.', $text ); ?></div>

                        <div class="question-4"><?php _e( 'Does this plugin requires any modification of the theme?', $text ); ?></div>
                        <div class="answer-4"><?php _e( 'Absolutely not. This plugin is configurable entirely from the plugin settings page.', $text ); ?></div>

                        <div class="question-5"><?php _e( 'Does this require any knowledge of HTML or CSS?', $text ); ?></div>
                        <div class="answer-5"><?php _e( 'This plugin can be configured with no knowledge of HTML or CSS, using an easy-to-use plugin settings page. But you need to know the HTML or CSS in order to add/remove/modify the HTML or CSS code by using this plugin.', $text ); ?></div>

                        <div class="question-6"><?php _e( 'Can I add my script to a specific page of my website?', $text ); ?></div>
                        <div class="answer-6"><?php _e( 'For now, this plugin does not have an option to apply the custom scripts only on specific pages. I plan to add this feature soon. But for now in order to apply your script only on specific pages of your website, you need to wrap your script in a PHP code that will determine the page you want. You need something like this:', $text ); ?><br><br>
<pre><code>function my_custom_script() {

    // Stop the function if this is not the Home page of website
    if ( !is_home() ) {
        return;
    }

    // Print the script
    echo '&lt;script&gt;YOUR SCRIPT&lt;/script&gt;';
}
add_action( 'wp_head', 'my_custom_script' );</code></pre>
                                              <?php printf(
                                                             __( 'To apply the PHP code on a website, I can recommend you to use another my plugin called %s.', $text ),
                                                                 '<a href="https://wordpress.org/plugins/my-custom-functions/" target="_blank">My Custom Functions</a>'
                                                           );
                                              ?></div>

                        <div class="question-7 question-red"><?php _e( 'It\'s not working. What could be wrong?', $text ); ?></div>
                        <div class="answer-7"><?php _e( 'As with every plugin, it\'s possible that things don\'t work. The most common reason for this is a web browser\'s cache. Every web browser stores a cache of the websites you visit (pages, images, and etc.) to reduce bandwidth usage and server load. This is called the browser\'s cache.​ Clearing your browser\'s cache may solve the problem.', $text ); ?><br><br>
                                              <?php _e( 'It\'s impossible to tell what could be wrong exactly, but if you post a support request in the plugin\'s support forum on WordPress.org, we\'d be happy to give it a look and try to help out. Please include as much information as possible, including a link to your website where the problem can be seen.', $text ); ?></div>

                        <div class="question-8 question-red"><?php _e( 'The last WordPress update is preventing me from editing my website that is using this plugin. Why is this?', $text ); ?></div>
                        <div class="answer-8"><?php _e( 'This plugin can not cause such problem. More likely, the problem are related to the settings of the website. It could just be a cache, so please try to clear your website\'s cache (may be you using a caching plugin, or some web service such as the CloudFlare) and then the cache of your web browser. Also please try to re-login to the website, this too can help.', $text ); ?></div>

                       
                    </div>
                </div>
            </div>
            <!-- END-TAB 3 -->

            
          
        </div>

    </div>
    <?php
}