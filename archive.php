<!-- Detta ska vara bloggsidan? -->
<?php
get_header();
?>
<section>
    <h1>
        <?php
        the_archive_title();
        ?>
    </h1>
    <?php

    if (have_posts()) : while (have_posts()) : the_post();

    ?>
            <div class="margin-container"></div>
            <article class="post-container">


                <!-- Länka inläggets id för att komma till sidan? -->
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

</section>
<?php get_footer();
