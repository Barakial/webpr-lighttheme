<?php
/**

** Contacts developer

* @developer Barakial
* @skype vega1eugene
* @site Barakial.com
*/
?>
<!DOCTYPE html>
<html <?php /*language_attributes(); */?>>
<head>
    <meta charset="<?php /*bloginfo( 'charset' ); */?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webpr | Demo site wp-theme</title>

    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/plugin/jquery-2.1.1.min.js"></script>

</head>
<body>
<header class="level-two-header">

    <div class="top-header-content">
        <div class="container">
            <div class="row">

                <div class="top-header-logo">
                    <a href="/">
                        <img src="img/logo-header-lighttheme.png" alt="" title="">
                    </a>
                </div>

                <div class="top-header-info">
                    <div class="col-md-6">
                        <div class="top-header-desc-site">
                            <p>
                                Lorem ipsum dolor sit amet,<br>
                                consectetur adipisicing elit
                            </p>
                        </div>
                    </div>

                    <div class="top-header-content-right">
                        <div class="top-header-content-phones">
                            <div class="top-header-icon-phone">
                                <i class="icon-phones"></i>
                            </div>
                            <button type="button" class="arrow-open-phone" id="open_phone_header">
                                <i class="material-icons">keyboard_arrow_down</i>
                            </button>
                            <ul class="top-header-phones">
                                <li>
                                    <a href="tell:(097) 822-33-44">(097) 822-33-44</a>
                                </li>
                                <li>
                                    <a href="tell:(097) 822-33-44">(097) 822-33-44</a>
                                </li>
                                <li>
                                    <a href="tell:(097) 822-33-44">(097) 822-33-44</a>
                                </li>
                                <li>
                                    <a href="tell:(097) 822-33-44">(097) 822-33-44</a>
                                </li>
                            </ul>
                        </div>

                        <div class="top-header-callback-search">
                            <button type="button" data-toggle="modal" data-target="#modal_callback">Обратный звонок</button>
                        </div>

                        <div class="top-header-search">
                           <form action="/" method="post">
                               <i class="icon-search"></i>
                               <input type="text" placeholder="Поиск" >
                           </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom-header-content">
        <div class="container">
            <ul class="bottom-header-nav">
                <li>
                    <a href="#">О нас</a>
                </li>
                <li>
                    <a href="#">Услуги</a>
                    <ul class="sub-menu">
                        <li>
                            <i class="material-icons">play_arrow</i>
                            <a href="#">Услуги по разработке дизайна</a>
                        </li>
                        <li>
                            <i class="material-icons">play_arrow</i>
                            <a href="#">Услуги Программирование</a>
                        </li>
                        <li>
                            <i class="material-icons">play_arrow</i>
                            <a href="#">Разработка SEO текста</a>
                        </li>
                        <li>
                            <i class="material-icons">play_arrow</i>
                            <a href="#">SEO Настройка</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Продукция</a>
                    <ul class="sub-menu">
                        <li>
                            <i class="material-icons">play_arrow</i>
                            <a href="#">Продукция 1</a>
                        </li>
                        <li>
                            <i class="material-icons">play_arrow</i>
                            <a href="#">Продукция 1</a>
                        </li>
                        <li>
                            <i class="material-icons">play_arrow</i>
                            <a href="#">Продукция 1</a>
                        </li>
                        <li>
                            <i class="material-icons">play_arrow</i>
                            <a href="#">Продукция 1</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Новости</a>
                </li>
                <li>
                    <a href="#">Отзывы</a>
                </li>
                <li>
                    <a href="#">Контакты</a>
                </li>
            </ul>
        </div>
    </div>
</header>

<div class="banner owl-carousel">
    <div class="block-banner-elem">
        <div class="container">
            <h4 class="title-banner">
                Lorem ipsum dolor sit amet,
                consectetur adipisicing
            </h4>
            <p class="desc-banner">
                Morbi tempus porta nunc pharetra quisque ligula imperdiet posuere vitae felis proin sagittis leo ac tellus blandit sollicitudin quisque vitae placerat.
            </p>
            <div class="group-button-banner">
                <a href="#" class="left-button-banner">Подробнее</a>
                <a href="#" class="right-button-banner" data-toggle="modal" data-target="#modal_callback">Оставить заявку</a>
            </div>
        </div>
    </div>
    <div class="block-banner-elem">
        <div class="container">
            <h4 class="title-banner">
                Тест второго слайера на работу и 2 строки
            </h4>
            <p class="desc-banner">
                Morbi tempus porta nunc pharetra quisque ligula imperdiet posuere vitae felis proin sagittis leo ac tellus blandit sollicitudin quisque vitae placerat.
            </p>
            <div class="group-button-banner">
                <a href="#" class="left-button-banner">Подробнее</a>
                <a href="#" class="right-button-banner">Оставить заявку</a>
            </div>
        </div>
    </div>
