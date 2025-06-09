<?php /* Template Name: Actualités */ ?>

<?php get_header() ?>

<header class="header">
</header>

<main class="container body">

    <section class="futurevents">
        <div class="futurevents__text">
            <?php display_field_text('events__title1', '', 'h1', 'futurevents__text_title'); ?>
        </div>

        <?php
        $args = [
            'post_type' => 'events',
            'posts_per_page' => -1,
            'meta_key' => 'events__article_date',
            'orderby' => 'meta_value',
            'order' => 'ASC',
            'meta_query' => [
                [
                    'key' => 'events__article_date',
                    'value' => date('Ymd'),
                    'compare' => '>=',
                    'type' => 'NUMERIC'
                ],
            ],
        ];

        $the_query = new WP_Query($args);
        ?>

        <?php if ($the_query->have_posts()) : ?>
        <div>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <article class="futurevents__article">
                <div class="futurevents__article_box">
                    <?php display_field_image('events__article_image', '', 'futurevents__article_box_image'); ?>
                </div>
                <div class="futurevents__article_text">
                    <?php display_field_text('events__article_title', '', 'h2', 'futurevents__article_text_title'); ?>
                    <?php display_field_text('events__article_subtitle', '', 'h3', 'futurevents__article_text_subtitle'); ?>
                    <?php display_field_text('events__article_description', '', 'p', 'futurevents__article_text_description'); ?>
                </div>
                <div class="futurevents__article_bar"></div>
            </article>
            <?php endwhile; ?>
        </div>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </section>

    <section class="pastevents">
        <div class="pastevents__text">
            <?php display_field_text('events__title2', '', 'h1', 'pastevents__text_title'); ?>
        </div>

        <div class="pastevents__articles">
            <?php
            $args = [
                'post_type' => 'events',
                'posts_per_page' => 9,
                'meta_key' => 'events__article_date',
                'orderby' => 'meta_value',
                'order' => 'ASC',
                'meta_query' => [
                    [
                        'key' => 'events__article_date',
                        'value' => date('Ymd'),
                        'compare' => '<',
                        'type' => 'NUMERIC',
                    ],
                ],
            ];

            $the_query = new WP_Query($args);
            ?>

            <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <a class="pastevents__articles_box" href="<?php echo esc_url(get_permalink()); ?>">
                <?php display_field_image('events__article_image', '', 'pastevents__articles_box_image'); ?>
            </a>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>

    </section>
</main>

<?php get_footer() ?>