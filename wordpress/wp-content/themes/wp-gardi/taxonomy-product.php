<?php get_header(); ?>


                <div class="background-inside-container">
                    <section class="about-company top-leaves">
                        <div class="center-content-wrapper">
                            <div class="wrapper">
                                <h1 class="page-title"><?php the_title(); ?></h1>
                                <h2 class="green-italic-title">
                                </h2>

                                <div class="plant-thumb-wrapper">
                                <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                            <h2 class="plant-thumb">
                            <a href="<?php the_permalink() ?>"><?php the_title(); ?>
                              <?php the_post_thumbnail('thumbnail'); ?></a>
                                    <p><?php echo get_the_excerpt(); ?></p>
                            </h2>
                                    <?php endwhile;?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <?php get_footer(); ?>
