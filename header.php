<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <!-- länka in bloginfo / stylesheetet -->
    <title><?php bloginfo("name"); ?></title>
    <!-- <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>" type="text/css" /> -->
    <?php wp_head(); ?>
</head>


<body>
    <header id="header" role="banner">

        <div id="wrapper" class="hfeed">
            <section class="bar-wrapper">
                <h1>
                    <?php bloginfo("name"); ?>
                </h1>
                <div class="bar-wrapper_search">
                    <?php get_search_form(); ?>
                </div>
            </section>
            <section class="nav-wrapper">
                <?php wp_nav_menu(array("theme_location" => "primary_menu")); ?>
            </section>

    </header>
    <div id="container">

        <main id="content" role="main">