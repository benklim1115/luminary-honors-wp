<?php
/**
 * File for our primary functionality within our theme.
 */

 //NEED TO CREATE .pot file for languages

if (!function_exists("theme_setup")) {
    /**
     * Sets up theme defaults and registers support for various Wordpress features.
     * 
     * Note that this function is hooked into the after_setup_theme hook,
     * which runs before the init hook. The init hook is too late for some features,
     * such as indicating support for post thumbnails
     */
    function theme_setup() {
        /**
         * Make theme available for translation
         * Translations can be filed in the /languages directory.
         * If you're building a theme based on Crafty Press, use a find and replace
         * 'luminary-honors' to the name of your theme in all the template files
         */
        load_theme_textdomain("luminary-honors", get_template_directory() . "/languages");

        //Add default posts and comments RSS feed links to head
        add_theme_support("automatic-feed-links");
    }
}
add_action("after_setup_theme", "theme_setup");

 //adding our text-domain to the theme
 //need to double check if get_template_directory() looks for a specific folder name
 function luminary_honors_theme_setup() {
    load_theme_textdomain("luminary-honors", get_template_directory() . "/languages");
 }
 add_action("after_setup_theme", "luminary_honors_theme_setup");