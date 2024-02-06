<?php
/**
 * Template part to displaypage content in page.php
 */
?>

<article id="post-<?php the_ID();?>">
    <?php the_title('<h1 class="entry-title">', '</h1>');?>

    <?php
        //page thumbnail
        if (has_post_thumbnail()) :
            the_post_thumbnail('full');
        endif; 
    ?>

    <!--- Content --->
    <div class="entry-content">
        <?php 
            the_content();

            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'ninestars'),
                'after' => '</div>',
            ));
        ?>
    </div>

</article>