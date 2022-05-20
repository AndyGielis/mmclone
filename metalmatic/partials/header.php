<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://use.typekit.net/mzi5pwi.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css">
</head>

<body <?php body_class(); ?>>

    <section class="header">
        <div class="container">
            <div class="navigation row">
                <div class="logo col-3">
                    <?php if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                             } ?>
                </div>
                <div class=" col-9">
                    <?php
                        wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'container_class' => 'metalmatic-main-menu' ));
                         ?>
                </div>
            </div>
        </div>
    </section>