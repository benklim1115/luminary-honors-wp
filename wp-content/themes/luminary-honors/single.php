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
            <?php if (is_singular('post')){
						echo '<section class="less-roomy"><strong>Categories: </strong><br>';
						$post_slug = get_site_url();
						$id = get_the_ID();
						$categories =  get_the_category($id);
						echo '<ul class="tags">';
						foreach  ($categories as $category) {
						echo '<li><a href="' . $post_slug . '/category/' . $category->slug . '">'. $category->cat_name .'</a></li>';
						}
						echo '</ul>';
						echo '</section>';
						#do_action( 'foundationpress_post_before_comments' );
						#comments_template();
						#do_action( 'foundationpress_post_after_comments' );
						}
					?>
            <?php endwhile; ?>
        </main>
        <?php get_sidebar(); ?>
    </div>
</div>

<?php
get_footer();
?>