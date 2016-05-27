<?php /* Template Name: Single Page */  get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
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
                </div>
                <div class="background-inside-container">
                    <section class="about-company top-leaves">
                        <div class="center-content-wrapper">
                            <div class="wrapper">
                                <h1 class="page-title"><?php the_title(); ?></h1>
                                <h2 class="green-italic-title">
                                </h2>
                                <div class="plant-thumb-wrapper">
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-pungens-bialobok" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/yel-golubaya-bialobok.jpg" alt="Ель голубая Биалобок" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Ель голубая Биалобок" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Ель голубая Биалобок</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-pungens-super-blue-seedling" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/yel-golubaya-super-blyu-sidling.jpg" alt="Ель голубая Супер Блю Сидлинг (СБС)" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Ель голубая Супер Блю Сидлинг (СБС)" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Ель голубая Супер Блю Сидлинг (СБС)</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-glauca-alberta-globe" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/el-kanadskaja-alberta-globe.jpg" alt="Ель канадская Альберта Глобе" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Ель канадская Альберта Глобе" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Ель канадская Альберта Глобе</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-glauca-conica" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/el-conica.jpg" alt="Ель канадская Коника" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Ель канадская Коника" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Ель канадская Коника</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-pungens-argentea" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/yel-kolyuchaya-argentea.jpg" alt="Ель колючая Аргентеа" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Ель колючая Аргентеа" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Ель колючая Аргентеа</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-pungens-blue-trinket" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/yel-kolyuchaya-blyu-trinket.jpg" alt="Ель колючая Блю Тринкет" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Ель колючая Блю Тринкет" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Ель колючая Блю Тринкет</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-pungens-glauca-globosa" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/yel-kolyuchaya-glauka-globoza.jpg" alt="Ель колючая Глаука Глобоза" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Ель колючая Глаука Глобоза" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Ель колючая Глаука Глобоза</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-pungens" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/el-koluchaya-golubaya.jpg" alt="Ель колючая голубая" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Ель колючая голубая" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Ель колючая голубая</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-pungens-iseli-fastigiate" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/yel-kolyuchaya-Izeli-fastigiata.jpg" alt="Ель колючая Изели Фастигиата" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Ель колючая Изели Фастигиата" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Ель колючая Изели Фастигиата</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-pungens-pali" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/el-koljuchaja-pali.jpg" alt="Ель колючая Пали" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Ель колючая Пали" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Ель колючая Пали</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-pungens-hoto" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/yel-kolyuchaya-khoto.jpg" alt="Ель колючая Хото" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Ель колючая Хото" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Ель колючая Хото</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-pungens-hoopsii" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/yel-kolyuchaya-khupsi.jpg" alt="Ель колючая Хупси" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Ель колючая Хупси" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Ель колючая Хупси</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-abies" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/el-obuknovennaya.jpg" alt="Ель обыкновенная" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Ель обыкновенная" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Ель обыкновенная</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-abies-little-gem" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/el-obyknovennaja-evropejskaja-littl-dzhem.jpg" alt="Ель обыкновенная (европейская) Литтл Джем" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Ель обыкновенная (европейская) Литтл Джем" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Ель обыкновенная (европейская) Литтл Джем</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-abies-acrocona" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/yel-obyknovennaya-akrokonak.jpg" alt="Ель обыкновенная Акрокона" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Ель обыкновенная Акрокона" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Ель обыкновенная Акрокона</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-abies-nidiformis" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/el-nidiformis.jpg" alt="Ель обыкновенная Нидиформис" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Ель обыкновенная Нидиформис" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Ель обыкновенная Нидиформис</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-abies-frohburg" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/el-obyknovennaja-froburg.jpg" alt="Ель обыкновенная Фробург" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Ель обыкновенная Фробург" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Ель обыкновенная Фробург</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-omorika" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/el-serbskaya.jpg" alt="Ель Сербская" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Ель Сербская" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Ель Сербская</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-omorika-karel" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/el-serbskaja-karel.jpg" alt="Ель сербская Карел" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Ель сербская Карел" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Ель сербская Карел</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/picea-omorika-pendula" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/el-serbskaja-pendula.jpg" alt="Ель сербская Пендула" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Ель сербская Пендула" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Ель сербская Пендула</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/chamaecyparis-nootkatensis-pendula" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/kiparisovik-nutkanskiy-pendula.jpg" alt="Кипарисовик нутканский Пендула" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Кипарисовик нутканский Пендула" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Кипарисовик нутканский Пендула</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/larix-decidua-pendula" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/listvennitsa-yevropeyskaya-pendula.jpg" alt="Лиственница Европейская Пендула" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Лиственница Европейская Пендула" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Лиственница Европейская Пендула</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-horizontalis-andorra-compact-variegata" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/andora-kompacta-veriegata.jpg" alt="Можжевельник Андорра компакт Вериегата" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Можжевельник Андорра компакт Вериегата" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Можжевельник Андорра компакт Вериегата</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-virginiana-grey-owl" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/mogevelnik-gray-owl.jpg" alt="Можжевельник виргинский Грей Оул" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Можжевельник виргинский Грей Оул" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Можжевельник виргинский Грей Оул</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-virginiana-canaertii" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/mozhzhevelnik-virginskij-kanaerti.jpg" alt="Можжевельник виргинский Канаерти" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Можжевельник виргинский Канаерти" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Можжевельник виргинский Канаерти</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-virginiana-hetz" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/mogevelnik-hetz.jpg" alt="Можжевельник виргинский Хетц" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Можжевельник виргинский Хетц" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Можжевельник виргинский Хетц</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-horizontalis-wiltoni" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/juniperus-horizontalis-wiltoni.jpg" alt="Можжевельник горизонтальный Wiltoni (Вилтони)" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Можжевельник горизонтальный Wiltoni (Вилтони)" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Можжевельник горизонтальный Wiltoni (Вилтони)</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-horizontalis-andorra-compacta" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/andora-compacta.jpg" alt="Можжевельник горизонтальный Андорра Компакт" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Можжевельник горизонтальный Андорра Компакт" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Можжевельник горизонтальный Андорра Компакт</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-horizontalis-bar-harbor" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/mozhzhevelnik-gorizontalnyy-bar-kharbor.jpg" alt="Можжевельник горизонтальный Бар Харбор" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Можжевельник горизонтальный Бар Харбор" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Можжевельник горизонтальный Бар Харбор</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-horizontalis-blue-forest" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/mozhzhevelnik-blu-forest.jpg" alt="Можжевельник горизонтальный Блю Форест" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Можжевельник горизонтальный Блю Форест" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Можжевельник горизонтальный Блю Форест</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-horizontalis-blue-chip" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/mozhzhevelnik-blu-chip.jpg" alt="Можжевельник горизонтальный Блю Чип" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Можжевельник горизонтальный Блю Чип" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Можжевельник горизонтальный Блю Чип</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-horizontalis-glacier" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/mozhzhevelnik-gorizontalnyy-glasiyer.jpg" alt="Можжевельник горизонтальный Гласиер" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Можжевельник горизонтальный Гласиер" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Можжевельник горизонтальный Гласиер</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-horizontalis-limeglow" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/mozhzhevelnik-gorizontalnyy-laymglou.jpg" alt="Можжевельник горизонтальный Лаймглоу" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Можжевельник горизонтальный Лаймглоу" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Можжевельник горизонтальный Лаймглоу</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-sabina" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/mogevelnik-kazackiy.jpg" alt="Можжевельник казацкий" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Можжевельник казацкий" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Можжевельник казацкий</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-chinensis-blue-alps" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/mozhzhevelnik-chinensis-blue-alps.jpg" alt="Можжевельник китайский Блю Альпс" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Можжевельник китайский Блю Альпс" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Можжевельник китайский Блю Альпс</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-chinensis-kuriwao-gold" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/mozhzhevelnik-kurivao-gold.jpg" alt="Можжевельник китайский Куривао Голд" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Можжевельник китайский Куривао Голд" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Можжевельник китайский Куривао Голд</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-chinensis-monarch" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/mozhzhevelnik-monarch.jpg" alt="Можжевельник китайский Монарх" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Можжевельник китайский Монарх" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Можжевельник китайский Монарх</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-chinensis-obelisk" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/mozhzhevelnik-obelisk.jpg" alt="Можжевельник китайский Обелиск" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Можжевельник китайский Обелиск" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Можжевельник китайский Обелиск</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-chinensis-strikta" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/mozhzhevelnik-strikta.jpg" alt="Можжевельник китайский Стрикта" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Можжевельник китайский Стрикта" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Можжевельник китайский Стрикта</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-communis-arnold" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/mozhzhevelnik-obyknovennyy-arnold.jpg" alt="Можжевельник обыкновенный Арнольд" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Можжевельник обыкновенный Арнольд" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Можжевельник обыкновенный Арнольд</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-communis-goldschatz" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/mozhzhevelnik-obyknovennyy-goldshatts.jpg" alt="Можжевельник обыкновенный Голдшатц" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Можжевельник обыкновенный Голдшатц" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Можжевельник обыкновенный Голдшатц</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-communis-green-mantle" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/mozhzhevelnik-obyknovennyy-grin-montl.jpg" alt="Можжевельник обыкновенный Грин Монтл" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Можжевельник обыкновенный Грин Монтл" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Можжевельник обыкновенный Грин Монтл</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-communis-hibernica" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/mozhzhevelnik-hibernika.jpg" alt="Можжевельник обыкновенный Хиберника" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Можжевельник обыкновенный Хиберника" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Можжевельник обыкновенный Хиберника</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-scopulorum-skyrocket" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/mozhzhevelnik-skajroket.jpg" alt="Можжевельник скальный Скайрокет" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Можжевельник скальный Скайрокет" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Можжевельник скальный Скайрокет</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-media-gold-star" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/mozhzhevelnik-gold-star.jpg" alt="Можжевельник средний Голд Стар" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Можжевельник средний Голд Стар" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Можжевельник средний Голд Стар</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-media-mint-julep" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/mozhzhevelnik-mint-dzhulep.jpg" alt="Можжевельник средний Минт Джулеп" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Можжевельник средний Минт Джулеп" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Можжевельник средний Минт Джулеп</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-medial-old-gold" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/mozhzhevelnik-medial-old-gold.jpg" alt="Можжевельник средний Олд Голд" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Можжевельник средний Олд Голд" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Можжевельник средний Олд Голд</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-media-pfitzeriana-compacta" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/mozhzhevelnik-srednij-pfitceriana-kompakta.jpg" alt="Можжевельник средний Пфитцериана компакта" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Можжевельник средний Пфитцериана компакта" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Можжевельник средний Пфитцериана компакта</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-squamata-blue-carpet" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/mogevelnik-blu-karpet.jpg" alt="Можжевельник чешуйчатый Блю Карпет" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Можжевельник чешуйчатый Блю Карпет" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Можжевельник чешуйчатый Блю Карпет </span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/juniperus-squamata-meyeri" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/mozhzhevelnik-cheshuychatyy-meyyeri.jpg" alt="Можжевельник чешуйчатый Мейери" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Можжевельник чешуйчатый Мейери" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Можжевельник чешуйчатый Мейери</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/abies-lasiocarpa-compacta" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/pikhta-gornaya-kompakta.jpg" alt="Пихта горная Компакта" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Пихта горная Компакта" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Пихта горная Компакта</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/abies-concolor-violacea" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/pikhta-odnotsvetnaya-violatsea.jpg" alt="Пихта одноцветная Виолацеа" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Пихта одноцветная Виолацеа" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Пихта одноцветная Виолацеа</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/pinus-heldreichii-compakt-gem" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/sosna-geldreykha-kompakt-dzhem.jpg" alt="Сосна Гельдрейха Компакт Джем" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Сосна Гельдрейха Компакт Джем" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Сосна Гельдрейха Компакт Джем</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/pinus-mugo-minikin" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/sosna-gornaya-minikin.jpg" alt="Сосна горная Миникин" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Сосна горная Миникин" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Сосна горная Миникин</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/pinus-mugo-mops" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/sosna-gornaya-mops.jpg" alt="Сосна горная Мопс" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Сосна горная Мопс" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Сосна горная Мопс</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/pinus-mugo-mughus" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/sosna-gornaya-mugus.jpg" alt="Сосна горная Мугус" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Сосна горная Мугус" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Сосна горная Мугус</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/pinus-mugo-pumilio" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/sosna-gornaya-pumilio.jpg" alt="Сосна горная Пумилио" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Сосна горная Пумилио" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Сосна горная Пумилио</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/pinus-nigra-subsp-pallasiana" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/sosna-pallasa-ili-krymskaja.jpg" alt="Сосна Крымская или сосна Палласа" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Сосна Крымская или сосна Палласа" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Сосна "Палласа или Крымская"</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/pinus-sylvestris-fastigiata" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/sosna-obyknovennaya-fastigiata.jpg" alt="Сосна обыкновенная Фастигиата" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Сосна обыкновенная Фастигиата" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Сосна обыкновенная Фастигиата</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/pinus-nigra-bambino" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/sosna-chernaya-bambino.jpg" alt="Сосна черная Бамбино" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Сосна черная Бамбино" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Сосна черная Бамбино</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/pinus-nigra-brepo" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/sosna-chernaja-brepo.jpg" alt="Сосна черная Брепо" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Сосна черная Брепо" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Сосна черная Брепо</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/taxus-media-wojtek" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/tis-sredniy-voytek.jpg" alt="Тис средний Войтек" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Тис средний Войтек" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Тис средний Войтек</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/taxus-media-densiformis" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/tis-sredniy-densiformis.jpg" alt="Тис средний Денсиформис" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Тис средний Денсиформис" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Тис средний Денсиформис</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/taxus-media-farmen" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/tis-sredniy-farmen.jpg" alt="Тис средний Фармен" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Тис средний Фармен" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Тис средний Фармен</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/taxus-media-hicksii" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/tis-sredniy-khiksi.jpg" alt="Тис средний Хикси" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Тис средний Хикси" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Тис средний Хикси</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/taxus-baccata-repandens" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/tis-yagodnyy-repandens.jpg" alt="Тис ягодный Репанденс" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Тис ягодный Репанденс" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Тис ягодный Репанденс</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/taxus-media-fastigiata" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/tiss-fastidzhiata.jpg" alt="Тис ягодный Фастиджиата" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Тис ягодный Фастиджиата" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Тис ягодный Фастиджиата</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thujopsis-dolabrata-variegata" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/tuevik-dolotovidnuy-variegata.jpg" alt="Туевик долотовидный Вариегата" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Туевик долотовидный Вариегата" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Туевик долотовидный Вариегата</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-platycladus-orientalis-aurea-nana" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/aurea-nana.jpg" alt="Туя восточная Ауреа Нана" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Туя восточная Ауреа Нана" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Туя восточная Ауреа Нана</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/tuja-zapadnaya.jpg" alt="Туя западная" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Туя западная" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Туя западная</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-brabant" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/tuja-brabant.jpg" alt="Туя западная Брабант" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Туя западная Брабант" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Туя западная Брабант</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-ericoides" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/tuya-zapadnaya-vereskovidnaya-erikoides.jpg" alt="Туя западная Вересковидная Эрикоидес" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Туя западная Вересковидная Эрикоидес" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Туя западная Вересковидная Эрикоидес</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-globosa" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/tuja-globoza.jpg" alt="Туя западная Глобоза" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Туя западная Глобоза" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Туя западная Глобоза</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-golden-smaragd" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/tuya-golden-smaragd.jpg" alt="Туя западная Голден Смарагд" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Туя западная Голден Смарагд" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Туя западная Голден Смарагд</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-danica" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/tuja-danica.jpg" alt="Туя западная Даника" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Туя западная Даника" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Туя западная Даника</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-cloth-of-gold" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/tuja-klot-of-gold.jpg" alt="Туя западная Клот оф Голд" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Туя западная Клот оф Голд" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Туя западная Клот оф Голд</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-columna" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/tuja-columna.jpg" alt="Туя западная Колумна" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Туя западная Колумна" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Туя западная Колумна</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-little-boy" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/tuya-little-boy.jpg" alt="Туя западная Литл Бой" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Туя западная Литл Бой" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Туя западная Литл Бой</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-litomysl" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/tuja-zapadnaja-litomyshl.jpg" alt="Туя западная Литомышль" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Туя западная Литомышль" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Туя западная Литомышль</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-mirjam" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/tuya-mirijam.jpg" alt="Туя западная Мириам" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Туя западная Мириам" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Туя западная Мириам</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-mr-bowling-ball" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/tuja-mr-bouling-bol.jpg" alt="Туя западная Мистeр Боулинг бол" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Туя западная Мистeр Боулинг бол" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Туя западная Мистeр Боулинг бол</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-reingold" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/tuja-zapadnaja-rejngold.jpg" alt="Туя западная Рейнголд" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Туя западная Рейнголд" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Туя западная Рейнголд</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-sunkist" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/tuja-zapadnaja-sankist.jpg" alt="Туя западная Санкист" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Туя западная Санкист" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Туя западная Санкист</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-smaragd" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/tuja-zapadnaja-smaragd.jpg" alt="Туя западная Смарагд" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Туя западная Смарагд" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Туя западная Смарагд</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-spiralis" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/tuja-zapadnaja-spiralis.jpg" alt="Туя западная Спиралис" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Туя западная Спиралис" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Туя западная Спиралис</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-teddy" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/tuja-zapadnaja-teddi.jpg" alt="Туя западная Тедди" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Туя западная Тедди" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Туя западная Тедди</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-filiformis" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/tuja-zapadnaja-filiformis.jpg" alt="Туя западная Филиформис" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Туя западная Филиформис" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Туя западная Филиформис</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-holmstrup" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/tuja-zapadnaja-holmstryp.jpg" alt="Туя западная Холмструп" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Туя западная Холмструп" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Туя западная Холмстрyп</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-hoseri" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/tuja-zapadnaja-hoseri.jpg" alt="Туя западная Хосери" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Туя западная Хосери" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Туя западная Хосери</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-plicata-whipcord" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/tuya-whipcord.jpg" alt="Туя складчатая Випкорд" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Туя складчатая Випкорд" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Туя складчатая Випкорд</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-plicata-can-can" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/tuya-can-can.jpg" alt="Туя складчатая Кан-Кан" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Туя складчатая Кан-Кан" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Туя складчатая Кан-Кан</span>
                                    </a>
                                    <a href="http://www.gardi.biz/nursery/coniferous-trees-and-shrubs/thuja-occidentalis-golden-globe" class="plant-thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/tuya-zapadnaya-golden-glob.jpg" alt="Туя западная Голден Глоб" class="plant-thumb-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/coniferous-trees-and-shrubs.png" alt="Туя западная Голден Глоб" class="plant-thumb-icon">
                                        <span class="plant-thumb-title">Туя&nbsp;западная&nbsp;Голден&nbsp;Глоб</span>
                                    </a>
                                </div>
                                <p class="pagination"><strong class="green-italic-title">Питомник хвойных растений: хвойные деревья и кустарники</strong></p>
                                <p class="pagination"><strong class="list-of-plants">(туя западная, можжевельник, ель, сосна, тисс, туевик)</strong></p>
                            </div>
                        </div>
                    </section>
                </div>
                <?php get_footer(); ?>

