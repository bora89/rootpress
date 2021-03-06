<?php

/* Template Name: Page with sidebar on the right */

?>

<?php get_header(); ?>
<?php get_template_part('sections/section', 'header-page'); ?>

    <div id="primary" class="content-area page-content">
        <main id="main" class="site-main" role="main">

                <div class="container">
                    <div class="row">
                        <section class="has-padding">
                         <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                             <?php while ( have_posts() ) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                                <div class="entry-content">
                                    <?php

                                        the_content();

                                        wp_link_pages( array(
                                            'before' => '<div class="page-links">' . __( 'Pages:', 'pixova-lite' ),
                                            'after'  => '</div>',
                                        ) );

                                    ?>
                                </div><!-- .entry-content -->
                            </article><!-- #post-## -->
                         </div><!--/.col-lg-8.col-md-8.col-sm-8.col-xs-12-->
                        <?php endwhile; // end of the loop. ?>
                        <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs pull-right">
                            <div class="mt-blog-sidebar">
                                <?php
                                if(is_active_sidebar('blog-sidebar')) {
                                    dynamic_sidebar('blog-sidebar');
                                } else {
                                    the_widget( 'WP_Widget_Search', sprintf('title=%s', __('Search', 'pixova-lite') ) );
                                    the_widget( 'WP_Widget_Calendar', sprintf('title=%s', __('Calendar', 'pixova-lite') ) );
                                }
                                ?>
                            </div> <!--/.mt-blog-sidebar-->
                        </div><!--/.col-lg-3-->

                        </section><!--/section-->
                    </div><!--/.row-->
                </div><!--/.container-->

        </main><!-- #main -->
    </div><!-- #primary -->



<?php get_footer(); ?>