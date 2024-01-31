<?php 
/**
 * Template part for displaying posts.
 */
?>

<article id="post-<?php the_ID();?>"
    <header class="entry-header">
        <?php
            //if its the single page, don't show the link for the title
            if (is_singular()) :
                the_title('<h1 class="entry-title">', '</h1>');
            else :
                the_title('<h2 class="entry-title"><a class="entry-link" href="'.esc_url(get_permalink()).'">', '</a></h2>');
            endif;    
        ?>
    </header>
    <!--- Post thumbnail --->
    <?php 
        if (has_post_thumbnail()) :
            the_post_thumbnail('large');
        endif;    
    ?>
    <!--- Post Content -->
    <div class="entry-content">
        <?php the_excerpt();?>
    </div>