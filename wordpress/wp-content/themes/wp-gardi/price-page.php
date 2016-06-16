<?php /* Template Name: Price Page */  get_header(); ?>

 <div class="prays_list">
    <p class="table-caption"><?php the_title(); ?></p>

     <div class="sticky-wrap">
      <table class="style_table sticky-enabled" style="margin: 0px; width: 100%;">
            <thead>
                    <tr>
                        <th class="title-table">№</th>
                        <th class="title-table">Название товара</th>
                        <th class="title-table" style="width: 80px;">Обхват <br> (м)</th>
                        <th class="title-table">Параметры <br> (h-d)</th>
                        <th class="title-table" style="width: 80px;">Корневая система</th>
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
                  <td><?php echo get_the_title( $p->ID ); ?>
                  </td>
                  <td><?php the_field('diametr', $p->ID); ?></td>
                  <td><?php the_field('options', $p->ID); ?></td>
                  <td><?php the_field('root_system', $p->ID); ?></td>
                  <td class="price-column"><span><?php the_field('price', $p->ID); ?></span></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
            <?php endif; ?>
      </table>
    </div>
  </div>
<?php get_footer(); ?>

