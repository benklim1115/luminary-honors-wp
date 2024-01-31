<?php
/**
 * Template part to displaypage content in page.php
 */
?>

<article id="post-<?php the_ID();?>">
    <?php the_title('<h1 class="entry-title">', '</h1>');?>

    <?php
        //page thumbnail
        if (has_post_thumbnail()) :
            the_post_thumbnail('full');
        endif; 
    ?>

    <!--- Content --->
    <div class="entry-content">
        <?php 
            the_content();

            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'ninestars'),
                'after' => '</div>',
            ));
        ?>
    </div>

    <!--- Edit option for user --->
    <!--- Display the edit link if user has the permissions to edit it --->
    <?php if (get_edit_post_link()) :?>    
        <footer class="entry-footer">
            <?php 
                //Takes 3 arguments
                //sprintf inserts title into the placeholder
                //wp_kses allows certain elements/attributes for link text, safety
                //__(Edit) allows for translation, using Ninestars theme
                edit_post_link(
                    sprintf(
                        wp_kses(
                            /* translators: %s: Name of the current post. Only visible to screen readers */
                            __('Edit <span class="screen-reader-text">%s</span>', 'ninestars'),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        get_the_title()
                    ),
                    '<span class="edit-link">',
                    '</span>'
                );
            ?>
        </footer>
    <?php endif; ?>

</article>