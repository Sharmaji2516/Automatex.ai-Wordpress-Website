<?php
/**
 * The template for displaying the blog posts index (home) page.
 */

get_header(); ?>

<style>
    /* OVERRIDE ALL DARK THEME STYLES FOR THIS PAGE ONLY */
    html, body, main, .site-main, .blog-section {
        background-color: #ffffff !important;
        background: #ffffff !important;
        color: #111111 !important;
    }
    
    .blog-section * {
        color: #111111 !important;
        -webkit-text-fill-color: #111111 !important;
    }

    .blog-section .text-muted,
    .blog-section p.text-muted,
    .blog-section span.text-muted {
        color: #6c757d !important;
        -webkit-text-fill-color: #6c757d !important;
    }
    
    /* Force all divs (including cards) to be white inside the blog section */
    .blog-section,
    .blog-section div,
    .blog-section .container,
    .blog-section .row,
    .blog-section .blog-card,
    .blog-section .card,
    .blog-section .card-body {
        background-color: #ffffff !important;
        background: #ffffff !important;
    }
    
    .blog-section .card {
        border: 1px solid #e0e0e0 !important;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05) !important;
    }
    
    .blog-section .card-body {
        border: 1px solid #e0e0e0 !important;
        border-top: none !important;
    }

    /* Buttons */
    .blog-section .btn,
    .blog-section .card-body a.btn,
    #loadMoreBtn {
        background: linear-gradient(to right, #e06930, #fbc145) !important;
        background-color: transparent !important;
        color: #ffffff !important;
        -webkit-text-fill-color: #ffffff !important;
        border: none !important;
    }
    .blog-section .btn:hover,
    .blog-section .card-body a.btn:hover,
    #loadMoreBtn:hover {
        background: #2f2e2e !important;
        color: #ffffff !important;
        -webkit-text-fill-color: #ffffff !important;
    }
</style>

<!-- Blog Section -->
<section class="blog-section py-5" style="margin-top: 80px; min-height: 70vh;">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="fw-bold mb-3">Our Latest Blogs</h1>
                <p class="text-muted">Stay updated with the latest trends and insights in AI chatbots & automation.</p>
            </div>
        </div>

        <div class="row">
            <?php
            $args = array(
                'post_type'      => 'post',
                'post_status'    => 'publish',
                'posts_per_page' => -1, // Retrieve all posts for client-side JS filtering and Load More functionality
                'orderby'        => 'date',
                'order'          => 'DESC'
            );
            $blog_query = new WP_Query( $args );

            if ( $blog_query->have_posts() ) :
                while ( $blog_query->have_posts() ) : $blog_query->the_post();
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 blog-card">
                        <div class="card h-100 border-0 shadow-sm bg-white text-dark">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <img src="<?php the_post_thumbnail_url('medium_large'); ?>" class="card-img-top" alt="<?php the_title_attribute(); ?>">
                            <?php else : ?>
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/default-blog.jpg' ); ?>" class="card-img-top" alt="<?php the_title_attribute(); ?>">
                            <?php endif; ?>
                            
                            <div class="card-body d-flex flex-column" style="background: #fff; border: 1px solid #ddd; border-top: none; border-bottom-left-radius: 0.25rem; border-bottom-right-radius: 0.25rem;">
                                <span class="text-muted small mb-2"><i class="bi bi-calendar3 me-1"></i> <?php echo get_the_date(); ?></span>
                                <h3 class="card-title h5 mb-3"><?php the_title(); ?></h3>
                                <p class="card-text text-muted mb-4"><?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn mt-auto align-self-start" style="border-radius: 4px;">Read More</a>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <div class="col-12 text-center">
                    <p class="text-muted"><?php esc_html_e( 'No blogs found.', 'automatex' ); ?></p>
                </div>
            <?php endif; ?>
        </div>

        <?php if ( $blog_query->post_count > 9 ) : ?>
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <button id="loadMoreBtn" class="btn" style="border-radius: 4px;">Load More</button>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
