<!--LAST UPDATE - 02.21.2023 8:46 PM-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  <!---  <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/dropdown.css">--->
    <title>SERVER ICT - интернет-магазин</title>
</head>
<body>
    <header class="header">
       <div class="topline">
        <div class="tl--cont">
            <div class="tlc--wrap-left tlc--wrap">
                <div class="tlc--elem">
                    <a href="#">Оплата и доставка</a>
                </div>
                <div class="tlc--elem">
                    <a href="#">Контакты</a>
                </div>
                <div class="tlc--elem">
                    <a href="#">О компании</a>
                </div>
            </div>
            <div class="tlc--wrap-right tlc--wrap">
                <div class="tlc--elem">
                    <div class="dropdown-container">
                        <div class="dropdown">
                            <div class="content-container">
                            <div class="cont hidden">
                                <div class="option" id="0"><img class="ddc-opt-LangIco" src="image/flag-ru.png" draggable="false">Русский</div>
                                <div class="option" id="1"><img class="ddc-opt-LangIco" src="image/flag-us.png" draggable="false">English, USA</div>
                                <div class="option" id="2"><img class="ddc-opt-LangIco" src="image/flag-israel.png" draggable="false">עברית</div>
                                <div class="option" id="3"><img class="ddc-opt-LangIco" src="image/flag-china.png" draggable="false">中国人</div>
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
                <a href="index.html"><img draggable="false" src="image/Logotype.png" alt></a>
            </div>
            <div class="header__nav">
                <div class="nav__catalog">
                    <button class="btn__catalog">Каталог</button>
                </div>
                <div class="nav__search">
                    <div class="nav__search-ico"></div>
                    <form action="#">
                        <input placeholder="Поиск" type="search">
                    </form>
                </div>
            </div>
            <div class="header__right">
                <div class="nomber hr-elem">
                    <a href="tel:88000000000">8 800 000-00-00</a>
                    <br>
                    <a href="mailto:info@ictimport.com">info@ictimport.com</a>
                </div>
                <div class="cart hr-elem">
                    <a href>
                        <img draggable="false" src="image/cart.png" alt>
                    </a>
                </div>
            </div>
        </div>