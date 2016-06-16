<?php get_header(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <img src="<?php echo get_template_directory_uri(); ?>/img/title_404.png">
    <h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpeasy' ); ?></a></h2>

  </article>
<?php get_footer(); ?>
