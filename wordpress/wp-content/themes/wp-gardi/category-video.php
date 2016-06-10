<?php  get_header(); ?>
<div class="background-inside-container">

<section class="about-company top-garden">

<div class="center-content-wrapper video">

<h1 class="page-title"><?php the_title(); ?></h1>
<h2 class="green-italic-title"><?php the_content(); ?></h2>

<div class="gardi-thumbs-wrapper video">
<?php get_template_part('loop'); ?>

                            <div class="gardi-thumb">

                              <div class="top-img-thumb-wrapper">

                                </div>
                                <div class="gardi-thumb-description">

                                    <div class="contact-info-gardi-thumb">
                                    </div>

                                </div>
                              </div>


                            </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>
