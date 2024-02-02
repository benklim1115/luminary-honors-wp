<?php
/**
 * File for our primary functionality within our theme.
 */


if (!function_exists("theme_setup")) {
    /**
     * Sets up theme defaults and registers support for various Wordpress features.
     * 
     * Note that this function is hooked into the after_setup_theme hook,
     * which runs before the init hook. The init hook is too late for some features,
     * such as indicating support for post thumbnails
     */
    function theme_setup() {

    }
}
add_action("after_setup_theme", "theme_setup");

 //adding our text-domain to the theme
 //need to double check if get_template_directory() looks for a specific folder name
 function luminary_honors_theme_setup() {
    load_theme_textdomain("luminary-honors", get_template_directory() . "/languages");
 }
 add_action("after_setup_theme", "luminary_honors_theme_setup");