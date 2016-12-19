<?php get_header(); ?>


                <div class="background-inside-container">
                    <section class="about-company top-leaves">
                        <div class="center-content-wrapper">
                            <div class="wrapper">
                              <h1 class="page-title"><?php single_cat_title(); ?></h1>
                                <h2 class="green-italic-title">
                                </h2>
                                <div class="plant-thumb-wrapper">
                                <?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
query_posts($query_string . '&post_type=product&posts_per_page=100&orderby=title&order=asc&paged='.$paged); if(have_posts()) : while(have_posts()) : the_post(); ?>

                            <h2 class="plant-thumb">
                            <a href="<?php the_permalink() ?>"><?php the_title(); ?>
                              <?php the_post_thumbnail('thumbnail'); ?></a>
                                    <p><?php echo get_the_excerpt(); ?></p>
                            </h2>
                                    <?php endwhile;?>
                                    <?php endif; wp_reset_query(); ?>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <?php get_footer(); ?>
