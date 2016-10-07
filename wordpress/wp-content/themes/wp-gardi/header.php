<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php bloginfo("name"); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/media-query.css">
    <base href=".">
    <meta name="viewport" content="width=1020">
    <meta name="format-detection" content="telephone=no">
    <meta name="wmail-verification" content="30678ed36474eea7">
    <link rel="apple-touch-icon" sizes="57x57" href="http://www.gardi.biz/apple-touch-icon-57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="http://www.gardi.biz/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="http://www.gardi.biz/apple-touch-icon-72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="http://www.gardi.biz/apple-touch-icon-144.png">
    <link href="<?php echo get_template_directory_uri(); ?>/css/fotorama.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css" rel="stylesheet">

 <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/selectivizr.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/respond.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.css">

</head>

<body <?php body_class(); ?>>

    <div class="content">
        <div class="wrapper1">
            <div class="content_shadow">
                <div class="blok-header-nav1">
                    <div class="center-content-wrapper">
                        <div class="branding-nav-wrapper">
                            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_4.png" class="gardi-logo" alt="logo"></a>
                <?php wpeHeadNav() ?>

                        </div>
                    </div>
                </div>
<div id="demo">
        <div class="container">
          <div class="row">
            <div class="span12">
            <?php $images = get_field('header_slider'); if( $images ): ?>
              <div id="owl-demo" class="owlCarousel">
              <?php $images = get_field('header_slider'); if( $images ): foreach( $images as $image ): ?>

                <div class="item"><?php echo home_url(); ?>"><img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" /></div>
                <?php endforeach; endif; ?>

              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
    </div>
<div class="sisea-search-form-container">
<div class="center-content-wrapper">
    <div class="b-header-social">
        <a href="https://vk.com/id137855179" target="_blank" rel="nofollow" class="b-social-link b-social-link_vk" title="Питомник растений в Вконтакте"></a>
        <a href="https://www.facebook.com/ivan.vladimirovich.750" target="_blank" rel="nofollow" class="b-social-link b-social-link_fb" title="Питомник растений в Facebook"></a>

        <a href="https://www.youtube.com/channel/UCO8K_RoMPgLQPVbbGLaOiYQ" target="_blank" rel="nofollow" class="b-social-link b-social-link_youtube" title="Ютуб канал"></a>

    </div>
    <form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
  <input class="search-input" type="search" name="s" placeholder="Поиск по сайту">
  <button class="search-submit" type="submit" role="button"><?php _e( 'Поиск', 'wpeasy' ); ?></button>
</form><!-- /search -->

</div>
</div>


    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.8.2.min.js"></script>


    <script type="text/javascript" language="javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.touchSwipe.min.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.transit.min.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.ba-throttle-debounce.min.js"></script>


    <script type="text/javascript">
    $(document).ready(function() {

  $("#owl-demo").owlCarousel({


      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      autoPlay:true,
      navigation:false,
      items:5,



  });

});
    </script>

    <script type="text/javascript">
    $(document).ready(function() {

  $("#owl-demo-product").owlCarousel({

      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      autoPlay:true,
      navigation:false,
      items:5,



  });

});
    </script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
