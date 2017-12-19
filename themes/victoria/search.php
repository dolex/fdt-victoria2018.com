<?php

if($_GET['s'] == NULL){
echo 'задан пустой запрос';
exit;
}

?>
<?php get_header(); ?>

<!-- <p align="center"><img src="p echo get_template_directory_uri() ?>/img.png" alt=""></p> -->
                <!-- <span class="the-category">Главная > the_category(' > ', 'multiple'); ?></span> -->

<?php 
// проверка на существование фонвого изображение (если есть) выводит фон, если нет- тогда пусто. 
if(get_background_image()){
// вывод фоновое изображение к записи (само изображение добавляется в поле кастом бэкграунд)
	echo '<div class="banner-top" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('.get_background_image().')">
		<div class="banner-top-text">';
		the_title();
		echo '</div>
	</div>';
}else{
echo '';
}
?>

<div class="content">
	<div class="wrap">
		<div class="block-top-text-victory">
        Результаты поиска по запросу: <span style="font-weight: bold"><?php echo $_GET['s']; ?></span>
			<div class="block-p-t">
    <?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>
        
            <div <?php post_class(); ?>>
			<?php edit_post_link('<div class="edit-post"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></div>'); ?><div class="search-post">
                <h1 class="single-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

			<!-- <div class="block-single-ratings-share">
				<div class="the-ratings">
					<div>Оцените статью:</div>
					<div>< ?php if(function_exists('the_ratings')) { the_ratings(); } ?></div>
				</div> -->
        
                
                <div class="posts-single">
                    <?php the_excerpt(); ?>
                </div>
</div>


                <?php } /* конец while */ ?>
                </div>
<?php
} // конец if
else 
    echo "<h2>Ничего не найдено</h2>";
?>

            </div>
</div>



<?php get_footer(); ?>