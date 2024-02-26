<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">  -->
		
		<?php wp_head(); ?>
	</head>
	<body <?php if(!is_front_page()){
	body_class();
	}else{
		echo 'class="flame-body"';
	} ?>>
	<div class="off-canvas position-left is-transition-push is-closed" id="main-nav" data-off-canvas="09258w-off-canvas" data-animate="fade-in fade-out" aria-hidden="true">
        <div>
            <button class="close-button" aria-label="Close alert" type="button" data-close="">
                <span aria-hidden="true">×</span>
            </button>
        </div>
       
	<?php	
				wp_nav_menu( array(
					'theme_location' => 'main-nav',
					'container' => 'ul',
					'menu_class'=> 'vertical menu align-left nav-text'
				) );
			?>
    </div>
	
	<div class="off-canvas-content" data-off-canvas-content="">
	<header class="header">
            <div class="grid-container">
                <div class="grid-x align-center-middle">
                    <div class="small-12 medium-2 cell text-center">
                        <div data-toggle="main-nav" aria-expanded="false" aria-controls="main-nav">MENU</div>
                        <button class="menu-icon" type="button" data-toggle="main-nav" aria-expanded="false" aria-controls="main-nav"></button>
                    </div>
                    <div class="small-12 medium-8 cell text-center">
					<?php
					if(!is_front_page()){ 
						luminary_display_logo(); 
					}
					?>
                    </div>
                    <div class="small-12 medium-auto cell">
                    </div>
                </div>

            </div>
        </header>