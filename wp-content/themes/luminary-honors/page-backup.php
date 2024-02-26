<?php
/**
 * Template for displaying all the pages
 */

get_header(); 
$banner_design = get_post_meta( $post->ID, 'banner_design_key', true );
$add_breadcrumbs = get_post_meta( $post->ID, 'add_breadcrumbs', true );
?>

<main>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php 
            //if we are home render the home/flame template page
            if(is_front_page()) :
                get_template_part("template-parts/page/content", "flame");
            //if we are NOT home, render the layout for a base template page
            else :
                echo "
                    <main class='grid-container'>
                        <div class='grid-x grid-margin-x margin-top-2 margin-bottom-2'>
                            <div class='cell small-12 medium-12'>
                                <h1 class='color'>";the_title();"</h1>
                            </div>
                        </div>
                    </main>
                ";
            endif;
        ?>
        <?php if ( is_page() && $post->post_parent > 0 && function_exists('yoast_breadcrumb')) { 				
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
            }
        ?>
    <?php endwhile; ?>
</main>
<main id="main-content" class="grid-container">
    <?php the_content(); ?>
</main>

<script>
    $(document).foundation();
</script>

<?php
get_footer();