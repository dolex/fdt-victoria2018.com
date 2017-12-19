<script type="text/javascript">
               
                       jQuery(document).ready(function(){
               
                           jQuery("#gallery").unitegallery();
               
                       });
                       
                   </script>
                   

    <script async type="text/javascript">
    $(document).ready(function() { // запускаем скрипт после загрузки всех элементов
        /* засунем сразу все элементы в переменные, чтобы скрипту не приходилось их каждый раз искать при кликах */
        var overlay = $('#overlay'); // подложка, должна быть одна на странице
        var open_modal = $('.open_modal'); // все ссылки, которые будут открывать окна
        var close = $('.modal_close, #overlay'); // все, что закрывает модальное окно, т.е. крестик и оверлэй-подложка
        var modal = $('.modal_div'); // все скрытые модальные окна
    
         open_modal.click( function(event){ // ловим клик по ссылке с классом open_modal
             event.preventDefault(); // вырубаем стандартное поведение
             var div = $(this).attr('href'); // возьмем строку с селектором у кликнутой ссылки
             overlay.fadeIn(400, //показываем оверлэй
                 function(){ // после окончания показывания оверлэя
                     $(div) // берем строку с селектором и делаем из нее jquery объект
                         .css('display', 'block') 
                         .animate({opacity: 1, top: '0'}, 200); // плавно показываем
             });
         });
    
         close.click( function(){ // ловим клик по крестику или оверлэю
                modal // все модальные окна
                 .animate({opacity: 0, top: '45%'}, 200, // плавно прячем
                     function(){ // после этого
                         $(this).css('display', 'none');
                         overlay.fadeOut(400); // прячем подложку
                     }
                 );
         });
    });
    </script>
    
    
    <div id="modal1" class="modal_div">
    <span class="modal_close"><i class="fa fa-times" aria-hidden="true"></i></span>
        
    <?php
				wp_nav_menu( array(
                    'menu' => '', // название меню
                    'container' => 'ul', // контейнер для меню, по умолчанию 'div', в нашем случае ставим 'nav', пустая строка - нет контейнера
                    'container_class' => '', // класс для контейнера
                    'container_id' => 0, // id для контейнера
                    'menu_class' => 'menu-mobile', // класс для меню
                    'menu_id' => ' ', // id для меню
                ) );
			?>
    
    </div>
    
    <div id="overlay"></div>


<div class="footer">
<div>
    <ul class="f-menu">
        <li><a href="/">Главная</a></li>
        <li><a href="/about">О нас</a></li>
        <li><a href="/future">Проекты</a></li>
        <li><a href="/contacts">Контакты</a></li>
    </ul>
</div>
<div>
        Copyright © 2009 - <?php echo date('Y') ?> | <?php bloginfo('name'); ?>
</div>
</div>


<script src="<?php echo get_template_directory_uri() ?>/js/remodal.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/script.js"></script>

</body>
</html>