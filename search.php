<?php
get_header(); ?>
<div id="content" class="site-content" role="main">

    <h1 class="page-title">Sökresultat för: <?php echo get_search_query(); ?></h1>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class(); ?>>
                <header class="entry-header">
                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </header>
                <div class="entry-content">
                    <?php the_excerpt(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>Inga resultat hittades :((((((( </p>
    <?php endif;
    next_posts_link('Fler sökresultat', $query->max_num_pages);
    previous_posts_link('Nyare resultat');
    ?>

</div>
<?php
get_search_feed_link();
get_footer();
