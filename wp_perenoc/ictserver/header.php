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
    <header>
    <div class="header" style="background: 0;">
        <div class="topline">
            <div class="tl--cont">
                <div class="tlc--wrap-left tlc--wrap">
                    <div class="tlc--elem">
                        <a href="order">Оплата и доставка</a>
                    </div>
                    <div class="tlc--elem">
                        <a href="#">Контакты</a>
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
                    <a href="home"><img draggable="false" src="<?php echo get_template_directory_uri(); ?>/assets/image/logotype2.png" alt></a>
                </div>
                <div class="header__nav">
                    <div class="nav__catalog">
                        <button onClick='location.href="catalog"' class="btn__catalog">Каталог</button>
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
                        <a href="tel:88000000000" style="color: #000;">8 800 000-00-00</a>
                        <br>
                        <a href="mailto:info@ictimport.com" style="color: #000;">info@ictimport.com</a>
                    </div>
                    <div class="cart hr-elem">
                        <a href="cart">
                            <img draggable="false" src="<?php echo get_template_directory_uri(); ?>/assets/image/cart2.png" alt>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>