<?php
/** 
 * The main template file.
**/
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php if (have_posts()) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part("template-parts/content", get_post_format() ); ?>
            <?php endwhile; ?>

            <?php elseif (is_page("home")) : ?>
                <?php get_template_part("template-parts/page/content", "flame"); ?>

            <?php else : ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>

            <?php endif; // End have_posts() check. ?>

            <?php
                echo paginate_links([
                    "prev_text" => esc_html__("Prev", "luminary-honors"),
                    "next_text" => esc_html__("Next", "luminary-honors")
                ]);
            ?>
    </main>

    <?php get_sidebar();?>
</div>
<?php
get_footer();