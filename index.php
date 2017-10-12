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
                                <i class="material-icons">phone_iphone</i>
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
                            <button type="button">Обратный звонок</button>
                        </div>

                        <div class="top-header-search">
                           <form action="/" method="post">
                               <i class="material-icons">search</i>
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
                <a href="#" class="right-button-banner">Оставить заявку</a>
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
    </div>
    <div class="js-gallery">
        <?php for ($i = 1; $i < 11; $i++) { ?>
        <a href="img/gallery/photo<?php echo $i;?>.jpg">
            <img src="img/gallery/photo<?php echo $i;?>.jpg" alt="" title="">
        </a>
        <?php } ?>
    </div>
</div>

<footer></footer>
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
</body>
</html>
