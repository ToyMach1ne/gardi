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
                            <p class="page-title">Питомник декоративных растений</p>
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
                                    <div class="wrapper_galery_min">
                                        <div id="gallery" class="card-gallery fotorama fotorama_horizontal fotorama_shadows fotorama_csstransitions" data-width="268" data-height="339" data-autoplay="true" style="min-width: 0px;">
                                            <div class="fotorama__wrap fotorama__wrap_style_fade" style="width: 268px; height: 339px;">
                                                <div class="fotorama__noise"></div>
                                                <div class="fotorama__shaft" style="width: 268px; height: 339px;">

                            <div class="fotorama__frame">
                                    <?php $images = get_field('gallery');if( $images ): ?>
                                    <?php foreach( $images as $image ): ?>
                            <div class="fotorama__frame" >
                              <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>">
                            </div>
                            <?php echo $image['caption']; ?>



<?php endforeach; ?>
                            </div>


                            </div>



                            <?php endif; ?>
                                <i class="fotorama__arr fotorama__arr_prev">◀</i><i class="fotorama__arr fotorama__arr_next">▶</i>

                                            </div>

                                            <div class="fotorama__thumbs" style="visibility: visible; width: 268px;">

                                                <div class="fotorama__thumbs-shaft">
      <?php $images = get_field('gallery');if( $images ): ?>
                                    <?php foreach( $images as $image ): ?>
                                                <i class="fotorama__thumb">
                                                  <i class="fotorama__thumb__dot"></i>
                                                </i>

                                           <?php endforeach; ?>