</div>

<div class="section service">
    <div class="container">
        <div class="section-title-area">
            <h5 class="section-subtitle">что мы делаем</h5>
            <h6 class="section-title">Услуги</h6>
        </div>
        <div class="section-content">
            <a href="#" title="">
                <div class="col-md-3 hover-service">
                    <div class="thumb-service">
                        <img src="img/service_sm_1.jpg" alt="" title="">
                    </div>
                    <div class="shadow-bottom-service">
                        <div class="title-service">
                            <span>Наименование услуги 1</span>
                        </div>
                        <div class="content-service">
                            <p>
                                Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit, sed do
                                eiusmod tempor incididunt
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" title="">
                <div class="col-md-3 hover-service">
                    <div class="thumb-service">
                        <img src="img/service_sm_2.jpg" alt="" title="">
                    </div>
                    <div class="shadow-bottom-service">
                        <div class="title-service">
                            <span>Наименование услуги 1</span>
                        </div>
                        <div class="content-service">
                            <p>
                                Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit, sed do
                                eiusmod tempor incididunt
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" title="">
                <div class="col-md-3 hover-service">
                    <div class="thumb-service">
                        <img src="img/service_sm_3.jpg" alt="" title="">
                    </div>
                    <div class="shadow-bottom-service">
                        <div class="title-service">
                            <span>Наименование услуги 1</span>
                        </div>
                        <div class="content-service">
                            <p>
                                Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit, sed do
                                eiusmod tempor incididunt
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" title="">
                <div class="col-md-3 hover-service">
                    <div class="thumb-service">
                        <img src="img/service_sm_4.jpg" alt="" title="">
                    </div>
                    <div class="shadow-bottom-service">
                        <div class="title-service">
                            <span>Наименование услуги 1</span>
                        </div>
                        <div class="content-service">
                            <p>
                                Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit, sed do
                                eiusmod tempor incididunt
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <div class="more-services">
                <a href="" class="button-more-service" id="service-nav">
                    Больше услуг
                    <i class="material-icons">chevron_right</i>
                    <i class="material-icons">chevron_right</i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="section about">
    <div class="container">
        <div class="section-title-area">
            <h5 class="section-subtitle">Наши преимущества</h5>
            <h6 class="section-title">О нас</h6>
            <div class="section-desc">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
            </div>
        </div>
        <div class="section-content">
            <div class="col-md-3">
                <div class="thumb-about">
                    <img src="img/about_us_icon_price.png" alt="" title="">
                </div>
                <div class="title-about">
                    <span>Лучшая цена</span>
                </div>
                <div class="content-about">
                    <p>
                        Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="thumb-about">
                    <img src="img/about_us_icon_quality.png" alt="" title="">
                </div>
                <div class="title-about">
                    <span>Качество продукции</span>
                </div>
                <div class="content-about">
                    <p>
                        Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="thumb-about">
                    <img src="img/about_us_icon_leader.png" alt="" title="">
                </div>
                <div class="title-about">
                    <span>Лидер в сфере предоставляемых  услуг</span>
                </div>
                <div class="content-about">
                    <p>
                        Duis aute irure dolor in reprehenderit
                        in voluptate velit esse cillum dolore
                        eu fugiat nulla pariatur.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="thumb-about">
                    <img src="img/about_us_icon_clients.png" alt="" title="">
                </div>
                <div class="title-about">
                    <span>Довольные клиенты</span>
                </div>
                <div class="content-about">
                    <p>
                        Duis aute irure dolor in reprehenderit
                        in voluptate velit esse cillum dolore
                        eu fugiat nulla pariatur.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section gallery">
    <div class="container">
        <div class="section-title-area">
            <h5 class="section-subtitle"></h5>
            <h6 class="section-title">Галерея</h6>
            <div class="section-desc">
                <p>
                </p>
            </div>
        </div>
    </div>
    <div class="js-gallery">
        <?php for ($i = 1; $i < 11; $i++) { ?>
        <a href="img/gallery/photo<?php echo $i;?>.jpg">
            <img src="img/gallery/photo<?php echo $i;?>.jpg" alt="" title="">
        </a>
        <?php } ?>
    </div>
</div>

