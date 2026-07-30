<?php
/**
 * The template for displaying all single posts
 */

get_header(); ?>

<section class="blog-details-sec" style="margin-top: 80px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <article id="post-<?php the_ID(); ?>" <?php post_class('blog-details-wrap'); ?>>
                    <?php
                    while ( have_posts() ) :
                        the_post();
                        ?>
                        
                        <!-- Post Meta & Title -->
                        <div class="post-meta mb-3 text-muted">
                            <span class="date me-3"><i class="bi bi-calendar3 me-1"></i> <?php echo get_the_date(); ?></span>
                            <span class="author"><i class="bi bi-person me-1"></i> By <?php the_author(); ?></span>
                        </div>
                        
                        <h1 class="fw-bold mb-4"><?php the_title(); ?></h1>
                        
                        <!-- Post Featured Image -->
                        <?php if ( has_post_thumbnail() ) : ?>
                            <figure class="featured-image mb-4">
                                <?php the_post_thumbnail('large', array('class' => 'img-fluid rounded-3')); ?>
                            </figure>
                        <?php endif; ?>
                        
                        <!-- Post Content -->
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                        
                        <?php
                    endwhile; // End of the loop.
                    ?>
                </article>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
