<?php
get_header();
?>

	<main id="primary" class="site-main">
        <section class="hero-section" style="background-color: <?php the_field('hero_background_color'); ?>;">
            <div class="container">
                <nav class="nav-section">
                    <ul class="list-unstyled d-flex justify-content-start mb-0">
                        <li class="me-5">
                            <a href="/">
                                <img src="<?php the_field('nav_logo_image'); ?>" alt="">
                            </a>
                        </li>
                        <li class="me-5">
                            <a href="<?php the_field('nav_about_us_link'); ?>">
                                <?php the_field('nav_about_us_text'); ?>
                            </a>
                        </li>
                        <li class="me-5">
                            <a href="<?php the_field('nav_contact_link'); ?>">
                                <?php the_field('nav_contact_text'); ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php the_field('nav_instagram_link'); ?>">
                                <img class="nav_instagram_image" src="<?php the_field('nav_instagram_image'); ?>" alt="" width="30" height="30">
                            </a>
                        </li>
                    </ul>
                </nav>

                <div class="hero-content row">
                    <div class="col-md-6">
                        <div class="hero-text">
                            <h1><?php the_field('hero_main_text'); ?></h1>
                            <p><?php the_field('hero_secondary_text'); ?></p>
                            <button class="btn" style="background-color: <?php the_field('hero_cta_button_background'); ?>;">
                                <?php the_field('hero_cta'); ?>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center align-items-center hero-image-wrapper">
                        <div class="hero-image">
                            <img class="img-fluid" src="<?php the_field('hero_image'); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="company-section container">
            <div class="company-section-header">
                <h2><?php the_field('company_title'); ?></h2>
                <p><?php the_field('company_text'); ?></p>
            </div>
            <div class="company-section-body">
                <div class="row">
                    <img class="md:col-3" src="<?php the_field('company_first_card_image'); ?>" alt="">
                    <div class="md:col-9">
                        <h3><?php the_field('company_first_card_title'); ?></h3>
                        <p><?php the_field('company_first_card_description'); ?></p>
                        <button
                            style="background-color: <?php the_field('company_first_card_button_background'); ?>;">
                            <?php the_field('company_first_card_button_text'); ?>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <img class="md:col-3" src="<?php the_field('company_second_card_image'); ?>" alt="">
                    <div class="md:col-9">
                        <h3><?php the_field('company_second_card_title'); ?></h3>
                        <p><?php the_field('company_second_card_description'); ?></p>
                        <button
                            style="background-color: <?php the_field('company_second_card_button_background'); ?>;">
                            <?php the_field('company_second_card_button_text'); ?>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="services-section"
            style="background-color: <?php the_field('services_background_color'); ?>;"
        >
            <div class="container">
                <div class="services-header">
                    <h2><?php the_field('services_title'); ?></h2>
                    <p><?php the_field('services_text'); ?></p>
                </div>
                <ul>
                    <li>
                        <img src="<?php the_field('services_1_image'); ?>" alt="">
                        <h3><?php the_field('services_1_text'); ?></h3>
                    </li>
                    <li>
                        <img src="<?php the_field('services_2_image'); ?>" alt="">
                        <h3><?php the_field('services_2_text'); ?></h3>
                    </li>
                    <li>
                        <img src="<?php the_field('services_3_image'); ?>" alt="">
                        <h3><?php the_field('services_3_text'); ?></h3>
                    </li>
                    <li>
                        <img src="<?php the_field('services_4_image'); ?>" alt="">
                        <h3><?php the_field('services_4_text'); ?></h3>
                    </li>
                    <li>
                        <img src="<?php the_field('services_5_image'); ?>" alt="">
                        <h3><?php the_field('services_5_text'); ?></h3>
                    </li>
                </ul>
            </div>
        </section>
	</main>


<?php
// get_sidebar();
// get_footer();
