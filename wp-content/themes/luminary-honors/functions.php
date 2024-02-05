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
            "default-image" => ""
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
            "caption"
        ));

        /**
         * Theme support for selective refresh for widgets
         * Adding for now, not entirely sure which widgets it means
         */
        add_theme_support("customizable-selective-refresh-widgets");

        /**
         * Adding support for custom logo
         */
        add_theme_support("custom-logo", array(
            "height" => 250,
            "width" => 250,
            "flex-width" => true,
            "flex-height" => true
        ));

        /**
         * Adding support for custom page header
         */
        add_theme_support("custom-header", array(
            "flex-width" => true,
            "width" => 1600,
            "flex-height" => true,
            "height" => 450,
            "default-image" => ""
        ));

        /**
         * Adding post type support
         */
        add_theme_support("post-formats", array("aside", "gallery", "link", "image", "quote", "video", "audio"));

        /**
         * Uses wp_nav_menu() in one location.
         */
        register_nav_menus( array(
            "primary" => esc_html__("Primary", "luminary-honors"),
            "footer" => esc_html__("Footer Menu", "luminary-honors")
        ));
        
    }
}
add_action("after_setup_theme", "luminary_honors_theme_setup");

/**
 * Set the content width in pixels, based on the theme's design and stylesheet
 * 
 * Priority 0 to make it available to lower priority callbacks.
 * 
 * @global int $content_width
 */
function luminary_honors_content_width() {
    // This variable is intended to be overruled from theme.
    // Open WPC's issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    //phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NoPrefixedVariableFound
    $GLOBALS["content-width"] = apply_filters("luminary_honors_content_width", 1170);
}
add_action("after_setup_theme", "luminary_honors_content_width", 0);

/**
 * Register sidebar widget area
 * 
 * @since 1.0.0
 */
function luminary_honors_widgets_init() {
    register_sidebar(array(
        "name" => esc_html__("Sidebar", "luminary-honors"),
        "id" => "default-sidebar",
        "description" => esc_html__("Add widgets here", "luminary-honors"),
        "before_widget" => '<section id="%1$s" class="widget %2$s">',
        "after_widget" => "</section>",
        "before_title" => "<h4 class='widget-title'>",
        "after_title" => "</h4>"
    ));
}
add_action("widgets_init", "luminary_honors_widgets_init");


//HERE might be where we need to include our scss from Hunter's theming
/**
 * Enqueue public scripts and styles
 */
function luminary_honors_public_scripts() {

}
add_action("wp_enqueue_scripts", "luminary_honors_public_scripts");

/**
 * Enqueue admin styles and scripts
 */
function luminary_honors_admin_scripts() {

}
add_action("wp_enqueue_scripts", "luminary_honors_admin_scripts");