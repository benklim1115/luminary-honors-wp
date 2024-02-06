<?php
/**
 * Template for displaying search results.
 */
get_header();
?>

<div id="primary" class="search-content-area">
    <main id="main" class="site-main">
        <?php 
            if (have_posts()) :
                //start the loop
                while (have_posts()) :
                    the_post();
                    get_template_part("template-parts/page/content", "search");
                endwhile;

                //for pagination, keeping in case there are tons of results
                echo paginate_links([
                    "prev_text" => esc_html__("Prev", "luminary-honors"),
                    "next_text" => esc_html__("Next", "luminary-honors")
                ]);

        else : 
            get_template_part("template-parts/page/content", "none");       
        ?>
        <?php endif; ?>
    </main>
</div>

<php
get_footer();