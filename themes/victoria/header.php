<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php wp_title(' | ', true, 'right'); ?> <?php bloginfo('name'); ?></title>

        <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style1.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style2.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/font-awesome.min.css" />
        <!-- 
            Стили для модульного окна
        -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/remodal.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/remodal-default-theme.css">

        <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/unite-gallery.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/js/unitegallery.min.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/js/ug-theme-tiles.js"></script>
       <?php 
    //    wp_head();


       ?> 
</head>
<body>

<script>
function show(id)
{
    var div = document.getElementById(id)
    if(div.style.display == '') 
        div.style.display = 'none'
    else 
        div.style.display = ''
}
</script>

<div class="root-page-style">
    <header>
        <div class="header_top">

            <div class="header-top-logo"><img src="<?php echo get_template_directory_uri() ?>/img/logo.gif" alt="Фонд детского творчества Виктория"></div>
            
            <div class="header-top-text">
                <a class="zayavka-top-bottom" href="">Подать заявку на участие</a>
            </div>

            <div class="header-top-phone">
                +7 (843) 526-03-62
                <p>Наш номер телефона</p>
            </div>
            
            <div class="social">
                    <a href="http://vk.com/fdt.victoria" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>
                    <a href="http://www.fdt-victoria.com/system/template/images/social/ok.png" target="_blank"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a>
                    <a href="http://www.facebook.com/profile.php?id=100011344314385" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="http://youtube.com/channel/UCV_kufXjN45gtPu-dRF-Geg" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                    <a href="http://instagram.com/fdt_viktoria/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
        </div>
    </header>

    <nav>

	<?php
				wp_nav_menu( array(
                    'menu' => '', // название меню
                    'container' => 'ul', // контейнер для меню, по умолчанию 'div', в нашем случае ставим 'nav', пустая строка - нет контейнера
                    'container_class' => 'menu', // класс для контейнера
                    'container_id' => 0, // id для контейнера
                    'menu_class' => 0, // класс для меню
                    'menu_id' => '', // id для меню
                ) );
			?>
        <!-- иконка поиска -->
        <a id="searchb" href="#" onclick="show('methodsearchb')"><i class="fa fa-search" aria-hidden="true"></i></a>
        <!-- БЛОК ПОИСКА -->
        <div id="methodsearchb" style="display:none">
        <form role="search" method="get" action="<?php echo home_url( '/' ) ?>" class="kalendar-forms">
        <div class="search">
            <div>
            <input id="search-input" class="form-control input-lg" placeholder="Поиск по сайту" autocomplete="off" spellcheck="false" autocorrect="off" tabindex="1" name="s" id="s" value="<?php echo get_search_query() ?>">
            </div>
            <div>
            <input type="submit" id="searchsubmit" value="Поиск">
            </div>
        </div>
        </form>
        </div>
       
        <!-- <ul class="menu">
        <li><a href="/">Главная</a></li>
        <li>
            <a href="http://fdt-victoria2018.com/%d0%be-%d0%bd%d0%b0%d1%81/" class="arrow">О нас</a>
            <ul class="sub-menu">
            <li><a href="#">Keyboard Shortcuts</a></li>
            <li><a href="#">HTML/CSS</a></li>
            <li><a href="#">WordPress</a></li>
            <li><a href="#">JQuery</a></li>
            </ul>
        </li>
        <li>
            <a href="#"  class="arrow">Проекты</a>
            <ul class="sub-menu">
            <li><a href="#">Html Templates</a></li>
            <li><a href="#">Templates(psd)</a></li>
            <li><a href="#">UI Kits</a></li>
            <li><a href="#">Icons</a></li>
            </ul>
        </li>
        <li><a href="#">Контакты</a></li>
        <li><a href="#">Партнерам</a></li>
        </ul>
    </nav> -->
    </nav>
    <div class="nav-mobile">
        <ul class="menu">
        <li><a href="#modal1" class="open_modal"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
        <li>
            <div class="social-mobile">
            <a href="http://vk.com/fdt.victoria" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>
            <a href="http://www.fdt-victoria.com/system/template/images/social/ok.png" target="_blank"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a>
            <a href="http://www.facebook.com/profile.php?id=100011344314385" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="http://youtube.com/channel/UCV_kufXjN45gtPu-dRF-Geg" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
            <a href="http://instagram.com/fdt_viktoria/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
        </li>
        </ul>


    </div>

</div>