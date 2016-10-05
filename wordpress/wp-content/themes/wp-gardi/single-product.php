<?php /* Template Name: Product Page */  get_header(); ?>
                    <script>
                    var $ = jQuery.noConflict();
                    $(document).ready(function() {
                        $('#search').on('input', function(e) {
                            var str = $(this).val();
                            str = str.charAt(0).toUpperCase() + str.slice(1);
                            $(this).val(str);
                        });
                        $(".sisea-search-form").submit(function() {
                            $("#site-search-results").load("search", $(".sisea-search-form").serialize()).show();
                            return false;
                        });
                        $(".sisea-search-form input").keyup(function() {
                            if (this.value.length > 2) {
                                $("#site-search-results").load("search", $(".sisea-search-form").serialize()).show();
                            } else {
                                $("#site-search-results").hide();
                            }
                        });
                    });
                    </script>
                    <section class="about-company top-leaves">
                        <div class="center-content-wrapper">
                            <p class="page-title">Питомник декоративных и плодовых растений</p>
                            <h1 class="green-italic-title"><?php the_title(); ?></h1>
                            <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/img
  /gardi_logo.png" class="img-print" alt="Gardi logo">
                            <p class="title-print">
                                </p>
                            <div class="plants-card plants-card_margin" itemscope="" itemtype="http://data-vocabulary.org/Product">
                                <h2><?php the_title(); ?><span></span></h2>
                                <div>
                                    <div class="product-properties">
                                        <?php if ( has_post_thumbnail()) :?>
                                    <a class="single-thumb" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                      </a>
                                    <?php endif; ?><!-- /post thumbnail -->
                                    </div>
                                    <div class="plants-description">
                                        <p itemprop="description"><?php the_content(); ?>

                                        </p>

                                    </div>
                                </div>

                                <div class="plants-gallery">
                                    <div id="demo">
        <div class="container">
          <div class="row">
            <div class="span12">
            <?php $images = get_field('product_gallery'); if( $images ): ?>
              <div id="owl-demo-product" class="owlCarousel">
              <?php $images = get_field('product_gallery'); if( $images ): foreach( $images as $image ): ?>
                <div class="single-item"><img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" /></div>
                <?php endforeach; endif; ?>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
    </div>
                                </div>


                                <div itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
                                    <meta itemprop="priceСurrency" content="UAH">
                                    <table class="style_table style_table_rt-bg">
                                        <tbody>

                                            <tr>
                                                <th class="title-table">Сорт</th>
                                                <th class="title-table">Возраст</th>
                                                <th class="title-table">Корневая система</th>
                                                <th class="title-table">Обьем контейнера</th>
                                                <th class="title-table">Наличие</th>

                                                <th class="title-table">Цена</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                <?php the_field('sort');?>
                                                </td>
                                            <td><?php the_field('age');?></td>
                                            <td><?php the_field('root_system');?></td>
                                            <td><?php the_field('diametr');?></td>
                                            <td><?php the_field('availability');?> </td>
                                            <td><?php the_field('price');?> </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="other-plants-wrapper">
                                <div class="other-plants-top-line">
                                    <p><strong>Купить в питомнике растений </strong></p>
                                </div>
                                <div class="other-plants-content">

                                    <ul class="other-plants-list3">
                                    <?php query_posts(array( 'post_type' => 'product','showposts' => 200, 'orderby' => 'title', 'order' => 'ASC' ) ); ?>
                                <?php while (have_posts()) : the_post(); ?>
                                        <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                                        <?php endwhile;?>


                                    </ul>
                                </div>
                            </div>
                            <ul class="other-plants-category-list">
                             <li class="first active">
                                <a style="background: url(<?php echo get_template_directory_uri(); ?>/img/3a.jpg) no-repeat;" href="http://sad-lopatina.org.ua/categories/plodovye-derevya" title="">
                                        <span class="title-wrapper background">
                                            <span class="icon"></span>
                                        <span class="plants-category-title" style="color: #586651;">Плодовые Деревья</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a style="background: url(<?php echo get_template_directory_uri(); ?>/img/1a.jpg) no-repeat;" href="http://sad-lopatina.org.ua/categories/plodovye-kustarniki" title="">
                                        <span class="title-wrapper background">
                                        <span class="icon"></span>
                                        <span class="plants-category-title" style="color: #586651;">Плодовые Кустарники</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a style="background: url(<?php echo get_template_directory_uri(); ?>/img/5a.jpg) no-repeat;" href="http://sad-lopatina.org.ua/categories/dekorativnye" title="">
                                        <span class="title-wrapper background">
    <span class="icon"></span>
                                        <span class="plants-category-title" style="color: #586651;">Декоративные Растения</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="last">
                                    <a style="background: url(<?php echo get_template_directory_uri(); ?>/img/4a.jpg) no-repeat;" href="http://sad-lopatina.org.ua/video" title="">
                                        <span class="title-wrapper background">
    <span class="icon"></span>
                                        <span class="plants-category-title" style="color: #586651;">Видео Уроки</span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>

  <?php get_footer(); ?>
