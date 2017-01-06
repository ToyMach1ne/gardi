<?php /* Template Name: Price Page */  get_header(); ?>

 <div class="prays_list">
    <p class="table-caption"><?php the_title(); ?></p>

     <div class="sticky-wrap">
      <table class="style_table sticky-enabled" style="margin: 0px; width: 100%;">
            <thead>
                    <tr>
                        <th class="title-table">№</th>
                        <th class="title-table">Название товара</th>
                        <th class="title-table" style="width: 80px;">Сорт</th>
                        <th class="title-table">Возраст</th>
                        <th class="title-table" style="width: 80px;">Корневая система</th>
                        <th class="title-table" style="width: 80px;">Обьем контейнера</th>
                        <th class="title-table" style="width: 80px;">Наличие</th>
                        <th class="title-table">Цена</th>

                    </tr>
            </thead>
              <?php $posts = get_field('price_table'); if( $posts ): ?>
            <tbody>
          <?php
            $d = 1;
           foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>

             <tr class="default">
                  <td rowspan="1">
                  <?php
                      echo "" . $d . "<br />";
                      $d++;  ?>
                      </td>
                  <td><a href="<?php echo get_permalink( $p->ID ); ?>"><?php echo get_the_title( $p->ID ); ?></a></td>
                  <td><a href="<?php echo get_permalink( $p->ID ); ?>"><?php the_field('sort', $p->ID); ?></a></td>
                  <td><a href="<?php echo get_permalink( $p->ID ); ?>"><?php the_field('age', $p->ID); ?></a></td>
                  <td><a href="<?php echo get_permalink( $p->ID ); ?>"><?php the_field('root_system', $p->ID); ?></a></td>
                  <td><a href="<?php echo get_permalink( $p->ID ); ?>"><?php the_field('diametr', $p->ID); ?></a></td>
                  <td><a href="<?php echo get_permalink( $p->ID ); ?>"><?php the_field('availability', $p->ID); ?></a></td>
                  <td class="price-column"><a href="<?php echo get_permalink( $p->ID ); ?>"><span><?php the_field('price', $p->ID); ?></span></a></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
            <?php endif; ?>
      </table>
    </div>
  </div>
<?php get_footer(); ?>

