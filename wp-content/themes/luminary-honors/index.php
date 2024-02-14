<?php
/** 
 * The main template file.
**/
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php 
        // if we want the index page to be the landing page/flame we can add that here
        // just need to render styles correctly, check header
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    get_template_part("template-parts/post/content", get_post_format());
                endwhile;
            
            
            echo paginate_links([
                "prev_text" => esc_html__("Prev", "luminary-honors"),
                "next_text" => esc_html__("Next", "luminary-honors")
            ]);
            else : 
                get_template_part("template-parts/page/content", "none");  
            endif;
        ?>
    </main>

    <?php get_sidebar();?>
</div>
<?php
get_footer();