<?php
/**
 * Template for displaying all the pages
 */

get_header(); 
?>

<main id="main-content" class="grid-container">
    <div class="page-title grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
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
                ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();