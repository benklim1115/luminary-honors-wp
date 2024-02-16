<?php
/**
 * Template part to display page content in page.php
 */
?>

<!--- NEED TO EDIT THIS --->
<!--- If we want blank template pages to show up it does so here --->

<article id="post-<?php the_ID();?>">
    <?php the_title("<h1 class='entry-title'>", "</h1>");?>

    <?php
        //page thumbnail
        if (has_post_thumbnail()) :
            the_post_thumbnail("full");
        endif; 
    ?>

    <!--- Content --->
    <div class="entry-content">
        <?php 
            the_content();

            wp_link_pages( array(
                "before" => "<div class='page-links'>" . esc_html__("Pages:", "luminary-honors"),
                "after" => "</div>",
            ));
        ?>
    </div>

</article>