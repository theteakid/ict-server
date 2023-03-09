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
                                    <div class="option" id="2"><img class="ddc-opt-LangIco" src="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/image/flag-israel.png" draggable="false">עברית</div>
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
            <div class="menu__catalog mc__adapt">
                <div class="category__container cc-inactive">
                    <p style="font-size: 32px;font-weight: 600;" id="cc__catname"></p>
                    <div class="cc__actionbar">
                        <div class="arrow-back"></div>
                    </div>
                    <div class="cc__columns">
                    </div>
                </div>
                <div class="catalog__categories">
                    
                </div>
                <div class="catalog__subcategories hidden">
                    
                </div>
            </div>
            <div class="header__menu hm__desktop">
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
                            <input placeholder="Поиск" type="search" class="searchbar-hl">
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
                        <a href>
                            <img draggable="false" src="<?php echo get_template_directory_uri(); ?>/assets/image/cart2.png" alt>
                        </a>
                    </div>
                </div>
            </div>
            <div class="header__menu hm__adapt">
            <div class="hma-elem" style="margin-bottom: 10px;">
                <div class="he-elem nav__catalog">
                    <button class="btn__catalog">Каталог</button>
                </div>
                <div class="he-elem header__logo" style="justify-content: center;">
                    <a href="index.html"><img draggable="false" src="<?php echo get_template_directory_uri(); ?>/assets/image/Logotype.svg" alt></a>
                </div>
                <div class="he-elem header__right">
                    <div class="nomber hr-elem">
                        <a href="#">Задать вопрос</a>
                    </div>
                    <div class="cart hr-elem">
                        <a href>
                            <img draggable="false" src="<?php echo get_template_directory_uri(); ?>/assets/image/cart2.png" alt>
                        </a>
                    </div>
                </div>
            </div>
            <div class="header__nav">
                <div class="nav__search">
                    <div class="nav__search-ico"></div>
                    <form action="#">
                        <input placeholder="Поиск" type="search">
                    </form>
                </div>
            </div>
        </div>
        <div class="header__mid">
            <div class="menu__catalog mc__desktop">
                <div class="catalog__categories">
                </div>
                <div class="category__container cc-inactive">
                    <p style="font-size: 32px;font-weight: 600;" id="cc__catname">Серверы</p>
                    <div class="cc__columns">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</header>

