<?php /* Template Name: Contact */ ?>

<?php get_header() ?>

<header></header>

<main class="container body">
    <section class="contact">
        <?php display_field_text('contact__title', '', 'h1', 'contact__title'); ?>

        <section class="contact__descriptions">
            <?php display_field_text('contact__description', '', 'p', 'contact__descriptions_description'); ?>

            <div class="contact__descriptions_higherbox">
                <?php display_field_text('contact__section1_title', '', 'h3', 'contact__descriptions_higherbox_title'); ?>
                <?php display_field_text('contact__section1_description', '', 'p', 'contact__descriptions_higherbox_description'); ?>
            </div>

            <div class="contact__bar"></div>

            <div class="contact__descriptions_lowerbox">
                <?php display_field_text('contact__section2_title', '', 'h3', 'contact__descriptions_lowerbox_title'); ?>
                <?php display_field_text('contact__section2_description', '', 'p', 'contact__descriptions_lowerbox_description'); ?>
            </div>

            <div class="about__bar"></div>
        </section>

        <section class="contact__form">
            <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 1 ) ); ?>
        </section>
    </section>
</main>

<?php get_footer() ?>