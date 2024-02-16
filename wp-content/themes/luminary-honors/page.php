<?php
/**
 * Template for displaying all the pages
 */

get_header(); 
?>

<!--- Will need to plug in Hunter"s pages here --->
<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <!--- loop to print out the page --->
        <?php 
            while (have_posts()) :
                the_post();
                the_content();
                // Check if we are on the / page
                // /landing or /flame?
                if (is_page("home")) :
                    get_template_part("template-parts/page/content", "flame");

                // Check if we are on the /sponsorships page
                elseif (is_page("sponsorships")) :
                    get_template_part("template-parts/page/content", "sponsorships");

                // Check if we are on the /honorees page
                elseif (is_page("honorees")) :
                    get_template_part("template-parts/page/content", "honorees");

                // Check if we are on the /rsvp page
                elseif (is_page("rsvp")) :
                    get_template_part("template-parts/page/content", "rsvp");

                // Default case, load the generic content page
                // We can have them build custom pages this way if they don't use the slugs
                // This is causing the content to duplicate but I do need it
                else :
                    get_template_part("template-parts/page/content", "page");

                endif;   

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