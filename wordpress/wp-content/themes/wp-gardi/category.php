<?php get_header(); ?>

<div class="background-inside-container">

<section class="about-company top-leaves">
<h1 class="page-title">Новости</h1>
<?php query_posts("showposts=3&cat=9"); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="center-content-wrapper">

<div class="our-services-wrapper">
<?php if ( has_post_thumbnail()) :?>
  <a class="single-thumb" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <?php the_post_thumbnail('thumbnail'); ?>
  </a>
    <?php endif; ?><!-- /post thumbnail -->
<h2><?php the_title(); ?></h2>


<p><?php the_excerpt(); ?></p>

<a href="<?php the_permalink() ?>" class="more-details">Читать подробнее</a>

</div>


</div>
<?php endwhile; endif; ?>
</section>


</div>
<?php get_footer(); ?>
