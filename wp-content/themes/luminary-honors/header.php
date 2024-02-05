<?php
/**
 * Contains our header for our theme
 **/
?>

<!doctype html>

<html <?php language_attributes();?>>
    <head>
        <meta charset="<?php bloginfo('charset');?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php wp_head();?>
    </head>
    <!--- we can pass in our class in body_class to override css --->
    <body class="body-main" style="margin-top: 0;"<?php body_class($css_class = "body-main");?>>

    <!--- Luminary Honors menu --->
    <?php
        wp_nav_menu(array (
            "theme_location" => "primary",
            "menu_id" => "primary-menu",
            "container" => "nav",
            "container-class" => "primary-menu-container",
            "menu_class" => "primary-menu-list"
        ))
    ?>
    

    <!--- Commenting out hard coded header for now
    <header class="main-site-header">
        <h2 style="text-align: center; color: #AD976E; padding-top: 3rem; margin-top: 0px"> PRESIDENT'S Luminary HONORS </h2>
        <p style="text-align: center; color: #AD976E;">UT Health San Antonio</p>
    </header>
    --->