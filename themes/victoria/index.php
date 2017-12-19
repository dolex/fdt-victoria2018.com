<?php get_header(); ?>

<div class="banner-top">
<div class="banner-top-text">
        Приглашаем вас и ваших детей на  
        VIII  Всероссийский фестиваль-конкурс "Виктория" в г.Нижний Новгород,который  состоится 10 декабря 2017 г.
</div>
</div>



<div class="content">
    <div class="wrap">
<h1>Фонд детского творчества Виктория</h1>
 <div id="comp_e3755eb86c6239dbc7b75ce2b9ba12ee">    <div class="reviews-list">
                    <div class="reviews-list__item" id="bx_3218110189_6968">
                <!-- <div class="date">16 Октября 2017</div> -->
                <div class="text expandable-text">
            <div class="block-top-text">
    <p>Заявки принимаются на электронный адрес : fdt_viktoria@mail.ru</p>
    <p>Образец заявки : Obrazets_zayavki.doc</p>        
    <p>Квитанция для оплаты оргвзноса:Kvitancia.doc</p>        
    <p>Заявки принимаются до 06.12.2017г! </p>           
        </div>

     <div class="block-top-text1">     
     <p class="block-top-text-bold">К участию в фестивале-конкурсе допускаются:</p>
                    
      <p>- самодеятельные коллективы, ансамбли, солисты;</p>
                    
    <p>- ансамбли, солисты детских школ искусств, детских музыкальных школ;</p>
                    
    <p>- ансамбли, солисты средних общеобразовательных школ и иных учебных заведений;</p>
                    
    <p>- ансамбли, солисты культурно - досуговых учреждений.</p>
           
    <p class="block-top-text-adress">
        <span>Место проведения конкурса: ГБУДО "Центр эстетического воспитания", ул.Алексеевская 3</span></p>
                    
       <h2>ПРИГЛАШЕНИЕ НА ФЕСТИВАЛИ ДЕТСКОГО ТВОРЧЕСТВА!</h2>  

        
    <div class="block-top-text-border">
       Фестивали в Казани ежегодно собирают множество талантливых коллективов и солистов. Год из года приезжают творческие дети и взрослые в этот город, чтобы себя показать и на других посмотреть, а также познакомиться с достопримечательностями Казани.
    </div>

        </div>

<div class="block-top-text-victory">        

<h2>Фонд поддержки детского творчества «Виктория» успешно занимается организацией и проведением Международных Фестивалей Детского творчества в красивейших городах России более 8 лет.</h2>
                    
<p>Целью фонда  «Виктория » является обмен опытом и художественными достижениями творческих коллективов стран мира, создание атмосферы незабываемого праздника, расширение кругозора и интеллектуального уровня детей и молодежи разных стран. Участие на конкурсах проводимых Фондом ПДТ «Виктория» даёт для детей мощнейший толчок в творческом развитии: с одной стороны это ценнейший творческий опыт, с другой стороны масса впечатлений от интереснейшего путешествия.</p>
                    
<p>Фестиваль-конкурсы организованы на самом высоком уровне: чёткая структура, компетентное жюри и атмосфера праздника.</p>
                    
<p>Мы ждём Ваших заявок по электронной почте. В ответ на Ваш запрос мы вышлем Положение о заинтересовавшем  Вас фестивале и подробную программу поездки.</p>
                    
<p>Заявки принимаются: e-mail: fdt_viktoria@mail.ru [ Obrazets_zayavki.doc ]</p>
                    
</div></div></div></div></div></div></div>

<div class="kalendar-top">
        <div class="kalendar-top-text">
               Календарь
               <p class="kalendar-top-text-p">международных детских фестивалей-конкурсов</p>
                <form role="search" method="get" action="<?php echo home_url( '/' ) ?>" class="kalendar-forms">
                <p class="input-p"><input type="text" value=""></p>
                <p class="clear"><label for="">Страна</label></p>
                <p><input type="text" value=""></p>
                <p class="clear"><label for="">Проект</label></p>
                <p><input type="text" name="s" id="s" value="<?php echo get_search_query() ?>"></p>
                <input type="submit" id="searchsubmit" value="НАЙТИ ФЕСТИВАЛЬ">
                </form>
        </div>
</div> 

