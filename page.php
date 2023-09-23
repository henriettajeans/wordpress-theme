<?php
get_header();



?>

<section class="main-wrapper">
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

<?php


get_footer(); ?>