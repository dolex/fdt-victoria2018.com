<?php get_header(); ?>

<!-- <p align="center"><img src="p echo get_template_directory_uri() ?>/img.png" alt=""></p> -->


<div class="content">
    <div class="wrap">
        <div class="block-top-text-victory">
            <div class="block-p-t">
			

 <h1 class="single-title">
  <?php 
  // Выводим название рубрики WordPress без ссылки
        $cat = get_the_category(); 
        echo $cat[0]->cat_name; 
    ?>
</h1>
            <?php while(have_posts()) : the_post(); ?>

            <div id="festivals-list" class="festivals-list form form-style1">
                                <div class="bx_pagination_bottom"></div>
                                     <div class="divider gray"></div>
                                        <div class="festivals-list__item col-group" id="bx_3218110189_145">
                            <div class="hide-mobile col-1">             
                            </div>

                            <div class="col-mb-12 col-4">
                                <div class="heading">
                                    <a title="<?php the_title();  ?>" href="<?php the_permalink() ?>" class="image overlay overlay-color-black-light image-zoom">
                                         <img src="<?php 
                                    // тут выводим миниатюру записи (прикрепленную картинку)
                                          echo the_post_thumbnail( $size, $attr); ?>" alt="II Всероссийский  фестиваль-конкурс детского и юношеского творчества «Виктория»">
                                    </a>
                                    <div class="date">
                                        <?php
                                    // тут выводим значение проивзольных полей, которые мы заранее создали в теме
                                        echo get_post_meta($post->ID, 'time', true);
                                        ?>
                                    </div>

                                    <a style="background-color:#00ad2b" href="#"  class="project">
                                    <?php
                                    // тут выводим значение проивзольных полей, которые мы заранее создали в теме
                                        echo get_post_meta($post->ID, 'city', true);
                                        ?>    
                                </a>
                                        <div class="name">
                                        <?php
                                        // тут вывод короткую запись (обзац) статьи/страницы
                                        echo get_post_meta($post->ID, 'img_title', true);
                                        ?>
                                            </div>
                                            img_title              </div>
                            </div>
                            <div class="hide-mobile col-7">
                                <div class="information">
                                    <a class="place" href="<?php 
                                    // тут выводим ссылку на записи (или страницы)
                                    the_permalink() ?>" title="">
                                    <?php 
                                    // тут значения заголовка записи (или страницы)
                                    the_title(); ?></a>
                                    <div class="preview"><div>
                        <?php
                        // тут вывод короткую запись (обзац) статьи/страницы
                        the_excerpt();
                        ?>
                        </div>
                        <br></div>
                                </div>
                            </div>
                        </div>
             
            <?php endwhile; ?>





            </div>
</div>





<?php get_footer(); ?>
