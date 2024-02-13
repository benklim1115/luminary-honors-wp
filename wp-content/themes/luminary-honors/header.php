<?php
/**
 * Contains our header for our theme
 **/
?>

<!doctype html>

<html <?php language_attributes();?>>
    <head>
        <meta charset="<?php bloginfo("charset");?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>President's Luminary Honors</title>
        <script src="https://kit.fontawesome.com/c726fe9217.js" crossorigin="anonymous"></script>

        <?php wp_head();?>
    </head>
    <!--- change body class if we are on the home/landing page --->
    <?php 
        if (is_page("home")) :
            echo "<body class='flame-body'>";
            body_class("flame-body");
        else :
            echo "<body class='body-main'>";
            body_class("body-main");    
        endif;    
    ?>
    

    <!--- Luminary Honors menu links --->
        <div class="off-canvas position-left" id="main-nav" data-off-canvas data-animate="fade-in fade-out">
            <div>
                <button class="close-button" aria-label="Close alert" type="button" data-close>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <ul class="vertical menu align-left nav-text">
                <li><a href="/home">Home</a></li>
                <li><a href="/sponsorships">Sponsorships</a></li>
                <li><a href="/honorees">Honorees</a></li>
                <li><a href="/rsvp">RSVP</a></li>
            </ul>
        </div>

        <!--- We might need logic to show a different header if we are on the home/landing page --->
        <!---
        <div class="off-canvas-content" data-off-canvas-content>
            <header class="header">
                <div class="grid-container">
                    <div class="grid-x align-center-middle">
                        <div class="small-12 medium-2 cell text-center">
                            <div data-toggle="main-nav">MENU</div>
                            <button class="menu-icon" type="button" data-toggle="main-nav"></button>
                        </div>
                        <div class="small-12 medium-8 cell text-center">
                        </div>
                        <div class="small-12 medium-auto cell">
                        </div>
                    </div>

                </div>
            </header>
        </div>
        --->

        <div class="off-canvas-content" data-off-canvas-content>
            <header class="header">
                <div class="grid-container">
                    <div class="grid-x align-center-middle">
                        <div class="small-12 medium-2 cell text-center">
                            <div data-toggle="main-nav">MENU</div>
                            <button class="menu-icon" type="button" data-toggle="main-nav"></button>
                        </div>
                        <div class="small-12 medium-8 cell text-center">
                            <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/logo.svg" alt="President's Luminary Honors logo"></a>
                        </div>
                        <div class="small-12 medium-auto cell">
                        </div>
                    </div>
                </div>
            </header>
        </div
    