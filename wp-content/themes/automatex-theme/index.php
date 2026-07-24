<?php
/**
 * Main Template File
 * AutomateX Theme Fallback Index
 */

get_header();
?>

<main id="main-content" class="site-main py-5">
    <div class="container">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        else :
            echo '<p>' . esc_html__( 'No content found.', 'automatex' ) . '</p>';
        endif;
        ?>
    </div>
</main>

<?php
get_footer();
