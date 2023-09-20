<?php
// wp_nav_menu();
get_header();

// wp_nav_menu(array("theme_location" => "sub_menu"));

?>

<section class="main-wrapper">
    <!-- kan också vara get_field -->
    <!-- Ska stylas i css/sass så att texten ligger ovanpå bilden -->
    <img src="<?php the_field('home_img') ?>">
    <h2><?php the_field('home_title') ?></h2>
    <p><?php the_field('home_text') ?></p>

</section>

<?php
get_footer(); ?>