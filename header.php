<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">

    <meta name="viewport"
        content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/minireset.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">

    <?php wp_head(); ?>


</head>

<body <?php body_class('body'); ?>>
    <div class="menu-burger">
        <!-- Bouton burger visible sur mobile et tablette -->
        <button id="openBtn" class="menu-burger__mobile-only" aria-label="Open menu">☰</button>

<<<<<<< Updated upstream
        <!-- Menu mobile (sidenav) -->
        <div id="mySidenav" class="menu-burger__sidenav">
            <button id="closeBtn" class="menu-burger__sidenav_close-btn" aria-label="Close menu">×</button>
            <?php
        wp_nav_menu([
        'theme_location' => 'main-menu',
        'container' => 'nav',
        'container_class' => 'nav sidenav__nav',
        'menu_class' => 'sidenav__menu'
        ]);
        ?>
        </div>
        <div class="menu-burger__image">
            <?php display_field_image('frontpage__logo', HOME_PAGE_ID, 'menu-burger__image_logo'); ?>
        </div>
    </div>

    <header class="navigation">
        <div class="navigation__logo">
            <?php display_field_image('frontpage__logo', HOME_PAGE_ID, 'navigation__logo_image'); ?>
        </div>

        <div class="navigation__menu">

            <?php
            $menu_name = 'main-menu';
            $locations = get_nav_menu_locations();
            $menu_id   = $locations[$menu_name];
            $navID = wp_get_nav_menu_object($menu_id);
            ?>

            <?php
            wp_nav_menu(
                [
                    'theme_location' => 'main-menu',
                    'container' => 'nav',
                    'container_class' => 'nav',
                    'menu_class' => 'nav__ul'
                ]);
            ?>
        </div>

        <div class="navigation__panier">
            <?php display_field_image('frontpage__panier', HOME_PAGE_ID, 'navigation__panier_image'); ?>
        </div>


    </header>

    <script>
    let sidenav = document.getElementById("mySidenav");
    let openBtn = document.getElementById("openBtn");
    let closeBtn = document.getElementById("closeBtn");

    openBtn.onclick = openNav;
    closeBtn.onclick = closeNav;

    function openNav() {
        sidenav.style.left = "0";
        document.body.classList.add("lock_scroll");
    }

    function closeNav() {
        sidenav.style.left = "";
        document.body.classList.remove("lock_scroll")
    }
    </script>
</body>
=======
<?php
wp_nav_menu(
    array(
        'theme_location' => 'main-navigation',
        'container' => 'nav',
        'container_class' => 'navigation',
        'menu_class' => 'navigation__ul'
    ));
?>
>>>>>>> Stashed changes
