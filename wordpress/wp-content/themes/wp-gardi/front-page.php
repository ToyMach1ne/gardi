<?php /* Template Name: Home Page */  get_header(); ?>
                <section class="about-company top-leaves" style="padding-bottom: 0;">
                    <div class="center-content-wrapper">
                        <h1 class="page-title">Питомник растений и цветов</h1>
                        <h2 class="green-italic-title">Саженцы лиственных, хвойных деревьев и кустарников, клумбовые и комнатные цветы</h2>
                        <div class="gardi-thumbs-wrapper">
                        <?php query_posts(array( 'post_type' => 'archive_product','showposts' => 3 ) ); ?>
                            <?php while (have_posts()) : the_post(); ?>
                            <div class="gardi-thumb">
                              <div class="top-img-thumb-wrapper">
                                  <a href="<?php the_permalink() ?>"><span><?php the_post_thumbnail('thumbnail'); ?></span></a>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/investing1a.png" alt="Иконка питомника" class="icon-gardi-thumb">
                                </div>
                                <div class="gardi-thumb-description">
                                  <a href="<?php the_permalink() ?>">
                                  <h2><?php the_title(); ?></h2></a>
                                  <p><?php echo get_the_excerpt(); ?></p>
                                    <div class="contact-info-gardi-thumb">
                                    </div>
                                    <ul>
                                        <li><?php the_content(); ?></li>
                                    </ul>
                                    <a href="http://localhost:9090/lorem-ipsum-2.htm" class="green-btn">Продукция питомника</a>
                                </div>
                            </div>
                          <?php endwhile;?>
                          <?php wp_reset_query(); ?>
                        </div>
                </section>

              <section class="about-company right-side-image-block">
                <?php $posts = get_field('product_descr'); if( $posts ): ?>
                    <div class="center-content-wrapper">
                    <?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
                        <div class="left-section-description">
                        <a href="<?php echo get_permalink( $p->ID ); ?>" target="_blank">
                            <h3><?php echo get_the_title( $p->ID ); ?></h3>
                            <p><?php the_content(); ?></p>
                          <a href="#" class="download-catalog">Подробнее об оранжерее</a>
                        </div>
                        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $p->ID, "medium" ) ); ?>" alt="">
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
              </section>

                <div class="clr"></div>
                <section class="about-company top-garden">
                <?php $posts = get_field('second_description'); if( $posts ): ?>
                    <div class="center-content-wrapper">
                    <?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
                      <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $p->ID, "medium" ) ); ?>" alt="">
                        <div class="right-section-description">

                        <a href="<?php echo get_permalink( $p->ID ); ?>" target="_blank">
                            <h3><?php echo get_the_title( $p->ID ); ?></h3>
                            <p><?php the_content(); ?><p>
                          <a href="#" class="download-catalog">Подробнее о питомнике</a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </section>
                <div class="clr"></div>

                <section class="about-company right-side-image-block">
                <?php $posts = get_field('third_description'); if( $posts ): ?>
                    <div class="center-content-wrapper">
                    <?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
                        <div class="left-section-description">
                        <a href="<?php echo get_permalink( $p->ID ); ?>" target="_blank">
                            <h3><?php echo get_the_title( $p->ID ); ?></h3>
                            <p><?php the_content(); ?></p>
                          <a href="#" class="download-catalog">Подробнее об оранжерее</a>
                        </div>
                        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $p->ID, "medium" ) ); ?>" alt="">
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
              </section>
                <div class="about-company panorama-background">
                    <div class="center-content-wrapper">
                        <h2 class="title-white-blok">Полезная информация и новости</h2>
                        <p class="green-italic-title">У нас всегда проходят различные события и мероприятия.</p>
                        <ul class="offers-item-list">

                        <?php query_posts("showposts=3&cat=9"); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                            <li>
                              <a href="#">

                                <?php if ( has_post_thumbnail()) :?>
                                    <a class="single-thumb" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                      </a>
                                    <?php endif; ?><!-- /post thumbnail -->


                                    <span class="offers-item-title"><?php the_title(); ?></span>
                                    <span class="read-more-about-offer"><?php the_excerpt(); ?></span>
                                </a>
                            </li>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
                        </ul>

                    </div>
                </div>
                <?php get_footer(); ?>
