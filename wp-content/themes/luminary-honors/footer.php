<?php
/** 
 * Contains the footer for our theme
 **/
?>

    <?php wp_footer();?>

    <!--- Footer menu for site --->
    <footer class="footer-menu-container">
        <?php
            wp_nav_menu(array(
                'theme_location' => 'footer',
                'menu_id'        => 'footer-menu',
                'menu_class'     => 'footer-menu-list',
            ));
        ?>
    </footer>
    
    </body>
</html>