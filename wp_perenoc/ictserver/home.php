<?php
/*
Template Name: ictserver
Template Post Type: post, page, product
*/

?>
<!--LAST UPDATE - 02.21.2023 8:46 PM-->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
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
    <div class="darken hidden"></div>
    <header class="header">
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
                <a href="home"><img draggable="false" src="<?php echo get_template_directory_uri(); ?>/assets/image/Logotype.svg" alt></a>
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
                        <img draggable="false" src="<?php echo get_template_directory_uri(); ?>/assets/image/cart.png" alt>
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
            <h1 class="header__title">
                Прямые поставки корпоративного <br>оборудования из Китая
            </h1>
            <div class="header__tabs">
                <div class="tab__item">
                    <a href="#"><?php echo get_post_meta($post->ID, 'Dell', true); ?></a>
                </div>
                <div class="tab__item">
                    <a href="#"><?php echo get_post_meta($post->ID, 'Dell', true); ?></a>
                </div>
                <div class="tab__item">
                    <a href="#">Hewlett Packard</a>
                </div>
                <div class="tab__item">
                    <a href="#">Huawei</a>
                </div>
                <div class="tab__item">
                    <a href="#">Cisco</a>
                </div>
                <div class="tab__item">
                    <a href="#">Конфигуратор</a>
                </div>
            </div>
            <div class="demo__box">
                <div class="demo__item">
                    <div class="demo__item--content">
                        <div class="box__title di--cont-elem">
                            <p>Серверы</p>
                        </div>
                        <div class="box__img di--cont-elem" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/image/dellemc-per740-24x25-bezel-lcd-2-above-ff-bold-reflection-1%202.png');">
                            
                        </div>
                    </div>
                </div>
                <div class="demo__item">
                    <div class="demo__item--content">
                        <div class="box__title di--cont-elem">
                            <p>Системы хранения данных</p>
                        </div>
                        <div class="box__img di--cont-elem" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/image/s00009832%203.png');">
                            
                        </div>
                    </div>
                </div>
                <div class="demo__item">
                    <div class="demo__item--content">
                        <div class="box__title di--cont-elem">
                            <p>Коммутаторы</p>
                        </div>
                        <div class="box__img di--cont-elem" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/image/iot-gateway-5200-pdp-mod-7%201.png');">
                            
                        </div>
                    </div>
                </div>
                <div class="demo__item">
                    <div class="demo__item--content">
                        <div class="box__title di--cont-elem">
                            <p>МФУ</p>
                        </div>
                        <div class="box__img di--cont-elem" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/image/2041%201.png');">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="information">
                <div class="info-item">
                    <div class="block-img">
                        <img draggable="false" src="<?php echo get_template_directory_uri(); ?>/assets/image/warranty.png" alt>
                    </div>
                    <div class="block-title">
                        <span>
                            3-летняя гарантия на сервера<br> и накопители от производителя
                        </span>
                    </div>
                </div>
                <div class="info-item">
                    <div class="block-img">
                        <img draggable="false" src="<?php echo get_template_directory_uri(); ?>/assets/image/law.png" alt>
                    </div>
                    <div class="block-title">
                        <span>
                            Работаем с НДС на основании закона <br>от 28.06.2022 № 213-ФЗ
                        </span>
                    </div>
                </div>
                <div class="info-item">
                    <div class="block-img">
                        <img draggable="false" src="<?php echo get_template_directory_uri(); ?>/assets/image/delivery.png" alt>
                    </div>
                    <div class="block-title">
                        <span>
                            Доставка от 14 дней<br> со склада из Китая 
                        </span>
                    </div>
                </div>
            </div>
        </div>
       </div>
    </header>
    <div class="feed-container">
        <div class="configuration__block">
            <div class="conf__text">
                <h3>Поможем сконфигурировать<br> любой сервер и СДХ <br>под ваш задачи</h3>
                <a href="#">Отправить ТЗ</a>
            </div>
            <div class="conf__img">
                <div class="title__text">
                <div class="title1">Добавить RAM?</div>
                <div class="title2">Слишком <br> мощный БП?</div>
                <div class="title3">Нужен <br>второй CPU?</div>
                </div>
                <div class="img-conf">
                    <img draggable="false" src="<?php echo get_template_directory_uri(); ?>/assets/image/imgblock2.png" alt>
                </div>
            </div>
        </div>
        <div class="novinki" style="
        padding-left: 15px;
        padding-right: 15px;
        padding-bottom: 10px;
        padding-top: 100px;">
            <h1>Новинки производителей</h1>
            <div class="box-cards">
                <div class="box-card">
                    <div class="card-img">
                        <p class="box-mod">Под заказ</p>
                        <img draggable="false" src="<?php echo get_template_directory_uri(); ?>/assets/image/server.png" alt>
                        <div class="card-text">
                            <h3>DELL R630 8SFF</h3>
                            <span>
        CPU: 1x Intel Xeon E5-2643v3 (6C 20M Cache 3.40GHz)</span><br>
        <span>RAM: 8Гб 1x 8GB DDR4 UDIMM 2400MHz (Поддержка до 64Гб максимально, 4 UDIMM портов)</span><br>
        <span>RAID: Dell H730 (1GB+BBU)</span><br>
        <span>БП: 2x Dell 750W</span><br>
        <span>Network: integrated Network Interface controller Dell 4 port 1Gb</span>
                            
                        </div>
                    </div>
                    <div class="card-fns">
                        <h3>от 40 000 ₽</h3>
                        <span>Со склада в Китае</span>
                        <div class="add-cart">
                            <a href="#">В корзину</a>
                        </div>
                        <div class="add-conf">
                            <a href="#">Сконфигурировать</a>
                        </div>
                    </div>
                </div>
                <div class="box-card">
                    <div class="card-img">
                        <p class="box-mod mod">Только у нас</p>
                        <img draggable="false" src="<?php echo get_template_directory_uri(); ?>/assets/image/server.png" alt>
                        <div class="card-text">
                            <h3>DELL R630 8SFF</h3>
                            <span>
        CPU: 1x Intel Xeon E5-2643v3 (6C 20M Cache 3.40GHz)</span><br>
        <span>RAM: 8Гб 1x 8GB DDR4 UDIMM 2400MHz (Поддержка до 64Гб максимально, 4 UDIMM портов)</span><br>
        <span>RAID: Dell H730 (1GB+BBU)</span><br>
        <span>БП: 2x Dell 750W</span><br>
        <span>Network: integrated Network Interface controller Dell 4 port 1Gb</span>
                            
                        </div>
                    </div>
                    <div class="card-fns">
                        <h3>от 40 000 ₽</h3>
                        <span>Со склада в Китае</span>
                        <div class="add-cart">
                            <a href="#">В корзину</a>
                        </div>
                        <div class="add-conf">
                            <a href="#">Сконфигурировать</a>
                        </div>
                    </div>
                </div>
                <div class="box-card">
                    <div class="card-img">
                        <img draggable="false" src="<?php echo get_template_directory_uri(); ?>/assets/image/server.png" alt>
                        <div class="card-text">
                            <h3>DELL R630 8SFF</h3>
                            <span>
        CPU: 1x Intel Xeon E5-2643v3 (6C 20M Cache 3.40GHz)</span><br>
        <span>RAM: 8Гб 1x 8GB DDR4 UDIMM 2400MHz (Поддержка до 64Гб максимально, 4 UDIMM портов)</span><br>
        <span>RAID: Dell H730 (1GB+BBU)</span><br>
        <span>БП: 2x Dell 750W</span><br>
        <span>Network: integrated Network Interface controller Dell 4 port 1Gb</span>
                            
                        </div>
                    </div>
                    <div class="card-fns">
                        <h3>от 40 000 ₽</h3>
                        <span>Со склада в Китае</span>
                        <div class="add-cart">
                            <a href="#">В корзину</a>
                        </div>
                        <div class="add-conf">
                            <a href="#">Сконфигурировать</a>
                        </div>
                    </div>
                </div>
                <div class="box-card">
                    <div class="card-img">
                        <img draggable="false" src="<?php echo get_template_directory_uri(); ?>/assets/image/server.png" alt>
                        <div class="card-text">
                            <h3>DELL R630 8SFF</h3>
                            <span>
        CPU: 1x Intel Xeon E5-2643v3 (6C 20M Cache 3.40GHz)</span><br>
        <span>RAM: 8Гб 1x 8GB DDR4 UDIMM 2400MHz (Поддержка до 64Гб максимально, 4 UDIMM портов)</span><br>
        <span>RAID: Dell H730 (1GB+BBU)</span><br>
        <span>БП: 2x Dell 750W</span><br>
        <span>Network: integrated Network Interface controller Dell 4 port 1Gb</span>
                            
                        </div>
                    </div>
                    <div class="card-fns">
                        <h3>от 40 000 ₽</h3>
                        <span>Со склада в Китае</span>
                        <div class="add-cart">
                            <a href="#">В корзину</a>
                        </div>
                        <div class="add-conf">
                            <a href="#">Сконфигурировать</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn-showmore">Показать ещё</button>
        </div>
        <div class="novovvedenia">
            <div class="novo-img">
                <div class="img-item">
                    <img draggable="false" src="<?php echo get_template_directory_uri(); ?>/assets/image/logo1.png" alt>
                </div>
                <div class="img-item">
                    <img draggable="false" src="<?php echo get_template_directory_uri(); ?>/assets/image/logo2.png" alt>
                </div>
                <div class="img-item">
                    <img draggable="false" src="<?php echo get_template_directory_uri(); ?>/assets/image/logo3.png" alt>
                </div>
                <div class="img-item">
                    <img draggable="false" src="<?php echo get_template_directory_uri(); ?>/assets/image/logo4.png" alt>
                </div>
                <div class="img-item">
                    <img draggable="false" src="<?php echo get_template_directory_uri(); ?>/assets/image/logo5.png" alt>
                </div>
            </div>
            <div class="novo-text">
                <h3 class="light">Продаем только<br> оригинальное<br> оборудование<br> напрямую с заводов<br> производителей.</h3>
                <h3 class="no-light">Не б/у,<br> не восстановленные,<br> не реплики,<br> никакой алибабы!</h3>
            </div>
        </div>
        <div class="forma">
            <h1 class="form-title">Подберем любое оборудование<sup>*</sup><br>под ваш запрос</h1>
            <form class="form" action="#">
                <input placeholder="Имя и Фамилия" type="text">
                <input placeholder="Телефон" type="text">
                <input placeholder="Email" type="email">
                <input placeholder="Комментарий (необязательно)" type="text" style="height: 96px;text-align: left;">
                <label for="attachcreds">Прикрепить ТЗ или реквизиты</label>
                <input type="file" id="attachcreds">
                <button class="form-button" type="submit">Отправить</button>
            </form>
            <div class="text-form">
                <span class="form-subtitle">Отправляя заявку, вы соглашаетесь на вы соглашаетесь на <a href="#">обработку<br> персональных данных</a></span>
            </div>
            <hr>
            <p class="form-text">*ноутбуки, настольные компьютеры, телефоны, планшеты и т.д.</p>
        </div>
    </div>
    <footer class="footer">
    <div class="contact-block">
        <div class="cross-close"></div>
        <div class="cb-elem" style="align-items: center;"><a href="#"><img draggable="false" src="<?php echo get_template_directory_uri(); ?>/assets/image/whatsapp.png" alt> WhatsApp</a></div>
        <div class="cb-elem" style="align-items: center;"><a href="#"><img draggable="false" src="<?php echo get_template_directory_uri(); ?>/assets/image/telegram.png" alt> Телеграм</a></div>
        <div class="cb-elem" style="justify-content: center;"><a href="#" style="width: 100%;"><button>Позвоните мне</button></a></div>
    </div>