<div class="section partners">
    <div class="container">
        <div class="section-title-area">
            <h5 class="section-subtitle">Нам доверяют</h5>
            <h6 class="section-title">Партнеры</h6>
            <div class="section-desc">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
            </div>
        </div>
    </div>
    <div class="js-partners">
        <div class="container">
            <div class="js-partners-carousel owl-carousel">
                <?php for ($i = 1; $i < 7; $i++) { ?>
                    <img src='img/brand/brand<?php echo $i;?>_normal.jpg' data='img/brand/brand<?php echo $i;?>_hover.jpg'>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<div class="section review">
    <div class="container">
        <div class="section-title-area">
            <h5 class="section-subtitle">о нас говорят</h5>
            <h6 class="section-title">Отзывы наших клиентов</h6>
            <div class="section-desc">
                <p>

                </p>
            </div>
        </div>
    </div>
    <div class="review-content">
        <div class="container">
            <div class="col-md-4">
                <div class="block-review-option-image">
                    <div class="logo-review">
                        <img src="img/review/logo_odindoma.png" alt="" title="">
                    </div>
                    <div class="review-image">
                        <a href="img/review/feed1.jpg">
                            <img src="img/review/feed1.jpg" alt="" title="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="block-review-option-image">
                    <div class="logo-review">
                        <img src="img/review/mannol_auto.png" alt="" title="">
                    </div>
                    <div class="review-image">
                        <a href="img/review/feed1.jpg">
                            <img src="img/review/feed2.jpg" alt="" title="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 review-option-text">
                <div class="block-review-option-text">
                    <div class="image-client-review">
                        <img src="img/review/client1.png" alt="" title="">
                    </div>
                    <div class="client-name-reviw">
                        <span>Елена Светлова</span>
                    </div>
                    <div class="client-review-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur.
                        </p>
                    </div>
                </div>
            </div>
            <div class="more-services">
                <a href="" class="button-more-service" id="service-nav">
                    Больше отзывов
                    <i class="material-icons">chevron_right</i>
                    <i class="material-icons">chevron_right</i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="section feedback">
    <div class="container">
        <div class="section-title-area">
            <h5 class="section-subtitle">Напишите нам</h5>
            <h6 class="section-title">Обратная связь</h6>
        </div>
    </div>
    <div class="feedback-content">
        <div class="container">
           <div class="form-content">
               <input type="text" placeholder="Ваше имя*">
               <input type="text" placeholder="Ваш E-mail*">
               <textarea placeholder="Оставьте Ваше сообщение">
               </textarea>
               <button type="button">Отправить</button>
           </div>
        </div>
    </div>
</div>

<div class="section news">
    <div class="container">
        <div class="section-title-area">
            <h5 class="section-subtitle">узнайте больше</h5>
            <h6 class="section-title">Новости и статьи</h6>
        </div>
    </div>
    <div class="news-content">
        <div class="container">
            <div class="new-post">
                <div class="col-md-3">
                    <img src="img/blog_img3.jpg" alt="" title="">
                </div>
                <div class="col-md-9">
                    <div class="title-post">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="content-post">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint ...
                        </p>
                    </div>
                    <div class="footer-post">
                        <div class="date-post">
                            <p>
                                12 ноября 2017
                            </p>

                        </div>
                        <div class="more-post-link">
                            <a href="">
                                Читать дальше
                                <i class="material-icons">chevron_right</i>
                                <i class="material-icons">chevron_right</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="new-post">
                <div class="col-md-3">
                    <img src="img/blog_img3.jpg" alt="" title="">
                </div>
                <div class="col-md-9">
                    <div class="title-post">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="content-post">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint ...
                        </p>
                    </div>
                    <div class="footer-post">
                        <div class="date-post">
                            <p>
                                12 ноября 2017
                            </p>

                        </div>
                        <div class="more-post-link">
                            <a href="">
                                Читать дальше
                                <i class="material-icons">chevron_right</i>
                                <i class="material-icons">chevron_right</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button-more-news">
                <a href="">читать больше</a>
            </div>
        </div>
    </div>
</div>

<div class="section subscribe">
    <div class="container">
       <p class="subscribe-top-text">
           Оставайтесь в курсе свежих новостей и акций - подпишитесь на новостной дайжест и будьте первыми!
       </p>
        <div class="form-subsribe">
            <input type="text" placeholder="Ваш E-mail *">
            <button type="button">Подписаться</button>
        </div>
        <p class="subscribe-bottom-text">
            Указанная информация является конфиденциальной и не подлежит передаче третьим лицам.
            Вы можете отписаться от новостной рассылки, использовав ссылку, указанную в письме.
        </p>

    </div>
</div>

<div class="optimize-seo_text">
    <div class="container">
        asdsad
        asdasd
        asd
    </div>
</div>

<footer>
    <div class="container">
        <div class="col-md-3">
            <div id="map_footer"></div>
        </div>
        <div class="col-md-3">
       <span class="footer-title-block">
           Разделы сайта
       </span>
            <ul class="footer-nav">
                <li><a href="#">О нас</a></li>
                <li><a href="#">Услуги</a></li>
                <li><a href="#">Новости</a></li>
                <li><a href="#">Товары</a></li>
                <li><a href="#">Отзывы</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>
        </div>
        <div class="col-md-3">
       <span class="footer-title-block">
           Контакты
       </span>
            <div class="footer-contacts">
                <p>
                    <i class="material-icons">place</i>
                    <span>
                    г. Днепр, улица Европейская, 4
                </span>
                </p>
                <p>
                    <i class="material-icons">smartphone</i>
                    <a href="tel:: +692626">(097) 832 33 44</a>
                    <a href="tel:: +692626">(097) 832 33 44</a>
                    <a href="tel:: +692626">(097) 832 33 44</a>
                </p>
                <p>
                    <i class="material-icons">email</i>
                    <span>
                    support@youremail.com
                </span>
                </p>
                <p>
                    <i class="material-icons">email</i>
                    <span>
                    support_skype
                </span>
                </p>
            </div>
        </div>
        <div class="col-md-3">
       <span class="footer-title-block">
           Следите за нами
       </span>
            <ul class="footer-social-link">
                <li>
                    <a href="">
                        <img src="img/social/soc_fb_1.png" data="img/social/soc_fb_2.png" alt="" title="">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="img/social/soc_vk_1.png" data="img/social/soc_vk_2.png" alt="" title="">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="img/social/soc_youtube_1.png" data="img/social/soc_youtube_2.png" alt="" title="">
                    </a>
                </li>
            </ul>
            <span class="footer-title-block">
           Подписаться на новости
       </span>
            <div class="form-subsribe-footer">
                <input type="text" placeholder="E-mail адрес">
                <button type="button">Готово</button>
            </div>
        </div>
    </div>
</footer>
<div class="copyright">
    <div class="container">
        <div class="copyright-company">
            <p>
                Все права защищены © 2017
            </p>
        </div>
        <div class="developer-company_Barakial">
            <a href="http://lnd.ecoms.biz">
                Разработка и поддержка
                <img src="img/logo_webpr.png" alt="WebPR" title="WebPR">
            </a>
        </div>
    </div>
</div>

<div class="modal fade modal-callback" id="modal_callback" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="left-modal-block-image">
                    <img src="img/modal_call_back_bg_left.jpg" alt="" title="">
                </div>
                <div class="right-modal-form">
                    <button type="button" class="close-moda-callback" data-dismiss="modal" aria-label="Close">
                        <i class="material-icons">close</i>
                        <span>Закрыть</span>
                    </button>
                    <h4 class="title-form-modal">
                        Получите бесплатную
                        консультацию
                    </h4>
                    <p class="info-form-top">
                        Оставьте свои контактные данные, чтобы мы
                        смогли связаться с Вами в удобное для Вас время
                    </p>

                    <div class="form-callback">
                        <input type="text" placeholder="Представьтесь, пожалуйста">
                        <input type="text" class="phone-mask" placeholder="Номер телефона">
                        <i class="material-icons">keyboard_arrow_down</i>
                        <select>
                            <option>Удобное время для звонка</option>
                            <option>12:00</option>
                            <option>13:00</option>
                            <option>14:00</option>
                            <option>15:00</option>
                        </select>
                        <button type="button">Отправить заявку</button>
                        <p class="info-form-bottom">
                            Информация является конфедициальной и не подлежит передаче третьим
                            лицам.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/slick.css">
<link rel="stylesheet" href="css/fonts.css">
<link rel="stylesheet" href="css/custom.css">

<script type="text/javascript"  src="js/plugin/jquery-ui.js"></script>
<script type="text/javascript" src="js/plugin/bootstrap.min.js"></script>
<script type="text/javascript" src="js/plugin/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/plugin/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/plugin/slick.min.js"></script>
<script type="text/javascript" src="js/plugin/jquery.maskedinput.js"></script>
<script type="text/javascript" src="js/common.js"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDK2Rbh3nnU8hXp7Ov9ps1TOGwxsRSxnI8&callback=initMap" type="text/javascript"></script>
<script type="text/javascript">
    var map;
    var myLatLng = {lat: 48.465959, lng: 35.04817};
    function initMap() {
        map = new google.maps.Map(document.getElementById('map_footer'), {
            center: myLatLng,
            zoom: 17
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            labelContent: "labelContent",
            title: 'Мы тут =)'
        });
    }
</script>
</body>
</html>
