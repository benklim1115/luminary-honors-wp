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
    <!--- If we are home or on the archive page show the shorter format --->
    <?php if (is_home() || is_archive()) :?>
        <div class="entry-content">
            <?php the_excerpt();?>
        </div>
    <!--- if not and we are on the single page show all the content --->   
    <?php elseif (is_single()) : ?>
        <div class="entry-content">
            <?php the_content();?>
        </div>
    <?php endif; ?>
</article>