<div class="footter">
    <div class="info menu1">
        <img draggable="false" src="<?php echo get_template_directory_uri(); ?>/assets/image/logotype2.png" alt>
        <p>
            Компания-импортер. Поиск поставщиков, закупка<br>и таможенное оформление продукции из IT-сферы:<br> серверное и телекоммуникационное оборудование,<br> системы хранения данных. Работаем в сегменте<br> B2B.
        </p>
    </div>
    <div class="menu1">
        <h1>Каталог</h1>
        <div class="item-link">
            <a href="catalog">Серверы</a>
        </div>
        <div class="item-link">
            <a href="catalog">СДХ</a>
        </div>
        <div class="item-link">
            <a href="catalog">Коммутаторы</a>
        </div>
        <div class="item-link">
            <a href="catalog">МФУ</a>
        </div>
    </div>
    <div class="menu1">
        <h1>Клиентам</h1>
        <div class="item-link">
            <a href="order">Доставка и оплата</a>
        </div>
        <div class="item-link">
            <a href="contacts">Контакты</a>
        </div>
        <div class="item-link">
            <a href="about">О компании</a>
        </div>
    </div>
    <div class="menu1">
        <h1>8 800 000-00-00</h1>
        <div class="item-link">
            <a href="mailto:info@ictimport.com">info@ictimport.com</a>
        </div>
        <div class="contacts">
            <div class="left-contact">
                <div class="wa">
                    <a href="#"><img draggable="false" src="<?php echo get_template_directory_uri(); ?>/assets/image/telegram.png" alt></a>
                </div>
                <div class="tg">
                    <a href="#"><img draggable="false" src="<?php echo get_template_directory_uri(); ?>/assets/image/whatsapp.png" alt></a>
                </div>
            </div>
            <div class="right-contact">
                <a href="#"><button>Позвоните мне</button></a>
            </div>
        </div>
    </div>
