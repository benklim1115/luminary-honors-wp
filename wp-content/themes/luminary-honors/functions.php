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
    }
}
add_action("after_setup_theme", "luminary_honors_theme_setup");

//Commenting out for now basic setup for theme function
//  function test_theme_setup() {
//     load_theme_textdomain("test_theme", get_template_directory() . "/languages");
//  }
//  add_action("after_setup_theme", "test_theme_setup");