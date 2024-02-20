<?php
/**
 * Single page template, displays an individual post
 */

//this will tell what post format we are using
echo get_post_format();
get_header();
?>

<div class="main-container">
    <div class="main-grid">
        <main class="main-content">
            <?php while ( have_posts() ) : the_post(); ?>
            <?php if ( function_exists("yoast_breadcrumb") ) { 
					yoast_breadcrumb( "<p id='breadcrumbs'>","</p>" ); 
				}
			?>
            <?php get_template_part("template-parts/posts/content", get_post_format()); ?>
            <?php endwhile; ?>
        </main>
    </div>
</div>

<?php
get_footer();
?>