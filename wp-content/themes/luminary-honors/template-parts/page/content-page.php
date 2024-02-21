<?php
/**
 * Template part to display page content in page.php
 */
?>

<!--- NEED TO EDIT THIS --->
<!--- If we want blank template pages to show up it does so here --->


<!--- Content is showing up twice for every element added, check into this --->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <main class="grid-container">
        <?php the_title("<h1 class='color'>", "</h1>");?>
        <?php echo "Hello from content-page";?>

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

    </main>
</article>