</div>
<div class="copy">
    <p>@2023. Server ICT. Все права защищены. Об обработке персональных данных</p>
</div>
</footer>
    <?php wp_footer(); ?>


    <script type="text/javascript">
        document.querySelector(".btn__catalog").addEventListener('click',(ev)=> {
    ev.target.classList.toggle('--cat-opened');
    document.querySelector(".menu__catalog").classList.toggle('--mc-cat-opened');
    document.querySelector(".header .header__menu").classList.toggle('--cnt-cat-opened');
    document.querySelector(".header .nav__search input").classList.toggle('searchbar-hl');
    document.querySelector(".darken").classList.toggle('hidden');
    document.querySelectorAll(".header .header__right .nomber a").forEach(a__elem=> {
        a__elem.classList.toggle('nmb-cat-opened');
    });
    if (ev.target.classList.contains('--cat-opened')) {
        ev.target.innerHTML= "Закрыть";
        document.querySelector(".header .header__logo img").src= '<?php echo get_template_directory_uri(); ?>/assets/image/Logotype2.svg';
        document.querySelector(".header .header__right .cart img").src= '<?php echo get_template_directory_uri(); ?>/assets/image/cart2.png';
    }else{
        ev.target.innerHTML= "Каталог";
        document.querySelector(".header .header__logo img").src= '<?php echo get_template_directory_uri(); ?>/assets/image/Logotype.svg';
        document.querySelector(".header .header__right .cart img").src= '<?php echo get_template_directory_uri(); ?>/assets/image/cart.png';
    }
});
    </script>
</body>
</html>