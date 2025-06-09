<?php get_header() ?>

<header>
    <?php display_field_text('events__article_title', '', 'h1', 'body container event__title'); ?>
</header>

<main>
    <section class="body container event__section1">
        <div class="event__section1_top">
            <div class="event__section1_top_box">
                <?php display_field_image('events__article_image', '', 'event__section1_top_box_image'); ?>
            </div>

            <?php display_field_text('events__article_subtitle', '', 'h2', 'event__section1_top_title'); ?>
            <?php display_field_text('events__article_description', '', 'p', 'event__section1_top_description'); ?>
        </div>

        <div class="event__section1_bottom">
            <?php display_field_text('events__article_description2', '', 'p', 'event__section1_bottom_description'); ?>

            <div class="event__section1_bottom_box">
                <?php display_field_image('events__article_image2', '', 'event__section1_bottom_box_image'); ?>
            </div>
        </div>
    </section>

    <section class="event__section2">
        <?php display_field_text('events__gallery_title', '', 'h2', 'event__section2_title'); ?>

        <div class="event__section2_swiper"></div>
    </section>
</main>

<?php get_footer() ?>