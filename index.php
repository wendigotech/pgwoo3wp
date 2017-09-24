<?php
get_header(); ?>

                <section class="">
                    <?php
                        $portfolio_args = array(
                            'post_type' => 'portfolio_item',
                            'post_status' => 'publish',
                            'nopaging' => true,
                            'order' => 'ASC',
                            'orderby' => 'menu_order'
                        )
                    ?>
                    <?php $portfolio = new WP_Query( $portfolio_args ); ?>
                    <?php if ( $portfolio->have_posts() ) : ?>
                        <section id="portfolio">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <h2><?php _e( 'Portfolio', 'pgwoo3' ); ?></h2>
                                        <hr class="star-primary">
                                    </div>
                                </div>
                                <div class="row">
                                    <?php while ( $portfolio->have_posts() ) : $portfolio->the_post(); ?>
                                        <div class="col-sm-4 portfolio-item">
                                            <a href="<?php echo '#portfolioModal-'.get_the_ID() ?>" class="portfolio-link" data-toggle="modal">
                                                <div class="caption">
                                                    <div class="caption-content">
                                                        <i class="fa fa-search-plus fa-3x"></i>
                                                    </div>
                                                </div>
                                                <?php the_post_thumbnail( null, array(
                                                        'class' => 'img-responsive'
                                                ) ); ?>
                                            </a>
                                        </div>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                </div>
                            </div>
                        </section>
                    <?php endif; ?>
                    <?php
                        $modals_args = array(
                            'post_type' => 'portfolio_item',
                            'post_status' => 'publish',
                            'nopaging' => true,
                            'order' => 'ASC',
                            'orderby' => 'menu_order'
                        )
                    ?>
                    <?php $modals = new WP_Query( $modals_args ); ?>
                    <?php if ( $modals->have_posts() ) : ?>
                        <?php while ( $modals->have_posts() ) : $modals->the_post(); ?>
                            <div class="portfolio-modal modal fade" id="portfolioModal-<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-content">
                                    <div class="close-modal" data-dismiss="modal">
                                        <div class="lr">
                                            <div class="rl">
</div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-8 col-lg-offset-2">
                                                <div class="modal-body">
                                                    <h2><?php the_title(); ?></h2>
                                                    <hr class="star-primary">
                                                    <?php the_post_thumbnail( null, array(
                                                            'class' => 'img-responsive img-centered'
                                                    ) ); ?>
                                                    <?php the_content(); ?>
                                                    <ul class="list-inline item-details">
                                                        <li>
                                                            <?php _e( 'Client:', 'pgwoo3' ); ?>
                                                            <strong><a href="http://startbootstrap.com"><?php _e( 'Start Bootstrap', 'pgwoo3' ); ?></a></strong>
                                                        </li>
                                                        <li>
                                                            <?php _e( 'Date:', 'pgwoo3' ); ?>
                                                            <strong><a href="http://startbootstrap.com"><?php _e( 'April 2014', 'pgwoo3' ); ?></a></strong>
                                                        </li>
                                                        <li>
                                                            <?php _e( 'Service:', 'pgwoo3' ); ?>
                                                            <strong><a href="http://startbootstrap.com"><?php _e( 'Web Development', 'pgwoo3' ); ?></a></strong>
                                                        </li>
                                                    </ul>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                                        <i class="fa fa-times"></i> 
                                                        <?php _e( 'Close', 'pgwoo3' ); ?>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-9 col-xs-12">
                                <?php if ( have_posts() ) : ?>
                                    <?php while ( have_posts() ) : the_post(); ?>
                                        <?php get_template_part( 'template-parts/content-home' ); ?>
                                    <?php endwhile; ?>
                                <?php else : ?>
                                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'pgwoo3' ); ?></p>
                                <?php endif; ?>
                                <ul class="pager posts-navigation text-uppercase">
                                    <?php if ( get_next_posts_link() ) : ?>
                                        <li class="previous">
                                            <?php next_posts_link( 'Older Posts' ); ?>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ( get_previous_posts_link() ) : ?>
                                        <li class="next">
                                            <?php previous_posts_link( __( 'Newer Posts', 'pgwoo3' ) ); ?>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <?php if ( is_active_sidebar( 'right_sidebar' ) ) : ?>
                                    <aside id="main_sidebar">
                                        <?php dynamic_sidebar( 'right_sidebar' ); ?>
                                    </aside>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </section>                

<?php get_footer(); ?>