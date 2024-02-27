<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer 
    <?php echo $footer_class;?>>
        <div class="grid-container">
            <div class="grid-x grid-margin-x align-center-middle">
                <div class="cell small-12 medium-4 small-order-3 medium-order-1">
                    <a href="/luminary-honors/"><img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/logo.svg" alt="President's Luminary Honors logo"></a>
                </div>
                <div class="cell small-12 medium-5 small-order-1 medium-order-2">
                    <ul class="arrow">
                        <li><a>Register Online</a></li>
                        <li><a>UT Health San Antonio</a></li>
                        <li><a>UT Health San Antonio Multispecialty &amp; Research Hospital</a></li>
                    </ul>
                </div>
                <div class="cell small-12 medium-3 small-order-2 medium-order-3">
                    <ul class="social">
                        <li><a href="#"><i class="fab fa-instagram-square fa-2x"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube-square fa-2x"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin fa-2x"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter-square fa-2x"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-square fa-2x"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
</footer>

         
<?php wp_footer(); ?>
</body>
</html>
