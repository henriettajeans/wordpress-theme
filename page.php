<?php
get_header();



?>

<section class="container">
    <h1><?php the_title(); ?></h1>
    <?php

    if (have_posts()) : while (have_posts()) : the_post();

    ?>
            <section section="container__content">
                <?php the_content(); ?>
            </section>
            <p><?php echo post_type_archive_title(); ?></p>

    <?php

        endwhile;
    endif;
    ?>
</section>
<article class="sidebar_container">
    <?php if (is_active_sidebar('sidebar-widget-area')) : ?>
        <!-- <div id="sidebar">
            <?php dynamic_sidebar('sidebar-widget-area'); ?>
        </div> -->
        <!-- <?php endif; ?> -->
</article>
<div class="container">
    bcscale
</div>
<?php


get_footer(); ?>