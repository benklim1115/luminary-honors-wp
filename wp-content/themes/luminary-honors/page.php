<?php
/**
 * Template for displaying all the pages
 */

get_header(); 
$banner_design = get_post_meta( $post->ID, 'banner_design_key', true );
$add_breadcrumbs = get_post_meta( $post->ID, 'add_breadcrumbs', true );
?>

<main id="main-content" class="grid-container">
    <!--- Yoast from wp-utShield--->
    <?php 
		if ($banner_design == 'basic-page' ){
			if ( function_exists('yoast_breadcrumb') ) { 
				yoast_breadcrumb('<ul class="breadcrumbs" id="breadcrumbs">','</ul><br><br>'); 
			}
			the_title('<h1>', '</h1>');
		}
	?>
	<?php 
		if ($banner_design == 'default-bleed' and $add_breadcrumbs == 'yes'){
			if ( function_exists('yoast_breadcrumb') ) { 
				yoast_breadcrumb('<ul class="breadcrumbs" id="breadcrumbs">','</ul><br><br>'); 
		}
	}
	?>
    <?php 
        // Check if we are on the / page
        // Consider refactoring to change logic for home page to search for the root /
        // Changing the root of the project in Settings -> Reading in wp-admin works for now
        if (is_page("home")) :
            get_template_part("template-parts/page/content", "flame");
        // Not on any of the slugs? Render default template for page    
        else :
            get_template_part("template-parts/page/content", "page");
        endif; 

       //loop to print out the page
        while (have_posts()) :
            echo "<p><b>Where is this showing up?</b></p>";
            the_post();
            the_content();  
            //if we have comments show them
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
        endwhile;
    ?>
</main>

<?php
get_footer();


