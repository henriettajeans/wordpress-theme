<?php
/*
Template Name: Anpassad sidmall
*/
?>
<?php
get_header();
?>
<section class="custom-wrapper">
    <section class="content-container">
        <h1><?php the_title(); ?></h1>
        <?php

        if (have_posts()) : while (have_posts()) : the_post();

        ?>
                <section section="container__content">
                    <p>hej</p>
                    <?php the_content(); ?>
                </section>
                <p><?php echo post_type_archive_title(); ?></p>

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


get_footer(); ?>