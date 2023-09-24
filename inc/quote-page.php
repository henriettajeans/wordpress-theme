<?php
/*
Template Name: Citat-sida
*/ ?>
<?php
get_header();

?>

<section class="content-container">
    <section class="custom-wrapper">
        <section class="content-container">
            <h1><?php the_title(); ?></h1>

            <?php if (have_rows('quotes')) :
                while (have_rows('quotes')) : the_row();
            ?>
                    <section class="container">
                        <p>
                            <?php the_sub_field('quote'); ?>
                        </p>
                        <h4>
                            <?php the_sub_field('author') ?>
                        </h4>
                    </section>
            <?php
                endwhile;
            endif;
            ?>

        </section>
        <article>
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
get_footer();
