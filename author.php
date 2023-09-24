<?php
get_header();
?>

<section class="custom-wrapper">
    <section class="content-container">
        <h1>
            <?php

            the_author_posts_link(); ?> </h1>

        <?php
        if (have_posts()) : while (have_posts()) : the_post();

        ?>
                <article class="post-container">


                    <!-- Länka inläggets id för att komma till sidan? -->
                    <h2><a href="<?php the_permalink(); ?>"><?php
                                                            the_title();
                                                            ?> </a>
                    </h2>
                    <div id="img-container">
                        <?php the_post_thumbnail() ?>
                    </div>
                    <article class="post-container__desc">
                        <p>
                            <i class="fa-regular fa-calendar-days"></i>
                            <?php
                            the_date(); ?>
                        </p>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
                                <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5ZM9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8Zm1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z" />
                                <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12V4Z" />
                            </svg>
                            <?php
                            the_author_posts_link();
                            ?>
                        </p>
                        <p>
                            <i class="fa-solid fa-tag"></i>
                            <?php
                            the_category(); ?>
                        </p>
                        <p>
                            <i class="fa-solid fa-box-archive"></i>
                            <?php
                            wp_get_archives();
                            ?>
                        </p>
                    </article>
                    <?php
                    the_excerpt();
                    ?>

                </article>
        <?php

            endwhile;
        endif;
        ?>
        <div>
            <?php
            $total_pages = $wp_query->max_num_pages;
            $current_page = max(1, get_query_var('paged'));

            echo paginate_links(array(
                'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                'format' => '?paged=%#%',
                'current' => $current_page,
                'total' => $total_pages,
            ));
            ?>
        </div>
    </section>
    <article class="custom-sidebar">
        <div class="custom-wrapper__sidebar container">
            <?php get_sidebar('orientation'); ?>

        </div>
    </article>
</section>
<?php
wp_reset_postdata();

get_footer();
