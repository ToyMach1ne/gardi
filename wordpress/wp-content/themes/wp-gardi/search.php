<?php get_header(); ?>
  <div class="background-inside-container">

<section class="about-company top-leaves">
<div class="center-content-wrapper">
<div class="our-services-wrapper searchform">
<h1 class="search-title inner-title"><?php echo sprintf( __( '%s Search Results for ', 'wpeasy' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
    <?php get_template_part('loop'); ?>
    <?php get_template_part('pagination'); ?>
  </div>
  </div>
  </section>
  </div>
<?php get_footer(); ?>
