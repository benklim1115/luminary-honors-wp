<?php
/**
 * Custom page for landing page/flame?
 * https://luminaryhonors.tastawerk.net/sponsorship.html
 */
?>

<!--- Need to see if we still have to put the body here or other div --->
    <!-- <div class="off-canvas-content" data-off-canvas-content> -->

<body class="flame-body">

    <div class="off-canvas position-left" id="main-nav" data-off-canvas data-animate="fade-in fade-out">
        <div>
            <button class="close-button" aria-label="Close alert" type="button" data-close>
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <ul class="vertical menu align-left nav-text">
            <li><a href="#">Home</a></li>
            <li><a href="sponsorship.html">Sponsorships</a></li>
            <li><a href="honorees.html">Honorees</a></li>
            <li><a href="#">RSVP</a></li>
        </ul>
    </div>

    <!-- Commenting out for now
    <div class="off-canvas-content" data-off-canvas-content>
        <header class="header">
            <div class="grid-container">
                <div class="grid-x align-center-middle">
                    <div class="small-12 medium-2 cell text-center">
                        <div data-toggle="main-nav">MENU</div>
                        <button class="menu-icon" type="button" data-toggle="main-nav"></button>
                    </div>
                    <div class="small-12 medium-8 cell text-center">
                    </div>
                    <div class="small-12 medium-auto cell">
                    </div>
                </div>

            </div>
        </header>
    </div>
    -->

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

                <p class="invitation">Join us for a memorable evening honoring the contributions of <i class="white">Joe
                        Long</i>, <i class="white">Margie & Bill Klesse</i>, and
                    the <i class="white">Mays Family Foundation</i> who are fostering the future of health care in San
                    Antonio.</p>

                <ul>
                    <li>May 17, 2023 • 6:00-8:00 PM</li>
                    <li>Tobin Center for the Performing Arts</li>
                    <li>100 Auditorium Circle, San Antonio, TX 78205</li>
                </ul>

                <p><a href="/honorees" class="button">2023 Honorees</a></p>


            </div>
            <div class="cell small-12 medium-3">
                <img class="flame-crest" src="<?php echo get_template_directory_uri(); ?>/src/assets/images/ut-health-insignia.svg">
            </div>
        </div>
    </div>

</body>
    
    <!-- </div> -->

<!--- Saw this on template keeping if we need it later
<script>
    $(document).foundation();
</script>
--->