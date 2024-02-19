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
        <!--- Other scripts for js --->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js" integrity="sha256-pRF3zifJRA9jXGv++b06qwtSqX1byFQOLjqa2PTEb2o=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/what-input/5.2.10/what-input.js" integrity="sha512-w6w/tdJ0DVnvEwW1HtpcriyI+Pzk/PQlFQAZGW0rfs0rrP1H5Y9tvem6lG0JopxdfP3bdfJ/YxLL3ISiudn3Og==" crossorigin="anonymous"></script>
        <?php wp_head();?>
    </head>
    <!--- change body class if we are on the home/landing page --->
    <body <?php body_class(is_page('home') ? 'flame-body' : 'body-main'); ?>>

        <?php 
            if (is_page("home")) :
                echo 
                "
                <div class='off-canvas position-left' id='main-nav' data-off-canvas data-animate='fade-in fade-out'>
                    <div>
                        <button class='close-button' aria-label='Close alert' type='button' data-close>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <ul class='vertical menu align-left nav-text'>
                        <li><a href='/home'>Home</a></li>
                        <li><a href='/sponsorships'>Sponsorships</a></li>
                        <li><a href='/honorees'>Honorees</a></li>
                        <li><a href='/rsvp'>RSVP</a></li>
                    </ul>
                </div>
                <div class='off-canvas-content' data-off-canvas-content>
                    <header class='header'>
                        <div class='grid-container'>
                            <div class='grid-x align-center-middle'>
                                <div class='small-12 medium-2 cell text-center'>
                                    <div data-toggle='main-nav'>MENU</div>
                                    <button class='menu-icon' type='button' data-toggle='main-nav'></button>
                                </div>
                                <div class='small-12 medium-8 cell text-center'>
                                </div>
                                <div class='small-12 medium-auto cell'>
                                </div>
                            </div>
                        </div>
                    </header>
                </div>
                ";
            else :
                echo 
                "
                <div class='off-canvas position-left' id='main-nav' data-off-canvas data-animate='fade-in fade-out'>
                    <div>
                        <button class='close-button' aria-label='Close alert' type='button' data-close>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <ul class='vertical menu align-left nav-text'>
                        <li><a href='/home'>Home</a></li>
                        <li><a href='/sponsorships'>Sponsorships</a></li>
                        <li><a href='/honorees'>Honorees</a></li>
                        <li><a href='/rsvp'>RSVP</a></li>
                    </ul>
                </div>
                <div class='off-canvas-content' data-off-canvas-content>
                    <header class='header'>
                        <div class='grid-container'>
                            <div class='grid-x align-center-middle'>
                                <div class='small-12 medium-2 cell text-center'>
                                    <div data-toggle='main-nav'>MENU</div>
                                    <button class='menu-icon' type='button' data-toggle='main-nav'></button>
                                </div>
                                <div class='small-12 medium-8 cell text-center'>
                                    <a href='/home'><img src='" . get_template_directory_uri() . "/src/assets/images/logo.svg' alt='Presidents Luminary Honors logo'></a>
                                </div>
                                <div class='small-12 medium-auto cell'>
                                </div>
                            </div>
                        </div>
                    </header>
                </div
                ";
            endif;
        ?>



    