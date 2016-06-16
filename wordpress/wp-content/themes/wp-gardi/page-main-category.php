<?php /* Template Name: Page main category */ get_header(); ?>


<div class="background-inside-container">


<section class="about-company top-garden">
<h1 class="page-title"><?php the_title(); ?></h1>
<h2 class="green-italic-title"><?php the_content(); ?></h2>

<div class="center-content-wrapper">


<div class="gardi-thumbs-wrapper">
<?php
$terms = get_field('category_product');
if( $terms ): ?>
  <?php foreach( $terms as $term ): ?>
                            <div class="gardi-thumb">
                              <div class="top-img-thumb-wrapper">
                            <a href="<?php echo get_term_link( $term ); ?>">
                <?php $image = get_field('image', $term);
                  if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  <?php endif; ?>
                                  </span></a>
                                </div>
                                <div class="gardi-thumb-description">

                                  <h2><?php echo $term->name; ?></h2></a>
                                  <p><?php echo $term->description; ?></p>
                                    <div class="contact-info-gardi-thumb">
                                    </div>
                                    </a>
                                    <a href="#" class="green-btn">Продукция питомника</a>
                                </div>
                              </div>


  <?php endforeach; ?>
<?php endif; ?>
                            </div>

                        </div>

                </section>
</div>
<?php get_footer(); ?>


