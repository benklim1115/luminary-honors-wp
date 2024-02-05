<?php
/**
 * File for our primary functionality within our theme.
 */

 //NEED TO CREATE .pot file for languages

if (!function_exists("luminary_honors_theme_setup")) {
    /**
     * Sets up theme defaults and registers support for various Wordpress features.
     * 
     * Note that this function is hooked into the after_setup_theme hook,
     * which runs before the init hook. The init hook is too late for some features,
     * such as indicating support for post thumbnails
     */
    function luminary_honors_theme_setup() {
        /**
         * Make theme available for translation
         * Translations can be filed in the /languages directory.
         * If you're building a theme based on Crafty Press, use a find and replace
         * 'luminary-honors' to the name of your theme in all the template files
         */
        load_theme_textdomain("luminary-honors", get_template_directory() . "/languages");

        //Add default posts and comments RSS feed links to head
        add_theme_support("automatic-feed-links");

        /**
         * Let Wordpress manage the document title.
         * By adding theme support, we declare that this theme does not use a 
         * hard-coded <title> tag in the document head, and expect Wordpress to
         * provide it for us.
         */
        add_theme_support("title-tag");

        /**
         * Enable support for Post Thumbnails on posts and pages.
         * 
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support("post-thumbnails");

        // Set up the Wordpress core custom background feature
        add_theme_support("custom-background", apply_filters("luminary-honors_custom_background_args", array(
            "default-color" => "ffffff",
            "default-image" => "",
        )));

        /**
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5
         */
        add_theme_support("html5", array(
            "search-form",
            "comment-form",
            "comment-list",
            "gallery",
            "caption",
        ));

        //Theme support for selective refresh for widgets
        //Adding for now, not entirely sure which widgets it means
        add_theme_support("customizable-selective-refresh-widgets");

        /**
         * Adding support for custom logo
         */
        add_theme_support("custom-logo", array(
            "height" => 250,
            "width" => 250,
            "flex-width" => true,
            "flex-height" => true,
        ));
    }
}
add_action("after_setup_theme", "luminary_honors_theme_setup");

//Commenting out for now basic setup for theme function
//  function test_theme_setup() {
//     load_theme_textdomain("test_theme", get_template_directory() . "/languages");
//  }
//  add_action("after_setup_theme", "test_theme_setup");