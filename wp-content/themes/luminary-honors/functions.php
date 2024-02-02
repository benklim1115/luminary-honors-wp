<?php
/**
 * File for our primary functionality within our theme.
 */



 //adding our text-domain to the theme
 //need to double check if get_template_directory() looks for a specific folder name
 function theme_setup() {
    load_theme_textdomain("luminary-honors", get_template_directory() . "/languages");
 }
 add_action("after_setup_theme", "theme_setup");