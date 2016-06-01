<?php /* Template Name: Single Page */  get_header(); ?>


                </div>
                <div class="background-inside-container">
                    <section class="about-company top-leaves">
                        <div class="center-content-wrapper">
                            <div class="wrapper">
                                <h1 class="page-title"><?php the_title(); ?></h1>
                                <h2 class="green-italic-title">
                                </h2>





                                <div class="plant-thumb-wrapper">
                                <?php query_posts(array( 'post_type' => 'product','showposts' => 100 ) ); ?>
                                <?php while (have_posts()) : the_post(); ?>
                            <h2 class="plant-thumb">
                            <a href="<?php the_permalink() ?>"><?php the_title(); ?>
                              <?php the_post_thumbnail('thumbnail'); ?></a>
                                    <p><?php echo get_the_excerpt(); ?></p>
                            </h2>



                                    <?php endwhile;?>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <?php get_footer(); ?>


<!-- Scripts -->
              <script>
                    var $ = jQuery.noConflict();
                    $(document).ready(function() {
                        $('#search').on('input', function(e) {
                            var str = $(this).val();
                            str = str.charAt(0).toUpperCase() + str.slice(1);
                            $(this).val(str);
                        });
                        $(".sisea-search-form").submit(function() {
                            $("#site-search-results").load("search", $(".sisea-search-form").serialize()).show(); //Загружаем результаты с лэндинг-документа и выводим контейнер
                            return false;
                        });
                        $(".sisea-search-form input").keyup(function() {
                            if (this.value.length > 2) { //2 - миниум знаков для начала отображения live search
                                $("#site-search-results").load("search", $(".sisea-search-form").serialize()).show(); //Загружаем результаты с лэндинг-документа и выводим контейнер
                            } else {
                                $("#site-search-results").hide(); //Если введено менее 2 знаков, контейнер скрыт (CSS display:none;)
                            }
                        });
                    });
                </script>

<!-- End of Scripts -->
