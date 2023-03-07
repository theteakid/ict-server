<!--LAST UPDATE - 02.21.2023 8:46 PM-->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>SERVER ICT - интернет-магазин</title>
</head>
<body>
    <div class="darken hidden"></div>
    <header>
    <div class="header" style="background: 0;">
        <div class="topline">
            <div class="tl--cont">
                <div class="tlc--wrap-left tlc--wrap">
                    <div class="tlc--elem">
                        <a href="order">Оплата и доставка</a>
                    </div>
                    <div class="tlc--elem">
                        <a href="contacts">Контакты</a>
                    </div>
                    <div class="tlc--elem">
                        <a href="about">О компании</a>
                    </div>
                </div>
                <div class="tlc--wrap-right tlc--wrap">
                    <div class="tlc--elem">
                        <div class="dropdown-container">
                            <div class="dropdown">
                                <div class="content-container">
                                <div class="cont hidden">
                                    <div class="option" id="0"><img class="ddc-opt-LangIco" src="<?php echo get_template_directory_uri(); ?>/assets/image/flag-ru.png" draggable="false">Русский</div>
                                    <div class="option" id="1"><img class="ddc-opt-LangIco" src="<?php echo get_template_directory_uri(); ?>/assets/image/flag-us.png" draggable="false">English, USA</div>
                                    <div class="option" id="2"><img class="ddc-opt-LangIco" src="<?php echo get_template_directory_uri(); ?>/assets/image/flag-israel.png" draggable="false">עברית</div>
                                    <div class="option" id="3"><img class="ddc-opt-LangIco" src="<?php echo get_template_directory_uri(); ?>/assets/image/flag-china.png" draggable="false">中国人</div>
                                </div>
                                </div>
                                <div class="upper" chosenOption="0">
                                    <div id="ico-lang"></div><p>Option here</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="header__menu">
                <div class="header__logo">
                    <a href="home"><img draggable="false" src="<?php echo get_template_directory_uri(); ?>/assets/image/Logotype2.svg" alt></a>
                </div>
                <div class="header__nav">
                    <div class="nav__catalog">
                        <button class="btn__catalog">Каталог</button>
                    </div>
                    <div class="nav__search">
                        <div class="nav__search-ico"></div>
                        <form action="#">
                            <input placeholder="Поиск" type="search" style="
                            background: #FFFFFF;
                            border: 2px solid #2560DC;
                            border-radius: 10px;">
                        </form>
                    </div>
                </div>
                <div class="header__right">
                    <div class="nomber hr-elem">
                        <a href="tel:<?php echo get_post_meta($post->ID, 'Телефон', true); ?>" style="color: #000;"><?php echo get_post_meta($post->ID, 'Телефон', true); ?></a>
                        <br>
                        <a href="mailto:<?php echo get_post_meta($post->ID, 'email', true); ?>" style="color: #000;"><?php echo get_post_meta($post->ID, 'email', true); ?></a>
                    </div>
                    <div class="cart hr-elem">
                        <a href="cart">
                            <img draggable="false" src="<?php echo get_template_directory_uri(); ?>/assets/image/cart2.png" alt>
                        </a>
                    </div>
                </div>
            </div>
<div class="header__mid">
            <div class="menu__catalog">
                <div class="catalog__categories">
                    <div class="--cc-elem --cce-active">
                        <p>Серверы</p>
                    </div>
                    <div class="--cc-elem">
                        <p>СДХ</p>
                    </div>
                    <div class="--cc-elem">
                        <p>Коммутаторы</p>
                    </div>
                    <div class="--cc-elem">
                        <p>МФУ</p>
                    </div>
                </div>
                <div class="category__container">
                    <p style="font-size: 32px;font-weight: 600;">Серверы</p>
                    <div class="cc__columns">
                        <div class="--cat-elem">
                            <p style="font-size: 18px;font-weight: 600;line-height: 20px;">Серверы</p>
                            <a href="catalog">Серверы DELL</a>
                            <a href="catalog">Серверы Lenovo</a>
                            <a href="catalog">Серверы HP</a>
                            <div class="help-note">
                                <p>
                                    Поможем 
                                    сконфигурировать 
                                    любой сервер
                                </p>
                            </div>
                        </div>
                        <div class="--cat-elem">
                            <p style="font-size: 18px;font-weight: 600;line-height: 20px;">Комплектующие</p>
                            <a href="#">Блоки питания</a>
                            <a href="#">Жеские диски и SSD</a>
                            <a href="#">Инфраструктурные опции</a>
                            <a href="#">Контроллеры SAS и SATA</a>
                            <a href="#">Серверное ПО</a>
                            <a href="#">Серверное шасси</a>
                            <a href="#">Сетевые адаптеры</a>
                            <a href="#">Оптические приводы</a>
                        </div>
                        <div class="--cat-elem">
                            <p style="font-size: 18px;font-weight: 600;line-height: 20px;">Оборудование KVM</p>
                            <a href="#">KVM комплектующие</a>
                            <a href="#">KVM переключатели</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
       </div>
   </div>
</header>