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
                    get_template_part('template-parts/post/content');
                endwhile;

                //for pagination
                echo paginate_links([
                    'prev_text' => esc_html__('Prev', 'Luminary Honors'),
                    'next_text' => esc_html__('Next', 'Luminary Honors')
                ]);

        else : 
            get_template_part('template-parts/page/content', 'none');       
        ?>
        <?php endif; ?>
    </main>
</div>

<php
get_footer();