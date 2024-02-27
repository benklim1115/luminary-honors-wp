<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
	<div class="page-title grid-container">
        <div class="grid-x grid-padding-x margin-top-2 margin-bottom-2">
            <div class="cell">
				<?php while ( have_posts() ) : the_post(); ?>
                    <?php 
                        //if we are home render the home/flame template page
                        if(is_front_page()) :
                            get_template_part("template-parts/page/content", "flame");
                        //if we are NOT home, render the layout for a base template page
                        else :
                            echo "
                                <div class='cell small-12 medium-12'>
                                    <h1 class='color'>";the_title();"</h1>
                                </div>
                            ";
                        endif;
                    ?>
					<?php if ( is_page() && $post->post_parent > 0 && function_exists('yoast_breadcrumb')) { 				
						yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
						}
					?>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
	
	<main id="main-content" class="grid-container">
        <?php the_content();?>
    </main>

    <!--- if we move this footer outside of the div it messes up the home page --->
    <!--- footer is not expanding though because it says its in the div.page-title.grid-container  --->
    <?php get_footer(); ?>    
</div> <!--This is the ending div for the off-canvas div that starts in header.php -->

<link href="https://fonts.googleapis.com/css2?family=Lora:ital@0;1&family=Nunito+Sans:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js" integrity="sha256-pRF3zifJRA9jXGv++b06qwtSqX1byFQOLjqa2PTEb2o=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/what-input/5.2.10/what-input.js" integrity="sha512-w6w/tdJ0DVnvEwW1HtpcriyI+Pzk/PQlFQAZGW0rfs0rrP1H5Y9tvem6lG0JopxdfP3bdfJ/YxLL3ISiudn3Og==" crossorigin="anonymous"></script>
<script>$(document).foundation();</script>		