<?php
// wp_nav_menu();
get_header();
the_post();


?>
<section class="post-wrapper">

    <section class="container">
        <div class="post-container__img">
            <?php the_post_thumbnail() ?>
        </div>
        <article class="post-container__meta">
            <p>
                <?php the_date(); ?>
            </p>
            <p>
                <?php the_author_posts_link(); ?>
            </p>
            <p>
                <?php the_category(); ?>
            </p>
        </article>
        <h2 class="post-container__title">
            <?php
            the_title(); ?>
        </h2>

        <article class="post-container__content">
            <?php
            the_content();
            ?>
        </article>
    </section>
    <article class="sidebar">
        <!-- <?php dynamic_sidebar('left-sidebar'); ?> -->
    </article>
</section>
<?php
get_footer();
