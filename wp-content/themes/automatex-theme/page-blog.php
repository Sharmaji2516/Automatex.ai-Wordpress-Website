<?php
/**
 * Template Name: Blog Page
 * The template for displaying all blog posts in a grid card layout.
 */

get_header(); ?>

<!-- Blog Section -->
<section class="blog-section py-5" style="margin-top: 80px; min-height: 70vh;">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="fw-bold mb-3" style="color: #fff;">Our Latest Blogs</h1>
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
                        <div class="card h-100 border-0 shadow-sm bg-dark text-white">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <img src="<?php the_post_thumbnail_url('medium_large'); ?>" class="card-img-top" alt="<?php the_title_attribute(); ?>">
                            <?php else : ?>
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/default-blog.jpg' ); ?>" class="card-img-top" alt="<?php the_title_attribute(); ?>">
                            <?php endif; ?>
                            
                            <div class="card-body d-flex flex-column" style="background: #111; border: 1px solid #222; border-top: none; border-bottom-left-radius: 0.25rem; border-bottom-right-radius: 0.25rem;">
                                <span class="text-muted small mb-2"><i class="bi bi-calendar3 me-1"></i> <?php echo get_the_date(); ?></span>
                                <h3 class="card-title h5 mb-3" style="color: #fff;"><?php the_title(); ?></h3>
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
