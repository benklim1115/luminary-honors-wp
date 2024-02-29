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
                <div class="cell small-12 medium-6 small-order-3 medium-order-1 margin-left-2">
                    <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/logo.svg" alt="President's Luminary Honors logo"></a>
                </div>
                <div class="cell small-12 medium-6 small-order-1 medium-order-2">
                    <ul class="arrow">
                        <li><a href="">Register Online</a></li>
                        <li><a href="https://uthscsa.edu/">UT Health San Antonio</a></li>
                        <li><a href="https://uthealthsahospital.org">UT Health San Antonio Multispecialty &amp; Research Hospital</a></li>
                    </ul>
                </div>
            </div>
        </div>
</footer>

         
<?php wp_footer(); ?>
</body>
</html>
