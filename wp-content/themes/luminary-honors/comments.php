<?php
/**
 * Template for displaying comments
 */

 //is it a password protected post
 if (post_password_required()) {
    return;
 }
?>

<div id="comments" class="comments-area">
    <!--- Check if there are comments available -->
    <?php if (have_comments()) :?>
        <h2 class="comments-title">
            <?php 
                $commentCount = get_comments_number();
                if ("1" === $commentCount) {
                    printf(
                        esc_html__("Comments (1)", "luminary-honors")
                    );
                } else {
                    printf(
                        esc_html__("Comments (%1$s)", "luminary-honors"),
                        intval($commentCount)
                    );
                }
            ?>
        </h2>
    <?php endif;?>
</div>
