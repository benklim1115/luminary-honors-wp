<?php
/**
 * Custom page for home or flame/landing page
 * 
 * HOME
 * 
 *  * [luminary-honors-local].lndo.site/home/
 * [] - replace with the name of your site
 * 
 * For example: luminary-honors-local.lndo.site/home/
 * Make a page on wordpress so that home matches the slug to work
 */
?>

<section class="flame-section">
    <div class="grid-container large match-container">
        <div class="grid-y">
            <div class="cell small-2 medium-4">

            </div>
            <div class="cell small-8 medium-4">
                <img class="match" src="<?php echo get_template_directory_uri(); ?>/src/assets/images/match-2.svg">


                <i class="fas fa-arrow-down fa-2x"></i>
            </div>
            <div class="cell small-2 medium-4">

            </div>
        </div>
    </div>

    <div class="grid-container large flame-container">
        <div class="grid-y">
            <div class="cell small-2 medium-4">
                <img class="flame" src="<?php echo get_template_directory_uri(); ?>/src/assets/images/flame.svg">

            </div>
            <div class="cell small-8 medium-4">


            </div>
            <div class="cell small-2 medium-4">

            </div>
        </div>
    </div>

    <div class="grid-container large text-container">
        <div class="grid-y">
            <div class="cell small-2 medium-4">

            </div>
            <div class="cell small-8 medium-4">
                <p id="flame-text-1" class="h2">ONE SMALL FLAME</p>
            </div>
            <div class="cell small-2 medium-4">

            </div>
        </div>
    </div>

    <div class="grid-container large text-container-2">
        <div class="grid-y">
            <div class="cell small-2 medium-4">

            </div>
            <div class="cell small-8 medium-4">
                <p id="flame-text-2" class="h2">CAN IGNITE BIG CHANGE</p>
            </div>
            <div class="cell small-2 medium-4">

            </div>
        </div>
    </div>

    <div class="grid-container large">
        <div class="grid-y">
            <div class="cell small-12 medium-4">

            </div>
            <div class="cell small-12 medium-4">

            </div>
            <div class="cell small-12 medium-4">

            </div>
        </div>
    </div>

</section>


<div class="grid-container margin-top margin-bottom" id="logo-container">
    <div class="grid-x ">
        <div class="cell small-12 medium-4">

        </div>
        <div class="cell small-12 medium-4">
            <img class="flame-logo" src="<?php echo get_template_directory_uri(); ?>/src/assets/images/logo.svg">
        </div>
        <div class="cell small-12 medium-4">

        </div>
    </div>
</div>

<div class="grid-container margin-bottom-4">
    <div class="grid-x grid-margin-x">
        <div class="cell small-12 medium-2 gold-border-right">
            <picture>
                <source media="(max-width: 799px)" srcset="<?php echo get_template_directory_uri(); ?>/src/assets/images/date_horizontal.svg">
                <source media="(min-width: 800px)" srcset="<?php echo get_template_directory_uri(); ?>/src/assets/images/date.svg">
                <img class="flame-date" src="<?php echo get_template_directory_uri(); ?>/src/assets/images/date.svg">
            </picture>

        </div>
        <div class="cell small-12 medium-7">

            <p class="invitation">
                <i class="white">A memorable night under the stars on the grounds of the new UT Health San Antonio Multispecialty and Research Hospital.</i> <br />
                We invite you to join us as we celebrate the luminaries who continue to light the way for UT Health San Antonio's unprecedented journey of discovery, transformation, and compassion.<br />
                From Event and Healing Arts Sponsorships to legacy Naming Opportunities, learn more about how you can be part of this monumental event.<br />
                luminaryhonors.uthscsa.edu or 210-567-1206
            </p>

            <ul>
                <li>October 4, 2024 • 6:00PM</li>
                <li>UT Health San Antonio Multispecialty and Research Hospital</li>
                <li>7703 Floyd Curl Drive San Antonio, Texas 78229-3900</li>
            </ul>

            <p><a href="/honorees" class="button">2024 Honorees</a></p>


        </div>
        <div class="cell small-12 medium-3">
            <img class="flame-crest" src="<?php echo get_template_directory_uri(); ?>/src/assets/images/ut-health-insignia.svg">
        </div>
    </div>
</div>

<script>
    $(document).foundation();
</script>
