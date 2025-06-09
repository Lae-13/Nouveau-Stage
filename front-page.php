<?php get_header() ?>

<header class="header">
    <?php display_field_image('frontpage__image', '', 'header__image'); ?>
</header>
<main class="body">
    <div class="frontpage">
        <div class="container frontpage__slogan">
            <?php display_field_text('frontpage__catchphrase', '', 'p', 'frontpage__slogan_text'); ?></div>

        <section class="frontpage__section1"></section>

        <section class="frontpage__section2">
            <div class="frontpage__section2_florence container">
                <div class="frontpage__section2_florence_box">
                    <?php display_field_image('frontpage__about_image', '', 'frontpage__section2_florence_box_image'); ?>
                </div>
                <div class="frontpage__section2_florence_text">
                    <?php display_field_text('frontpage__about_title', '', 'h2', 'frontpage__section2_florence_text_title'); ?>
                    <?php display_field_text('frontpage__about_description', '', 'p', 'frontpage__section2_florence_text_description'); ?>
                </div>
            </div>
        </section>

        <section class="frontpage__section3">
            <div class="frontpage__section3_about container">
                <div class="frontpage__section3_about_text">
                    <?php display_field_text('about__workshop_title', ABOUT_PAGE_ID, 'h2', 'frontpage__section3_about_text_title'); ?>
                    <?php display_field_text('about__workshop_description1', ABOUT_PAGE_ID, 'p', 'frontpage__section3_about_text_description'); ?>
                    <?php display_field_text('frontpage__button_workplace','', 'button', 'frontpage__section3_about_text_button', ABOUT_PAGE_ID); ?>
                </div>

                <div class="frontpage__section3_about_box">
                    <?php display_field_image('about__workshop_lastimage', ABOUT_PAGE_ID, 'frontpage__section3_about_box_image'); ?>
                </div>
            </div>
        </section>

        <section class="frontpage__section4">
            <div>
                <?php
                // Requête WP_Query pour afficher le prochain événement à venir
                $args = [
                    'post_type' => 'events', // Type de post personnalisé pour les événements
                    'posts_per_page' => 1, // Nombre d'événements à afficher
                    'meta_key' => 'events__article_date', // Nom du champ date
                    'orderby' => 'meta_value', // Trier par la valeur du champ date
                    'order' => 'ASC', // Ordre croissant (du plus proche au plus lointain)
                    'meta_query' => [ // Requête pour filtrer les événements
                        [
                            'key' => 'events__article_date', // Nom du champ date
                            'value' => date('Ymd'), // Date au format année-mois-jour
                            'compare' => '>=', // Ne prend que les éléments dont la date est supérieure ou égale à aujourd'hui
                            'type' => 'NUMERIC', // Dit que la date est un nombre
                        ],
                    ],
                ];

                $the_query = new WP_Query($args);
                ?>

                <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <article class="frontpage__section4_event container">
                    <div class="frontpage__section4_event_box">
                        <?php display_field_image('events__article_image', '', 'frontpage__section4_event_box_image'); ?>
                    </div>
                    <div class="frontpage__section4_event_text">
                        <?php display_field_text('events__article_title', '', 'h2', 'frontpage__section4_event_text_title'); ?>

                        <?php display_field_text('events__article_subtitle', '', 'h3', 'frontpage__section4_event_text_subtitle'); ?>

                        <?php display_field_text('events__article_description', '', 'p', 'frontpage__section4_event_text_description'); ?>

                        <?php display_field_text('frontpage__button_events', HOME_PAGE_ID, 'button', 'frontpage__section4_event_text_button', EVENTS_PAGE_ID); ?>
                    </div>
                </article>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </section>

        <div class="frontpage__section5">
            <div class="frontpage__section5_contact container">
                <?php display_field_text('contact__title', CONTACT_PAGE_ID, 'h2', 'frontpage__section5_contact_title'); ?>
                <?php display_field_text('contact__description', CONTACT_PAGE_ID, 'p', 'frontpage__section5_contact_description'); ?>
                <?php display_field_text('frontpage__button_contact', '', 'button', 'frontpage__section5_contact_button', CONTACT_PAGE_ID); ?>
            </div>
        </div>
    </div>
</main>



<?php get_footer() ?>