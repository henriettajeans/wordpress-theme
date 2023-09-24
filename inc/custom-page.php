<?php
/*
Template Name: Anpassad sidmall
*/
?>
<?php
get_header();
?>
<section class="content-container">
    <section class="custom-wrapper">
        <section class="content-container">
            <h1><?php the_title(); ?></h1>
            <?php

            if (have_posts()) : while (have_posts()) : the_post();
            ?>
                    <section section="content-container">
                        <?php the_post_thumbnail() ?>
                        <?php the_content(); ?>

                    </section>

            <?php

                endwhile;
            endif;
            ?>
        </section>
        <article class="custom-sidebar">
            <div class="custom-wrapper__sidebar container">
                <?php
                $menu = wp_get_nav_menu_object('sub_menu');
                the_widget('WP_Nav_Menu_Widget', array('nav_menu' => $menu));
                ?>

            </div>
        </article>
    </section>
</section>

<?php
get_footer(); ?>