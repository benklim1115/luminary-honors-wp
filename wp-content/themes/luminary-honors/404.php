<?php
/**
 * The template for displaying 404 pages. (Not Found)
 * @package luminary-honors
 */

get_header();
?>

    <main class="grid-container">
        <div class="grid-x grid-margin-x margin-top-2 margin-bottom-2">
            <div class="cell small-12 medium-12 text-center">
                <h1 class="color margin-bottom">Oops! Page not found!</h1>
                <p class="margin-bottom"><?php esc_html_e("It looks like nothing was found at this location. Try one of the links below!");?></p>
                <ul style="list-style-type: none; margin-right: 2rem">
                    <li><a href="/home" style="color: #171717;">Home</a></li>
                    <li><a href="/sponsorships" style="color: #171717;">Sponsorships</a></li>
                    <li><a href="/honorees" style="color: #171717;">Honorees</a></li>
                    <li><a href="/rsvp" style="color: #171717;">RSVP</a></li>
                </ul>
            </div>
        </div>
    </main>

<script>
    $(document).foundation();
</script>

<?php 
get_footer();