<div class="content">
<div class="wrap">
<h1>Фестивали, проводимые Фондом ПДТ «Виктория» в 2017 -2018 гг:</h1>
<div id="comp_e3755eb86c6239dbc7b75ce2b9ba12ee">    <div class="reviews-list">
                <div class="reviews-list__item" id="bx_3218110189_6968">
            <!-- <div class="date">16 Октября 2017</div> -->
            <div class="block-top-text-victory">   

                    <h2>Будем рады видеть Вас на наших фестивалях!</h2>
       
   <div class="warning">ВНИМАНИЕ! У нас появилась новая номинация "Заочное участие"! Теперь, имея Большое желание участвовать на наших международных фестивалях-конкурсах и получать Дипломы Дипломатов и Лауреатов, но не имея такой возможности по какой-либо причине, можете сделать это не выходя из дома! Ознакамливайтесь с положениями "Заочное участие"!</div>
            </div>

        
     </div>
<div class="name">
<p class="block-top-text-adress">Рябоконь Юлия - VII Суперфинал проекта "Салют Талантов"</p></div>

            </div>
            <h1>Ближайшие мероприятия</h1>

            <?php
$id=3; // ID заданной рубрики
$n=4;   // количество выводимых записей
$recent = new WP_Query("cat=$id&showposts=$n");
while($recent->have_posts()) : $recent->the_post();
?>


<div id="festivals-list" class="festivals-list form form-style1">
                    <div class="bx_pagination_bottom">
             
            </div>
                         <div class="divider gray"></div>
                            <div class="festivals-list__item col-group" id="bx_3218110189_145">
                <div class="hide-mobile col-1">
                    
                </div>
                
                <div class="col-mb-12 col-4">
                    <div class="heading">
                        <a title="II Всероссийский  фестиваль-конкурс детского и юношеского творчества «Виктория» (г.Пермь)" href="<?php the_permalink() ?>" class="image overlay overlay-color-black-light image-zoom">
                             <img src="<?php echo the_post_thumbnail( $size, $attr); ?>" alt="II Всероссийский  фестиваль-конкурс детского и юношеского творчества «Виктория»">
                        </a>
                        <div class="date">18-19 ноября 2017 г</div>
                        <a style="background-color:#00ad2b" href="" title="г.Пермь" class="project">
                        г.Пермь</a>
                            <div class="name">
                            <?php
                            the_excerpt();
                            ?>
                                </div>
                            </div>
                </div>
                <div class="hide-mobile col-7">
                    <div class="information">
                        <a class="place" href="<?php the_permalink() ?>" title="">
                        <?php the_title(); ?></a>
                        <div class="preview"><div>
            <?php
            the_excerpt();
            ?>
            </div>
            <br></div>
                    </div>
                </div>
            </div>
 
