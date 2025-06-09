<?php /* Template Name: Ateliers */ ?>

<?php get_header() ?>

<header class="header">
</header>
<main class="container body">

    <section class="workshop">
        <div class="workshop__title">
            <?php display_field_text('workshop__title', '', 'h1', 'workshop__title_text'); ?>
        </div>

        <div class="workshop__section1">
            <div class="workshop__section1_left">
                <?php display_field_image('workshop__workshop_image1', '', 'workshop__section1_left_image'); ?>
            </div>
            <div class="workshop__section1_right">
                <?php display_field_text('workshop__workshop_title', '', 'h2', 'workshop__section1_right_title'); ?>
                <?php display_field_text('workshop__workshop_subtitle', '', 'h3', 'workshop__section1_right_subtitle'); ?>
                <?php display_field_text('workshop__workshop_description1', '', 'p', 'workshop__section1_right_description'); ?>
            </div>
        </div>

        <div class="workshop__section2">
            <div class="workshop__section2_left">
                <?php display_field_text('workshop__workshop_description2', '', 'p', 'workshop__section2_left_description'); ?>
                <?php display_field_text('workshop__workshop_button', '', 'button', 'workshop__section2_left_button', CONTACT_PAGE_ID); ?>
            </div>
            <div class="workshop__section2_right">
                <?php display_field_image('workshop__workshop_image2', '', 'workshop__section2_right_image'); ?>
            </div>
        </div>
    </section>

    <section class="internship">
        <div class="internship__section1">
            <div class="internship__section1_left">
                <?php display_field_image('workshop__internship_image1', '', 'internship__section1_left_image'); ?>
            </div>
            <div class="internship__section1_right">
                <?php display_field_text('workshop__internship_title', '', 'h2', 'internship__section1_right_title'); ?>
                <?php display_field_text('workshop__internship_subtitle', '', 'h3', 'internship__section1_right_subtitle'); ?>
                <?php display_field_text('workshop__internship_description1', '', 'p', 'internship__section1_right_description'); ?>
            </div>
        </div>

        <div class="internship__section2">
            <div class="internship__section2_left">
                <?php display_field_text('workshop__internship_description2', '', 'p', 'internship__section2_left_description'); ?>
                <?php display_field_text('workshop__internship_button', '', 'button', 'internship__section2_left_button', CONTACT_PAGE_ID); ?>
            </div>
            <div class="internship__section2_right">
                <?php display_field_image('workshop__internship_image2', '', 'internship__section2_right_image'); ?>
            </div>
        </div>
    </section>

</main>
<?php get_footer() ?>