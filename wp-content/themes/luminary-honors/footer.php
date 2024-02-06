<?php
/** 
 * Contains the footer for our theme
 **/
?>

    <?php wp_footer();?>

    <!--- Footer menu for site --->
    <footer class="footer-menu-container">
        <div class="footer-section">
            <a href="/">
                <img id="footer-title-img" src="<?php echo get_template_directory_uri();?>/src/assets/images/logo.svg" alt="My Custom Image">
            </a>
        </div>

        <div class="footer-section">
            <ul id="footer-links">
                <li><a href="/">Register Online</a></li>
                <li><a href="/">UT Health San Antonio</a></li>
                <li><a href="/">UT Health San Antonio Multispecialty & Research Hospital</a></li>
            </ul>
        </div>

        <!--- 
        <div class="footer-section">
            <div class="social-media-link">1</div>
            <div class="social-media-link">2</div>
            <div class="social-media-link">3</div>
            <div class="social-media-link">4</div>
            <div class="social-media-link">5</div>
        </div>
        --->

        <div class="footer-section">
            <ul class="social">
                <li><a href="#"><i class="fab fa-instagram-square fa-2x social-media-link"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube-square fa-2x social-media-link"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin fa-2x social-media-link"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter-square fa-2x social-media-link"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-square fa-2x social-media-link"></i></a></li>
            </ul>
        </div>

    </footer>


    
    </body>
</html>