<?php endwhile; ?>


            <div id="festivals-list" class="festivals-list form form-style1">
                    <div class="bx_pagination_bottom">
             
            </div>
                         <div class="divider gray"></div>
                            <div class="festivals-list__item col-group" id="bx_3218110189_145">
                <div class="hide-mobile col-1">
                    
                </div>
                
                <div class="col-mb-12 col-4">
                    <div class="heading">
                        <a title="II Всероссийский  фестиваль-конкурс детского и юношеского творчества «Виктория» (г.Пермь)" href="" class="image overlay overlay-color-black-light image-zoom">
                             <img src="http://saluttalantov.ru//upload/iblock/411/41193375c05a30c06dd086d4e6ea4617.jpg" alt="II Всероссийский  фестиваль-конкурс детского и юношеского творчества «Виктория»">
                        </a>
                        <div class="date">18-19 ноября 2017 г</div>
                                                    <a style="background-color:#00ad2b" href="" title="г.Пермь" class="project">
                                                        г.Пермь                         </a>
                                                <div class="name">II Всероссийский фестиваль-конкурс детского и юношеского творчества «Виктория»</div>
                    </div>
                </div>
                <div class="hide-mobile col-7">
                    <div class="information">
                        <a class="place" href="" title="">
                            Россия, г.Пермь                        </a>
                        <div class="preview"><div>
            Главная причина, по которой каждый ребенок, и каждый взрослый, у которого в душе живет ребенок, должен посетить Великий Устюг - это, конечно, знакомство с Дедом Морозом и поход к нему в гости на его Вотчину. Великий Устюг поражает многочисленными старинными белокаменными храмами и живописным ансамблем набережной реки Сухона.&nbsp;<b>Дед мороз придёт поздравить детей прямо на фестиваль!</b>
            </div>
            <br></div>
                    </div>
                </div>
            </div>
                           
                        <div class="divider gray"></div>
                    <div class="festivals-list__item col-group" id="bx_3218110189_2117">
                <div class="hide-mobile col-1">
            
                </div>
                <div class="col-mb-12 col-4">
                    <div class="heading">
                        <a title="VIII Всероссийский фестиваль-конкурс детского и юношеского творчества «ВИКТОРИЯ» г. Нижний Новгород 8-11 декабря 2017 г" href="" class="image overlay overlay-color-black-light image-zoom">
                             <img src="http://saluttalantov.ru//upload/iblock/d95/d95cb98a9880499dee4e7ebddfe90c35.jpeg" alt="VIII  Всероссийский  фестиваль-конкурс детского и юношеского творчества «ВИКТОРИЯ» г. Нижний Новгород 8-11 декабря 2017 г">
                        </a>
                        <div class="date">8-11 декабря 2017 г</div>
                         <a style="background-color:#00ad2b" href="" title="«Салют талантов»" class="project">г. Нижний Новгород</a>
                        <div class="name">VIII Всероссийский фестиваль-конкурс детского и юношеского творчества «ВИКТОРИЯ»</div>
                    </div>
                </div>
                <div class="hide-mobile col-7">
                    <div class="information">
                        <a class="place" href="" title="VIII  Всероссийский  фестиваль-конкурс детского и юношеского творчества «ВИКТОРИЯ» г. Нижний Новгород 8-11 декабря 2017 г">
                            Россия, г. Нижний Новгород</a>
                        <div class="preview"><div>
            Санкт-Петербург - один из красивейших городов мира и настоящий музей под открытым небом! Миллионы туристов съезжаются сюда со всех концов света, чтобы своими глазами увидеть знаменитые памятники искусства и архитектуры, пройтись по улицам великого города, прочувствовать его атмосферу и прикоснуться к его истории.&nbsp;
            </div>
            <br></div>
                    </div>
                </div>
            </div>
                           
                        <div class="divider gray"></div>
                    <div class="festivals-list__item col-group" id="bx_3218110189_2114">
                <div class="hide-mobile col-1">
                   
                </div>
                <div class="col-mb-12 col-4">
                    <div class="heading">
                        <a title="VIII Международный фестиваль-конкурс детского и юношеского творчества «РОЖДЕСТВЕНСКАЯ СКАЗКА»" href="" class="image overlay overlay-color-black-light image-zoom">
                             <img src="http://saluttalantov.ru//upload/iblock/e76/e76fc5e3d84201f4f649fe847ef839d1.jpg" alt="VIII Международный фестиваль-конкурс детского и юношеского творчества «РОЖДЕСТВЕНСКАЯ СКАЗКА»">
                        </a>
                        <div class="date">10-11 февраля 2018 г</div>
                                                    <a style="background-color:#00ad2b" href="" title="" class="project">
                                                            г.Нижнекамск                             </a>
                                                <div class="name">
                                                    I Международный фестиваль-конкурс детского и юношеского творчества "Жемчужины Татарстана"
                                                </div>
                    </div>
                </div>
                <div class="hide-mobile col-7">
                    <div class="information">
                        <a class="place" href="" title="VIII Международный фестиваль-конкурс детского и юношеского творчества «РОЖДЕСТВЕНСКАЯ СКАЗКА»">
                            Россия, г.Нижнекамск
                        </a>
                        <div class="preview"><div>
            Казань стоит на перекрестке двух культур, мусульманской и христианской, и как нигде в мире они дружественно соседствуют друг с другом, подчеркивая единство народов нашей страны. Недавно в Казани прошел ряд знаковых событий - тысячелетие города, всемирная Универсиада, Чемпионат мира по водным видам спорта, благодаря которым город буквально родился заново!&nbsp;<b>Очень интересный город и всегда очень масштабный фестиваль!&nbsp;</b>
            </div>
            <br></div>
                    </div>
                </div>
            </div>
                            
                        <div class="divider gray"></div>
                    <div class="festivals-list__item col-group" id="bx_3218110189_2113">
                <div class="hide-mobile col-1">
                   
                </div>
                <div class="col-mb-12 col-4">
                    <div class="heading">
                        <a title="XI Международный Фестиваль-Конкурс Детского и Юношеского Творчества «ОЧАРОВАНИЕ БОГЕМИИ» (Прага, Чехия)" href="" class="image overlay overlay-color-black-light image-zoom">
                            <img src="http://saluttalantov.ru/upload/iblock/e6b/e6ba9a1184f5c38f5e47219119140cc0.jpg" alt="XI Международный Фестиваль-Конкурс Детского и Юношеского Творчества «ОЧАРОВАНИЕ БОГЕМИИ» (Прага, Чехия)">
                        </a>
                        <div class="date">17-19 марта 2018 г</div>
                                                    <a style="background-color:#00ad2b" href="" title="«Салют талантов»" class="project">
                                                        г. Самара                            </a>
                                                <div class="name">
                               I Международный  фестиваль-конкурс детского и юношеского творчества «Виктория»
                                                    </div>
                    </div>
                </div>
                <div class="hide-mobile col-7">
                    <div class="information">
                        <a class="place" href="" title="XI Международный Фестиваль-Конкурс Детского и Юношеского Творчества «ОЧАРОВАНИЕ БОГЕМИИ» (Прага, Чехия)">
                            Россия, г.Самара                        </a>
                        <div class="preview"><div>
            Прага – один из самых красивых и романтичных городов Европы, прекрасна в любое время года и в любую погоду! Вся столица Чехии внесена в Список всемирного наследия ЮНЕСКО за обилие достопримечательностей. Тысячелетняя история, восхитительные памятники архитектуры, удивительно красивые панорамы, добродушие местных жителей создают неповторимое очарование Праги.&nbsp;<b>В Праге зимой потрясающая атмосфера! Здесь проходят десятки фестивалей! Вливайтесь!</b>
            </div>
            <br></div>
                    </div>
                </div>
            </div>
                        <div class="divider gray"></div>
                    <div class="festivals-list__item col-group" id="bx_3218110189_131">
                <div class="hide-mobile col-1">
                   
                </div>
                <div class="col-mb-12 col-4">
                    <div class="heading">
                        <a title="" href="" class="image overlay overlay-color-black-light image-zoom">
                             <img src="http://saluttalantov.ru//upload/iblock/067/067dd695abd877439a99c571f6cc35f2.jpg" alt="">
                        </a>
                        <div class="date">6-9 апреля 2018 г</div>
                                                    <a style="background-color:#00ad2b" href="" title="«Салют талантов»" class="project">
                                                            г. Екатеринбург                            </a>
                                                <div class="name">
                                                        II Международный фестиваль-конкурс детского и юношеского творчества «Виктория»</div>
                    </div>
                </div>
                <div class="hide-mobile col-7">
                    <div class="information">
                        <a class="place" href="" title="">
                            Россия, г.Екатеринбург                        </a>
                        <div class="preview"><div>
            Главная причина, по которой каждый ребенок, и каждый взрослый, у которого в душе живет ребенок, должен посетить Великий Устюг - это, конечно, знакомство с Дедом Морозом и поход к нему в гости на его Вотчину. Великий Устюг поражает многочисленными старинными белокаменными храмами и живописным ансамблем набережной реки Сухона.&nbsp;<b>Дед мороз придёт поздравить детей прямо на фестиваль!</b>
            </div>
            <br></div>
                    </div>
                </div>
            </div>
                           
                        <div class="divider gray"></div>
                    <div class="festivals-list__item col-group" id="bx_3218110189_2118">
                <div class="hide-mobile col-1">
                   
                </div>
                <div class="col-mb-12 col-4">
                    <div class="heading">
                        <a title="" href="" class="image overlay overlay-color-black-light image-zoom">
                             <img src="http://saluttalantov.ru//upload/iblock/be5/be54f67631182099d0213ccafb7bb1b6.jpg" alt="">
                        </a>
                        <div class="date">04.01.2018</div>
                                                    <a style="background-color:#00ad2b" href="" title="«Салют талантов»" class="project">
                                г.Казань                            </a>
                                                <div class="name">
                                                        IX Международный конкурс-фестиваль детского и юношеского творчества  «ВИКТОРИЯ».</div>
                    </div>
                </div>
                <div class="hide-mobile col-7">
                    <div class="information">
                        <a class="place" href="" title="">
                            Россия, г.Казань                        </a>
                        <div class="preview"><div>
            Брест – древний город на границе Белорусии и Польши. Визитной карточкой города является легендарная Брестская крепость - место, где началась Великая Отечественная Война, посещение крепости оставляет неизгладимое впечатление на любого человека. В непосредственной близости от Бреста находится знаменитый заповедник Беловежская Пуща, с резиденцией Деда Мороза, посещение которой включено в программу фестивального тура.&nbsp;<b>Добро пожаловать в Беловежскую Пущу в гости к Деду Морозу!</b>
            </div>
            <br></div>
                    </div>
                </div>
            </div>
                           
                       
                
            </div>


           
             </div>
 
             <h1>Фотогалерея</h1>
             <div class="block-top-text-victory">        
             Фотографии с III Международного конкурса-фестиваля исполнителей инструментальной музыки и классического пения «Содружество талантов» г. Казань.
