<?php

// WordPress title tag management
add_theme_support('title-tag');

// ########## MENUS ##########

// Enable menus feature
add_theme_support('menus');

// Define menus locations
register_nav_menus([
    'main-menu'  => 'Main navigation',
    'footer-menu'     => 'Footer navigation'
]);

// IDs des pages - !!!!! à mettre à jour si la page est supprimé !!!!!
define('ABOUT_PAGE_ID', 11);  // Défini ABOUT_PAGE_ID comme l'ID de la page À Propos (le nombre est le réel ID)
define('EVENTS_PAGE_ID', 13);    // Page Actualités
define('WORKSHOP_PAGE_ID', 17);    // Page Ateliers
define('SHOP_PAGE_ID', 9);    // Page Boutique
define('CONTACT_PAGE_ID', 15);    // Page Contact

define('HOME_PAGE_ID', get_option('page_on_front')); // Défini HOME_PAGE_ID comme l'ID de la page d'accueil


// fonction qui récupère un champ ACF texte + ajoute un attribut data-url si c'est un bouton
function display_field_text($field_name, $page_id = null, $tag = 'p', $class = '', $link_page_id = null) {
    // Récupère le champ ACF (depuis la page actuelle ou une autre)
    $value = $page_id ? get_field($field_name, $page_id) : get_field($field_name);

    if ($value) {
        // Si le tag est un bouton, on ajoute un attribut data-url
        $extra_attr = '';

        // Si c’est un bouton ET qu’un ID de page est fourni
        if (strtolower($tag) === 'button' && !empty($link_page_id)) {
            $url = get_permalink($link_page_id); // génère l'URL depuis l'ID
            if ($url) {
                $extra_attr = ' data-url="' . esc_url($url) . '"';
            }
        }

        echo sprintf(
            '<%1$s class="%2$s"%4$s>%3$s</%1$s>',
            esc_html($tag),
            esc_attr($class),
            esc_html($value),
            $extra_attr
        );
    }
}

// fonction qui récupère un champ ACF image
function display_field_image($field_name, $page_id = null, $class = '', $size = 'full') {
    $image = $page_id ? get_field($field_name, $page_id) : get_field($field_name);

    if (!empty($image) && is_array($image)) {
        $url = esc_url($image['url']);
        $alt = esc_attr($image['alt']);
        echo sprintf(
            '<img src="%s" alt="%s" class="%s">',
            $url,
            $alt,
            esc_attr($class)
        );
    }
}

// fonction qui récupère un champ ACF date
function display_field_date($field_name, $page_id = null, $format = 'Ymd', $tag = 'p', $class = '') {
    $raw_date = $page_id ? get_field($field_name, $page_id) : get_field($field_name);

    if ($raw_date) {
        $formatted_date = date_i18n($format, strtotime($raw_date));
        echo sprintf(
            '<%1$s class="%2$s">%3$s</%1$s>',
            esc_html($tag),
            esc_attr($class),
            esc_html($formatted_date)
        );
    }
}