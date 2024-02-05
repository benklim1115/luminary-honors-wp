<?php
/** 
 * Contains the footer for our theme
 **/
?>

    <?php wp_footer();?>

    <!--- Footer menu for site --->
    <?php 
        wp_nav_menu(array(
            'theme_location' => 'footer',
            'menu_id'        => 'footer-menu',
            'container'      => 'nav',
            'container_class'=> 'footer-menu-container',
            'menu_class'     => 'footer-menu-list',
        ));
    ?>
    
    </body>
</html>