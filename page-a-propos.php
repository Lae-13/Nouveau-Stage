<?php /* Template Name: À Propos */ ?>

<?php get_header() ?>

<header class="header">
    <?php display_field_image('about__banner', '', 'header__image'); ?>
</header>

<main class="body">

    <section class="container workplace">

        <div class="workplace__title">
            <?php display_field_text('about__workshop_title', '', 'h1', 'workplace__title_text'); ?>
        </div>

        <div class="workplace__section1">
            <div class="workplace__section1_leftbox">
                <?php display_field_image('about__workshop_leftimage', '', 'workplace__section1_leftbox_image'); ?>
            </div>

            <div class="workplace__section1_text">
                <?php display_field_text('about__workshop_subtitle', '', 'h2', 'workplace__section1_text_title'); ?>
                <?php display_field_text('about__workshop_description1', '', 'p', 'workplace__section1_text_description'); ?>
            </div>

            <div class="workplace__section1_rightbox">
                <?php display_field_image('about__workshop_rightimage', '', 'workplace__section1_rightbox_image'); ?>
            </div>
        </div>

        <div class="workplace__section2">
            <div class="workplace__section2_box">
                <?php display_field_image('about__workshop_largeimage', '', 'workplace__section2_box_image'); ?>
            </div>
        </div>

        <div class="workplace__section3">
            <div class="workplace__section3_text">
                <?php display_field_text('about__workshop_description2', '', 'p', 'workplace__section3_text_description'); ?>
            </div>
            <div class="workplace__section3_box">
                <?php display_field_image('about__workshop_lastimage', '', 'workplace__section3_box_image'); ?>
            </div>
        </div>

    </section>

    <section class="manufacturing">

        <div class="container manufacturing__title">
            <?php display_field_text('about__manufacture_title', '', 'h1', 'manufacturing__title_title'); ?>
        </div>

        <?php
        $parts = [1, 2, 3, 4, 5]; //Modifier cette ligne pour ajouter ou supprimer des parties
        foreach ($parts as $part) : ?>
        <div class="container manufacturing__stage<?php echo $part; ?>">
            <div class="manufacturing__stage<?php echo $part; ?>_title">
                <?php display_field_text("about__manufacture_part{$part}_title", '', 'h2', "manufacturing__stage{$part}_title_text"); ?>
            </div>
            <div class="manufacturing__stage<?php echo $part; ?>_description">
                <div class="manufacturing__stage<?php echo $part; ?>_description_box">
                    <?php display_field_image("about__manufacture_part{$part}_image", '', "manufacturing__stage{$part}_description_box_image"); ?>
                </div>
                <div class="manufacturing__stage<?php echo $part; ?>_description_text">
                    <?php display_field_text("about__manufacture_part{$part}_description", '', 'p', "manufacturing__stage{$part}_description_text_description"); ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

    </section>
</main>

<?php get_footer() ?>