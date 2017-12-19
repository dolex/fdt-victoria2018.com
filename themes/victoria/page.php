<?php get_header(); ?>

<!-- <p align="center"><img src="p echo get_template_directory_uri() ?>/img.png" alt=""></p> -->

<?php 
if(get_background_image()){
	echo get_background_image();
}else{
echo 'пусто';
}
?>

<div class="content">
    <div class="wrap">
        <div class="block-top-text-victory">
            <div class="block-p-t">
			
            <?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>
        
            <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<?php edit_post_link('<div class="edit-post"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></div>'); ?>
                <h1 class="single-title"><?php the_title(); ?></h1>

		
                <!-- <span class="the-category">Главная > the_category(' > ', 'multiple'); ?></span> -->
                
                <div class="posts-single">
                    <?php the_content(); ?>
                </div>
        </div>
    </div>
<!-- </div> -->

<?php
                // необязательно, но в некоторых случаях без этого не обойтись
global $post;
 
// тут можно указать post_tag (подборка постов по схожим меткам) или даже массив array('category', 'post_tag') - подборка и по меткам и по категориям
$related_tax = 'category';
 
// получаем ID всех элементов (категорий, меток или таксономий), к которым принадлежит текущий пост
$cats_tags_or_taxes = wp_get_object_terms( $post->ID, $related_tax, array( 'fields' => 'ids' ) );
 
// массив параметров для WP_Query
$args = array(
	'posts_per_page' => 4, // сколько похожих постов нужно вывести,
	'tax_query' => array(
		array(
			'taxonomy' => $related_tax,
			'field' => 'id',
			'include_children' => false, // нужно ли включать посты дочерних рубрик
			'terms' => $cats_tags_or_taxes,
			'operator' => 'IN' // если пост принадлежит хотя бы одной рубрике текущего поста, он будет отображаться в похожих записях, укажите значение AND и тогда похожие посты будут только те, которые принадлежат каждой рубрике текущего поста
		)
	)
);
$misha_query = new WP_Query( $args );
 
// если посты, удовлетворяющие нашим условиям, найдены
if( $misha_query->have_posts() ) :
 
	// выводим заголовок блока похожих постов
	echo '<div class="rel-post">Читайте также:</div>';
 	echo '<div class="rel-post-style">';
	// запускаем цикл
	while( $misha_query->have_posts() ) : $misha_query->the_post();
		// в данном случае посты выводятся просто в виде ссылок
		echo '<p># <a href="' . get_permalink( $misha_query->post->ID ) . '">' . $misha_query->post->post_title . '</a></p>';
	endwhile;
endif;
  	echo '</div>';
// не забудьте про эту функцию, её отсутствие может повлиять на другие циклы на странице
wp_reset_postdata();

?>


                <?php } /* конец while */ ?>
                </div>



				
<?php
} // конец if
else 
    echo "<h2>Записей нет.</h2>";
?>

            </div>
</div>





<?php get_footer(); ?>