<?php endif; ?>

                                                </div>
                                            </div>
                                        </div>


                                        <script type="text/javascript" src="js/fotorama.js"></script>
                                        <script type="text/javascript">
                                        jQuery(document).ready(function($) {
                                            images = [

      <?php $images = get_field('gallery');if( $images ): ?>
                                    <?php foreach( $images as $image ): ?>

                                            {
                                                "img": "<?php echo $image['sizes']['thumbnail']; ?>"
                                            },

                                           <?php endforeach; ?>
                                           <?php endif; ?>

];
                                            if (jQuery.isArray(images)) {
                                                $("#gallery").fotorama({
                                                    data: images,
                                                    cropToFit: true,
                                                    nav: 'dots',
                                                    arrows: true,
                                                    transitionDuration: 1500,
                                                    transition: 'fade',
                                                    caption: 'overlay',
                                                    dataCaption: "Ель голубая Биалобок",
                                                    loop: true
                                                });
                                            }
                                        });
                                        </script>
                                    </div>
                                </div>


                                <div itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
                                    <meta itemprop="priceСurrency" content="UAH">
                                    <table class="style_table style_table_rt-bg">
                                        <tbody>

                                            <tr>
                                                <th class="title-table">высота растения</th>
                                                <th class="title-table">диаметр растения</th>

                                                <th class="title-table">цена</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                <?php the_field('height');?>
                                                </td>
                                            <td><?php the_field('diametr');?></td>
                                                <td><?php the_field('price');?>
                                                    <span itemprop="price" style="display:none">570</span>
                                                    <span style="display:none;" itemprop="availability" content="in_stock">В наличии</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="other-plants-wrapper">
                                <div class="other-plants-top-line">
                                    <p><strong><?php the_title(); ?> Купить в питомнике растений </strong></p>
                                </div>
                                <div class="other-plants-content">
                                    <ul class="other-plants-list3">
                                        <li class="first"><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-pungens" title="Ель колючая голубая">Ель колючая голубая</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-abies" title="Ель обыкновенная">Ель обыкновенная</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-omorika" title="Ель Сербская">Ель Сербская</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-glauca-conica" title="Ель канадская Коника">Ель канадская Коника</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-abies-nidiformis" title="Ель обыкновенная Нидиформис">Ель обыкновенная Нидиформис</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/pinus-nigra-subsp-pallasiana" title="Сосна Крымская или сосна Палласа">Сосна Крымская или сосна Палласа</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/taxus-media-fastigiata" title="Тис ягодный Фастиджиата">Тис ягодный Фастиджиата</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thujopsis-dolabrata-variegata" title="Туевик долотовидный Вариегата">Туевик долотовидный Вариегата</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-virginiana-grey-owl" title="Можжевельник виргинский Грей Оул">Можжевельник виргинский Грей Оул</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-sabina" title="Можжевельник казацкий">Можжевельник казацкий</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-scopulorum-skyrocket" title="Можжевельник скальный Скайрокет">Можжевельник скальный Скайрокет</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-horizontalis-andorra-compacta" title="Можжевельник горизонтальный Андорра Компакт">Можжевельник горизонтальный Андорра Компакт</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-horizontalis-andorra-compact-variegata" title="Можжевельник Андорра компакт Вериегата">Можжевельник Андорра компакт Вериегата</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-squamata-blue-carpet" title="Можжевельник чешуйчатый Блю Карпет">Можжевельник чешуйчатый Блю Карпет</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-horizontalis-blue-chip" title="Можжевельник горизонтальный Блю Чип">Можжевельник горизонтальный Блю Чип</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-virginiana-hetz" title="Можжевельник виргинский Хетц">Можжевельник виргинский Хетц</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-media-pfitzeriana-compacta" title="Можжевельник средний Пфитцериана компакта">Можжевельник средний Пфитцериана компакта</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-horizontalis-blue-forest" title="Можжевельник горизонтальный Блю Форест">Можжевельник горизонтальный Блю Форест</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-chinensis-kuriwao-gold" title="Можжевельник китайский Куривао Голд">Можжевельник китайский Куривао Голд</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-squamata-meyeri" title="Можжевельник чешуйчатый Мейери">Можжевельник чешуйчатый Мейери</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-chinensis-obelisk" title="Можжевельник китайский Обелиск">Можжевельник китайский Обелиск</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-chinensis-strikta" title="Можжевельник китайский Стрикта">Можжевельник китайский Стрикта</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-chinensis-monarch" title="Можжевельник китайский Монарх">Можжевельник китайский Монарх</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-media-gold-star" title="Можжевельник средний Голд Стар">Можжевельник средний Голд Стар</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-media-mint-julep" title="Можжевельник средний Минт Джулеп">Можжевельник средний Минт Джулеп</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis" title="Туя западная">Туя западная</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-brabant" title="Туя западная Брабант">Туя западная Брабант</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-columna" title="Туя западная Колумна">Туя западная Колумна</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-spiralis" title="Туя западная Спиралис">Туя западная Спиралис</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-danica" title="Туя западная Даника">Туя западная Даника</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-filiformis" title="Туя западная Филиформис">Туя западная Филиформис</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-globosa" title="Туя западная Глобоза">Туя западная Глобоза</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-hoseri" title="Туя западная Хосери">Туя западная Хосери</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-holmstrup" title="Туя западная Холмструп">Туя западная Холмструп</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-litomysl" title="Туя западная Литомышль">Туя западная Литомышль</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-mr-bowling-ball" title="Туя западная Мистeр Боулинг бол">Туя западная Мистeр Боулинг бол</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-reingold" title="Туя западная Рейнголд">Туя западная Рейнголд</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-smaragd" title="Туя западная Смарагд">Туя западная Смарагд</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-sunkist" title="Туя западная Санкист">Туя западная Санкист</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-teddy" title="Туя западная Тедди">Туя западная Тедди</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-cloth-of-gold" title="Туя западная Клот оф Голд">Туя западная Клот оф Голд</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-communis-hibernica" title="Можжевельник обыкновенный Хиберника">Можжевельник обыкновенный Хиберника</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-horizontalis-wiltoni" title="Можжевельник горизонтальный Wiltoni (Вилтони)">Можжевельник горизонтальный Wiltoni (Вилтони)</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-platycladus-orientalis-aurea-nana" title="Туя восточная Ауреа Нана">Туя восточная Ауреа Нана</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-plicata-can-can" title="Туя складчатая Кан-Кан">Туя складчатая Кан-Кан</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-golden-smaragd" title="Туя западная Голден Смарагд">Туя западная Голден Смарагд</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-little-boy" title="Туя западная Литл Бой">Туя западная Литл Бой</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-mirjam" title="Туя западная Мириам">Туя западная Мириам</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-plicata-whipcord" title="Туя складчатая Випкорд">Туя складчатая Випкорд</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-omorika-karel" title="Ель сербская Карел">Ель сербская Карел</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-glauca-alberta-globe" title="Ель канадская Альберта Глобе">Ель канадская Альберта Глобе</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-abies-little-gem" title="Ель обыкновенная (европейская) Литтл Джем">Ель обыкновенная (европейская) Литтл Джем</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-virginiana-canaertii" title="Можжевельник виргинский Канаерти">Можжевельник виргинский Канаерти</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/pinus-nigra-brepo" title="Сосна черная Брепо">Сосна черная Брепо</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-pungens-blue-trinket" title="Ель колючая Блю Тринкет">Ель колючая Блю Тринкет</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-pungens-pali" title="Ель колючая Пали">Ель колючая Пали</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-abies-frohburg" title="Ель обыкновенная Фробург">Ель обыкновенная Фробург</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-omorika-pendula" title="Ель сербская Пендула">Ель сербская Пендула</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/larix-decidua-pendula" title="Лиственница Европейская Пендула">Лиственница Европейская Пендула</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/pinus-heldreichii-compakt-gem" title="Сосна Гельдрейха Компакт Джем">Сосна Гельдрейха Компакт Джем</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/pinus-mugo-minikin" title="Сосна горная Миникин">Сосна горная Миникин</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/pinus-sylvestris-fastigiata" title="Сосна обыкновенная Фастигиата">Сосна обыкновенная Фастигиата</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-pungens-glauca-globosa" title="Ель колючая Глаука Глобоза">Ель колючая Глаука Глобоза</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-communis-arnold" title="Можжевельник обыкновенный Арнольд">Можжевельник обыкновенный Арнольд</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-horizontalis-bar-harbor" title="Можжевельник горизонтальный Бар Харбор">Можжевельник горизонтальный Бар Харбор</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-golden-globe" title="Туя западная Голден Глоб">Туя&nbsp;западная&nbsp;Голден&nbsp;Глоб</a></li>
                                        <li class="active"><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-pungens-bialobok" title="Ель голубая Биалобок">Ель голубая Биалобок</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-abies-acrocona" title="Ель обыкновенная Акрокона">Ель обыкновенная Акрокона</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-pungens-argentea" title="Ель колючая Аргентеа">Ель колючая Аргентеа</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-pungens-hoto" title="Ель колючая Хото">Ель колючая Хото</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-pungens-iseli-fastigiate" title="Ель колючая Изели Фастигиата">Ель колючая Изели Фастигиата</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/chamaecyparis-nootkatensis-pendula" title="Кипарисовик нутканский Пендула">Кипарисовик нутканский Пендула</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/abies-concolor-violacea" title="Пихта одноцветная Виолацеа">Пихта одноцветная Виолацеа</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/abies-lasiocarpa-compacta" title="Пихта горная Компакта">Пихта горная Компакта</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/pinus-mugo-pumilio" title="Сосна горная Пумилио">Сосна горная Пумилио</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/pinus-nigra-bambino" title="Сосна черная Бамбино">Сосна черная Бамбино</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/pinus-mugo-mops" title="Сосна горная Мопс">Сосна горная Мопс</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/pinus-mugo-mughus" title="Сосна горная Мугус">Сосна горная Мугус</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-pungens-hoopsii" title="Ель колючая Хупси">Ель колючая Хупси</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-horizontalis-limeglow" title="Можжевельник горизонтальный Лаймглоу">Можжевельник горизонтальный Лаймглоу</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-ericoides" title="Туя западная Вересковидная Эрикоидес">Туя западная Вересковидная Эрикоидес</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-chinensis-blue-alps" title="Можжевельник китайский Блю Альпс">Можжевельник китайский Блю Альпс</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-medial-old-gold" title="Можжевельник средний Олд Голд">Можжевельник средний Олд Голд</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/taxus-media-wojtek" title="Тис средний Войтек">Тис средний Войтек</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/taxus-media-densiformis" title="Тис средний Денсиформис">Тис средний Денсиформис</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/taxus-media-farmen" title="Тис средний Фармен">Тис средний Фармен</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/taxus-media-hicksii" title="Тис средний Хикси">Тис средний Хикси</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/taxus-baccata-repandens" title="Тис ягодный Репанденс">Тис ягодный Репанденс</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-pungens-super-blue-seedling" title="Ель голубая Супер Блю Сидлинг (СБС)">Ель голубая Супер Блю Сидлинг (СБС)</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-communis-goldschatz" title="Можжевельник обыкновенный Голдшатц">Можжевельник обыкновенный Голдшатц</a></li>
                                        <li><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-communis-green-mantle" title="Можжевельник обыкновенный Грин Монтл">Можжевельник обыкновенный Грин Монтл</a></li>
                                        <li class="last"><a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-horizontalis-glacier" title="Можжевельник горизонтальный Гласиер">Можжевельник горизонтальный Гласиер</a></li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="other-plants-category-list">
                                <li class="first active">
                                    <a style="background: url(&#39;img/3a.jpg&#39;) no-repeat;" href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/" title="Хвойные деревья и кустарники">
                                        <span class="title-wrapper background">
    <span class="icon"></span>
                                        <span class="plants-category-title" style="color: #586651;">Хвойные деревья и кустарники</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a style="background: url(&#39;img/1a.jpg&#39;) no-repeat;" href="http://www.gardi.biz/nursery/deciduous-trees/" title="Лиственные деревья">
                                        <span class="title-wrapper background">
    <span class="icon"></span>
                                        <span class="plants-category-title" style="color: #586651;">Лиственные деревья</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a style="background: url(&#39;img/5a.jpg&#39;) no-repeat;" href="http://www.gardi.biz/nursery/climbers/" title="Вьющиеся  растения">
                                        <span class="title-wrapper background">
    <span class="icon"></span>
                                        <span class="plants-category-title" style="color: #586651;">Вьющиеся  растения</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="last">
                                    <a style="background: url(&#39;img/4a.jpg&#39;) no-repeat;" href="http://www.gardi.biz/nursery/deciduous-shrubs/" title="Лиственные кустарники">
                                        <span class="title-wrapper background">
    <span class="icon"></span>
                                        <span class="plants-category-title" style="color: #586651;">Лиственные кустарники</span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
                <div class="text-niz-print">
                    <p>Гарди. Питомник декоративных растений. <span class="print-margin-text"> ул. Рокоссовского, 64б, г. Кременчуг, Полтавская область.</span> www.gardi.biz</p>
                </div>
  <?php get_footer(); ?>
