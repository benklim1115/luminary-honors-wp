<?php
/**
 * Single page template, displays an individual post
 */

//this will tell what post format we are using
echo get_post_format();
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php 
            while(have_posts()) :
                the_post();
                //single post content
                // the_content();
                get_template_part("template-parts/post/content", get_post_format());
            endwhile;

            //If we have comments, show template
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
        ?>
    </main>
    <!--- Sidebar content -->
    <?php
        get_sidebar();
    ?>
</div>

<?php
get_footer();