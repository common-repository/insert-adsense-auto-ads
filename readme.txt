=== Insert Adsense Auto Ads ===
Contributors: Albteam
Tags: adsense, adsense auto ads, insert scripts, insert javascript, insert js, insert css, insert custom scripts, insert custom code, html, javascript, js, css, code, custom code, script, scripts, custom scripts, meta, meta tags, head, header, head section, head area, footer, footer section, footer area, vignette ads, overlay ads, anchor ads, head code, add to head, header code, code script, head script, tracking code, tracking script, tracking javascript, Google Analytics code, Google Analytics, Google Analytics head code, Google Analytics tracking code, Google Analytics script, Google Analytics, Google Analytics head script, Google Analytics tracking script.
Requires at least: 3.9
Tested up to: 5.1
Stable tag: 1.1
License: GPL3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Easily add your Adsense Auto Ads (or any other javascript code) to the WordPress header section.


== Description ==

An easy to use, with intuitive interface, WordPress Plugin that gives you the ability to easily insert Adsense Auto Ads (or whatever javascript or CSS code)in the head section of every page or post of your website (sitewide).

No need to edit your theme files in order to add Adsense Auto Ads code in the header. 

<a href="https://www.codycrosssolutions.com/">Check a working demo on this this CodyCross website</a>. In this example I have added the Google Analytics Code.



**Features**

* We don't ask for any kind of permissions and we do not store any data.
* Compatible with all WordPress versions and all WordPress Themes
* Lightweight and fast
* Secure code with using clear coding standards
* Intuitive interface with many settings
* Cross browser compatible (work smooth in any modern browser)



**Key features include...**

* Inserts scripts in the end of HEAD tag


**Supported**

* JavaScript (in HTML tag)
* CSS (in HTML tag)

**Minimum system requirements:**

* [PHP](https://php.net) version **5.2** or higher.
* [MySQL](https://www.mysql.com) version **5.0** or higher.

**Recommended system requirements:**

* [PHP](https://php.net) version **5.6** or higher.
* [MySQL](https://www.mysql.com) version **5.6** or higher.


== Installation ==

Install "Insert Adsense Auto Ads" just as you would any other WordPress Plugin.

Automatically via WordPress Admin Area:

1. Log in to Admin Area of your WordPress website.
2. Go to "`Plugins`" -> "`Add New`".
3. Find this plugin and click install.
4. Activate this plugin through the "`Plugins`" tab.

Manually via FTP access:

1. Download a copy (ZIP file) of this plugin from WordPress.org.
2. Unzip the ZIP file.
3. Upload the unzipped catalog to your website's plugin directory (`/wp-content/plugins/`).
4. Log in to Admin Area of your WordPress website.
5. Activate this plugin through the "`Plugins`" tab.

After installation and activation, the "Insert Adsense Auto Ads" menu item will appear in the "Settings" section of Admin Area. Click on it in order to view the plugin settings page.



== Frequently Asked Questions ==

= Q. Will this plugin work on my WordPress.COM website? =
A. Sorry, this plugin is available for use only on self-hosted (WordPress.ORG) websites.


= Q. How does it work? =
A. Simply go to the plugin settings page, place your scripts in the field and click the "Save changes" button. Enjoy the result of applying your scripts. It's that simple!
You can find the plugin settings page at "`WordPress Admin Area`" -> "`Settings`" -> "Insert Adsense Auto Ads".

= Q. How much of scripts I can enter in the field? =
A. We don't limit the number of characters.

= Q. Does this plugin requires any modification of the theme? =
A. Absolutely not. This plugin is configurable entirely from the plugin settings page that you can find in the Admin Area of your WordPress website.

= Q. Does this require any knowledge of HTML or CSS? =
A. This plugin can be configured with no knowledge of HTML or CSS, using an easy-to-use plugin settings page. But you need to know the HTML or CSS in order to add/remove/modify the HTML or CSS code by using this plugin.

= Q. Can I add my script to a specific page of my website? =
A. For now, this plugin does not have an option to apply the custom scripts only on specific pages. I plan to add this feature soon. But for now in order to apply your script only on specific pages of your website, you need to wrap your script in a PHP code that will determine the page you want. You need something like this:

`function my_custom_script() {

    // Stop the function if this is not the Home page of website
    if ( !is_home() ) {
        return;
    }

    // Print the script
    echo '<script>YOUR SCRIPT</script>';
}
add_action( 'wp_head', 'my_custom_script' );`

To apply the PHP code on a website, I can recommend you to use another my plugin called [My Custom Functions](https://wordpress.org/plugins/my-custom-functions/).

= Q. It's not working. What could be wrong? =
A. As with every plugin, it's possible that things don't work. The most common reason for this is a web browser's cache. Every web browser stores a cache of the websites you visit (pages, images, and etc.) to reduce bandwidth usage and server load. This is called the browser's cache.​ Clearing your browser's cache may solve the problem.

It's impossible to tell what could be wrong exactly, but if you post a support request in the plugin's support forum on WordPress.org, we'd be happy to give it a look and try to help out. Please include as much information as possible, including a link to your website where the problem can be seen.

= Q. The last WordPress update is preventing me from editing my website that is using this plugin. Why is this? =
A. This plugin can not cause such problem. More likely, the problem are related to the settings of the website. It could just be a cache, so please try to clear your website's cache (may be you using a caching plugin, or some web service such as the CloudFlare) and then the cache of your web browser. Also please try to re-login to the website, this too can help.


== Screenshots ==

1. Plugin page.
2. Plugin page with Google Tag Manager code added.
3. Plugin page with Google Analytics tracking code added.


**License**

This plugin is licensed under the [GNU General Public License, version 3 (GPLv3)](http://www.gnu.org/licenses/gpl-3.0.html) and is distributed free of charge.
Commercial licensing (e.g. for projects that can’t use an open-source license) is available upon request.

**Credits**

* [CodeMirror] is an open-source project shared under the [MIT license](https://codemirror.net/LICENSE).
* [Bootstrap] by Twitter, Inc. released under the [MIT license](https://github.com/twbs/bootstrap/blob/master/LICENSE).


== Changelog ==

 = 1.1 =
Design Fixes
Fixed a known bug: removal of links and versions of other plugins on wp-admin/plugins.php caused by activating the plugin
Added plugin Icons
Edited description


= 1 =
* Initial version.


