<?php
/**
 * Template part for displaying search results.
 */
?>

<article id="post-<?php the_ID(); ?>">
    <header class="entry-header">
        <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a>');?>
    </header>

    <div class="entry-summary">
        <?php the_excerpt();?>
    </div>
    
</article>