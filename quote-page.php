<?php
/*
Template Name: Citat-sida
*/ ?>
<?php
get_header();
?>


<section class="custom-wrapper">
    <section class="container ">
        <h1><?php the_title(); ?></h1>

        <section section="container">

            <?php if (have_rows('quotes')) : ?>

                <?php while (have_rows('quote')) : the_row(); ?>
                    <p>
                        <?php the_sub_field('quote'); ?>
                    </p>
                    <p>
                        <?php the_sub_field('author') ?>
                    </p>
            <?php

                endwhile;
            endif;
            ?>
        </section>
    </section>
    <div class="custom-wrapper__sidebar container">
        <?php
        $menu = wp_get_nav_menu_object('sub_menu');
        the_widget('WP_Nav_Menu_Widget', array('nav_menu' => $menu));
        ?>

    </div>
</section>

<?php
get_footer();