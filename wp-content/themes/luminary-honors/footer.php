<?php
/** 
 * Contains the footer for our theme
 **/
?>

    <?php wp_footer();?>

    <!--- Footer menu for site --->
    <footer class="footer-menu-container">
        <div class="footer-section" style="border: 2px solid red;">
            <a href="/">
                <img id="footer-title-img" src="<?php echo get_template_directory_uri();?>/src/assets/images/logo.svg" alt="My Custom Image">
            </a>
        </div>

        <div class="footer-section">
            <p style="color: white; border: 2px solid red;">Hello</p>
        </div>

        <div class="footer-section">
            <p style="color: white; border: 2px solid red;">Next section</p>
        </div>
    </footer>
    
    </body>
</html>