<?php
/**
 * Single page template, displays an individual post
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php 
        while(have_posts()) :
            the_post();
            //single post content
            the_content();
        endwhile;
        ?>
    </main>
</div>

<?php
get_footer();