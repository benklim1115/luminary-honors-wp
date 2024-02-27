<?php
function luminary_wp_footer_info($wp_customize) {
    $wp_customize->add_setting('contact_email');
    $wp_customize->add_setting('footer_logo');

    $wp_customize->add_section( 'footer_fields' , array(
        'title'       => __('Footer fields','Luminary'),
        'description' => 'All customization features for the footer',
        'priority'    => 20,
        ) 
    );
   
    $wp_customize->add_control( 
        'contact_email',
        array(
        'label' => 'Contact Email',
        'type' => 'text',
        'section' => 'footer_fields',
        'settings' => 'contact_email',
        ) 
    );
    $wp_customize->add_control( new WP_Customize_Image_Control( 
        $wp_customize, 'footer_logo', array(
            'label'    => __( 'Footer Logo', 'luminary' ),
            'description' => 'Upload a logo to replace the default site logo. Please upload the logo at <b>280px</b> wide',
            'section'  => 'footer_fields',
            'settings' => 'luminary_upload_logo', 
                ) 
            ) 
        );  
}
add_action('customize_register', 'luminary_wp_footer_info');
?>