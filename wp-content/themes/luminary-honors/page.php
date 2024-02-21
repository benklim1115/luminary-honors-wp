<?php
/**
 * Template for displaying all the pages
 */

get_header(); 
$banner_design = get_post_meta( $post->ID, 'banner_design_key', true );
$add_breadcrumbs = get_post_meta( $post->ID, 'add_breadcrumbs', true );
?>

<div class="page-title grid-container">
    <div class="grid-x grid-padding-x">
        <div class="cell">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php 
                    //if we are home render the home/flame template page
                    if(is_page("home")) :
                        get_template_part("template-parts/page/content", "flame");
                    //if we are NOT home, render the layout for a base template page
                    elseif(!is_page("home")) :
                        the_title( '<h1 class="color">', '</h1>' );
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
    <?php the_content(); ?>
</main>
<?php
get_footer();