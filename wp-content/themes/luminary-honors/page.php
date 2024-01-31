<?php
/**
 * Template for displaying all the pages
 */

get_header(); 
?>

<!--- Will need to plug in Hunter's pages here --->
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <!--- loop to print out the page --->
        <?php 
            while (have_posts()) :
                the_post();
                 //will grab something like this content-page.php
                get_template_part('template-parts/page/content', 'page');

                //if we have comments show them
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
            endwhile;
        ?>
    </main>
    <?php get_sidebar(); ?>
</div>

<?php
get_footer();