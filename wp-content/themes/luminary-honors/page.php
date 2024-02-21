<?php
/**
 * Template for displaying all the pages
 */

get_header(); 
?>

<main id="main-content" class="grid-container">
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
    <?php echo "Hello from page.php";?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
</main>
<?php
get_footer();