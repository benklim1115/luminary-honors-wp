<?php
/**
 * Template for displaying all the pages
 */

get_header(); 
?>

<!--- Will need to plug in Hunter"s pages here --->
<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <h1>Where does this show up?</h1>
        <!--- loop to print out the page --->
        <?php 
            while (have_posts()) :
                the_post();

                // Check if we are on the /sponsorships page
                if (is_page('sponsorships')) :
                    get_template_part("template-parts/page/content", "sponsorships");

                // Check if we are on the /honorees page
                elseif (is_page('honorees')) :
                    get_template_part("template-parts/page/content", "honorees");

                // Check if we are on the /rsvp page
                elseif (is_page('rsvp')) :
                    get_template_part("template-parts/page/content", "rsvp");

                // Default case, load the generic content page
                // maybe this should redirect to home or 404?
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