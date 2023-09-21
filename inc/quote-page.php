<?php
/*
Template Name: Citat-sida
*/ ?>
<?php
get_header();

?>


<section class="custom-wrapper">
    <section class="">
        <h1><?php the_title(); ?></h1>

        <section class="">

            <?php if (have_rows('quotes')) : ?>

                <?php while (have_rows('quote')) : the_row(); ?>
                    <section class="container">
                        <p>
                            <?php the_sub_field('quote'); ?>
                        </p>
                        <p>
                            <?php the_sub_field('author') ?>
                        </p>
                    </section>
            <?php

                endwhile;
            endif;
            ?>

        </section>
    </section>

    <?php
    get_footer();
