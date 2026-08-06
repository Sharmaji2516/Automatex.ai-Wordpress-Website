<?php
/**
 * The template for displaying all single posts
 */

get_header(); ?>

<style>
    /* OVERRIDE ALL DARK THEME STYLES FOR THIS PAGE ONLY */
    html, body, main, .site-main, .blog-details-sec {
        background-color: #ffffff !important;
        background: #ffffff !important;
        color: #111111 !important;
    }
    
    .blog-details-sec * {
        color: #111111 !important;
        -webkit-text-fill-color: #111111 !important;
    }

    .blog-details-sec .text-muted,
    .blog-details-sec p.text-muted,
    .blog-details-sec span.text-muted,
    .blog-details-sec .author,
    .blog-details-sec .date {
        color: #6c757d !important;
        -webkit-text-fill-color: #6c757d !important;
    }
    
    /* Force all divs to be white inside the blog section */
    .blog-details-sec,
    .blog-details-sec div,
    .blog-details-sec .container,
    .blog-details-sec .row,
    .blog-details-sec article {
        background-color: #ffffff !important;
        background: #ffffff !important;
    }

    .blog-details-sec .entry-content,
    .blog-details-sec .entry-content p,
    .blog-details-sec .entry-content span,
    .blog-details-sec .entry-content h1,
    .blog-details-sec .entry-content h2,
    .blog-details-sec .entry-content h3,
    .blog-details-sec .entry-content h4,
    .blog-details-sec .entry-content h5,
    .blog-details-sec .entry-content h6,
    .blog-details-sec .entry-content li {
        color: #111111 !important;
        -webkit-text-fill-color: #111111 !important;
    }
</style>

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
