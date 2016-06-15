<?php get_header(); ?>
<div id="demo">
        <div class="container">
          <div class="row">
            <div class="span12 contact-slider">
            <?php $images = get_field('contact_slider'); if( $images ): ?>
              <div id="owl-demo" class="owlCarousel">
              <?php $images = get_field('contact_slider'); if( $images ): foreach( $images as $image ): ?>

                <div class="item"><img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" /></div>
                <?php endforeach; endif; ?>
              </div>
              <span class="slider-descr"><?php the_field('contact_form'); ?></span>
                <span class="slider-second"><?php the_field('second_contact_form'); ?></span>
              <?php endif; ?>
            </div>
          </div>
        </div>
    </div>
<?php get_footer(); ?>
