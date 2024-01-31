<?php
/** 
 * 
**/

get_header();
    if (have_posts()) : 
        while (have_posts()) :
            the_post();
            //do our stuff
            get_template_part('template-parts/post/content');
        endwhile;
    endif;    
get_footer();