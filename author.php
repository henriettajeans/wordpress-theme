<?php
get_header();
?>
<!-- Styla denna sida så att inläggen och menyn ligger bredvid varandra -->

<section class="category-container">
    <p>Inlägg av</p>
    <h1>
        <?php the_author_posts_link(); ?>
    </h1>
    <?php
    if (have_posts()) : while (have_posts()) : the_post();

    ?>
            <div class="margin-container"></div>
            <article class="post-container">
                <h2><a href="<?php the_permalink(); ?>"><?php
                                                        the_title();
                                                        ?> </a>
                </h2>

                <div id="img-container">
                    <?php the_post_thumbnail() ?>
                </div>

                <div class="margin-container"></div>

                <?php
                the_excerpt();
                ?>
                <article class="post-container_desc">
                    <?php
                    the_date();
                    the_category();
                    the_author_posts_link();
                    wp_get_archives();
                    ?>
                </article>

            </article>
    <?php

        endwhile;
    endif;

    ?>
    <article>
        <div class="custom-wrapper__sidebar container">
            <?php get_sidebar('orientation'); ?>

        </div>
    </article>

</section>
<?php
get_footer();
