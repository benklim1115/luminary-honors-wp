<?php
/**
 * Template part to display page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>

<!--- Content --->
    <footer>
        <?php
            wp_link_pages( array(
                "before" => "<div class='page-links'>" . esc_html__("Pages:", "luminary-honors"),
                "after" => "</div>",
            ));
        ?>
    </footer>
</article>