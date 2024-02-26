<?php 
/**
 * This feature offers an Logo field in Customizer under Site Identity.
 * This also gives a function to call the logo or have an empty fall back if no image is set. 
 * Version: 2
 */

 
// Display the logo through a function so there is a default fallback logo
function luminary_display_logo(){
    $load_logo = get_theme_mod('luminary_upload_logo');
    $home_url = get_site_url();
    if(!empty($load_logo)){
        $luminary_logo_url = esc_url($load_logo);
        echo '<a href="' . $home_url . '"><img alt="Website Logo" src="' . $luminary_logo_url . '"></a>';
    }else{
        echo '<!-- no logo defined in customizer -->';
    }
}