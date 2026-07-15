<?php
/**
 * The template for displaying all pages
 */

get_header(); ?>

<div class="container py-5" style="margin-top: 50px; min-height: 60vh;">
    <div class="row">
        <div class="col-12">
            <?php
            while ( have_posts() ) :
                the_post();
                ?>
                <h1 class="fw-bold mb-4"><?php the_title(); ?></h1>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
                <?php
            endwhile; // End of the loop.
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