</div>
             <div id="gallery" style="display:none;">
               
               
                       <a href="#">
                       <img alt="ПРОЕКТ ДОМА 1"
                            src="https://pp.vk.me/c837220/v837220691/fa3e/-_U1qnGbV4E.jpg"
                            data-image="https://pp.vk.me/c837220/v837220691/fa3e/-_U1qnGbV4E.jpg"
                            data-description="ПРОЕКТ ДОМА 1"
                            style="display:none">
                       </a>
               
                       <a href="#">
                       <img alt="ПРОЕКТ ДОМА 1"
                            src="https://pp.vk.me/c837220/v837220691/fa46/XcGhXRLhw1c.jpg"
                            data-image="https://pp.vk.me/c837220/v837220691/fa46/XcGhXRLhw1c.jpg"
                            data-description="ПРОЕКТ ДОМА 1"
                            style="display:none">
                       </a>
               
                       <a href="#">
                       <img alt="ПРОЕКТ ДОМА 1"
                            src="https://pp.vk.me/c837220/v837220691/fa4e/QdZth9_iZeQ.jpg"
                            data-image="https://pp.vk.me/c837220/v837220691/fa4e/QdZth9_iZeQ.jpg"
                            data-description="ПРОЕКТ ДОМА 1"
                            style="display:none">
                       </a>
               
                       <a href="#">
                       <img alt="ПРОЕКТ ДОМА 1"
                            src="https://pp.vk.me/c837220/v837220691/fa56/qXovgHVlxCA.jpg"
                            data-image="https://pp.vk.me/c837220/v837220691/fa56/qXovgHVlxCA.jpg"
                            data-description="ПРОЕКТ ДОМА 1"
                            style="display:none">
                       </a>
               
                       <a href="#">
                       <img alt="ПРОЕКТ ДОМА 1"
                            src="https://pp.vk.me/c837220/v837220691/fa5e/QOr6VWHUrSU.jpg"
                            data-image="https://pp.vk.me/c837220/v837220691/fa5e/QOr6VWHUrSU.jpg"
                            data-description="ПРОЕКТ ДОМА 1"
                            style="display:none">
                       </a>
               
                       <a href="#">
                       <img alt="ПРОЕКТ ДОМА 1"
                            src="https://pp.vk.me/c837220/v837220691/fa67/u4A46pFlKbU.jpg"
                            data-image="https://pp.vk.me/c837220/v837220691/fa67/u4A46pFlKbU.jpg"
                            data-description="ПРОЕКТ ДОМА 1"
                            style="display:none">
                       </a>
               
                       
               
                       <a href="#">
                       <img alt="ПРОЕКТ ДОМА 1"
                            src="https://pp.vk.me/c837220/v837220691/fa86/j1eADXSowco.jpg"
                            data-image="https://pp.vk.me/c837220/v837220691/fa86/j1eADXSowco.jpg"
                            data-description="ПРОЕКТ ДОМА 1"
                            style="display:none">
                       </a>
                       
                           <a href="#">
                       <img alt="ПРОЕКТ ДОМА 1"
                            src="https://pp.vk.me/c837220/v837220691/fa7e/Xpyz3lt5e2A.jpg"
                            data-image="https://pp.vk.me/c837220/v837220691/fa7e/Xpyz3lt5e2A.jpg"
                            data-description="ПРОЕКТ ДОМА 1"
                            style="display:none">
                       </a>
               
                               <a href="#">
                       <img alt="Схема дома"
                            src="https://pp.vk.me/c837220/v837220691/fa6f/qC5Ql3Omx_k.jpg"
                            data-image="https://pp.vk.me/c837220/v837220691/fa6f/qC5Ql3Omx_k.jpg"
                            data-description="Схема дома"
                            style="display:none">
                       </a>
                                    <a href="#">
                       <img alt="Схема дома"
                            src="https://pp.vk.me/c837220/v837220691/fa77/ibYkchFYSoQ.jpg"
                            data-image="https://pp.vk.me/c837220/v837220691/fa77/ibYkchFYSoQ.jpg"
                            data-description="Схема дома"
                            style="display:none">
                       </a>
                     
                            
                   </div>
                   
            

</div>
</div>

            
            </div>

<?php get_footer(); ?>