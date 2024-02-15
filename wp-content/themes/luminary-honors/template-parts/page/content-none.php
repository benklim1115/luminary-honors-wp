<?php
/**
 * Template part for displaying a message that posts cannot be found
 */
?>

<section class="no-results not-found">
    <header class="page-header">
        <h1 class="page-title"><?php esc_html_e("Nothing Found", "luminary-honors");?></h1>
    </header>

    <div class="page-content">
        <?php
        if (is_home() && current_user_can("publish_posts")) :

            printf(
                "<p>" . wp_kses(
                    /* translators: 1: link to WP admin new post page.*/
                    __("Ready to publish your first post? <a href='%1$s'>Get started here</a>.", "luminary-honors"),
                    array(
                        "a" => array(
                            "href" => array(),
                        ),
                    )
                ) . "</p>",
                esc_html__(admin_url("post-new.php"))
            );

        //when we are in the search page    
        elseif (is_search()) :    
            ?>

            <p><?php esc_html_e("Sorry, but nothing matched your search terms. Please try again with a different search.");?>
            <?php
            get_search_form();

        //if we are not in home or search page
        else : 
            ?>

            <p><?php esc_html_e("It seems we can&rsquo;t find what you&resquo;re looking for. Perhaps searching can help.");?>
            <?php 
                get_search_form();  
                
        endif;
        ?>
    </div>
</section>
