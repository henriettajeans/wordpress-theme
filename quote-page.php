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
        <?php

        if (have_posts()) : while (have_posts()) : the_post();

        ?>
                <section section="container__content">

                    <?php the_content(); ?>
                </section>

        <?php

            endwhile;
        endif;
        ?>
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
