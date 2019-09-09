<?php
/*
Plugin Name: LAMANU-cookie-law
Version: 0.1
Plugin URI: http://wordpress/
Description: WordPress Plugin for european cookie law.
Author: yomab
Author URI: http://wordpress/
*/

add_action('admin_menu','add_menu_config');
add_action('admin_init', 'register_settings');
add_action('wp_head','LAMANU_scripts');

    function LAMANU_scripts(){
    echo '<script type="text/javascript" src=" .plugin_dir_url(_FILE_).js/tarteaucitron/tarteaucitron.js-1.2 2/tarteaucitron.js"></script>
    <script type="text/javascript">
        tarteaucitron.init({


        "hashtag": "#tarteaucitron",
        "orientation": "top",
        "showAlertSmall": true,
        "cookieslist": true,
        "adblocker": false,
        "highPrivacy": false,
        "removeCredit": false

        });
        tarteaucitron.user.analyticsUa = \'' . get_option('google_analytics', 'UA-00000000-0') . '\';
        tarteaucitron.user.analyticsMore = function () { /* add here your optionnal ga.push() */
        </script>
        <script type="text/javascript" src="'.plugin_dir_url( __FILE__ ).'js/googleAnalytics.js"></script>';
         }
        function add_menu_config(){
         add_menu_page('Tarte au citron', 'config tarte au citron', 'manage_options', 'Configuration' 'LAMANU_admin_menu_page');

        }

        function register_settings() {
        register_setting('LAMANU_GoogleAnalytics', 'google_analytics');

        }

        funtion LAMANU_admin_menu_page(){
        require_once(plugin_dir_path(_FILE_)'view/option.php');
        }
