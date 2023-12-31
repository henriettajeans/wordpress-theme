<?php
/*
Template Name: Team-sida
*/ ?>
<?php
get_header();

?>
<section class="content-container">
    <section class="custom-wrapper">
        <section class="content-container">
            <h1><?php the_title(); ?></h1>
            <?php if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
                    <article class="content-container">
                        <div id="img-container">
                            <?php the_post_thumbnail() ?>
                        </div>
                        <section class="custom-wrapper">
                            <?php the_content(); ?>
                        </section>
                    </article>
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
    <section class="content-container">

        <?php if (have_rows('team')) : ?>

            <?php while (have_rows('team')) : the_row(); ?>
                <section class="custom-field main-wrapper ">
                    <article class="main-wrapper__field">
                        <p>
                            <?php the_sub_field('name'); ?>
                        </p>
                        <p>
                            <?php the_sub_field('description') ?>
                        </p>
                    </article>
                    <div>
                        <img src="<?php the_sub_field('image') ?>">
                    </div>
                </section>
        <?php
            endwhile;
        endif;
        ?>
    </section>
</section>
<?php
get_footer();
?>