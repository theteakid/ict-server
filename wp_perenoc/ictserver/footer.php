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
        <h1><?php echo get_post_meta($post->ID, 'Телефон', true); ?></h1>
        <div class="item-link">
            <a href="mailto:<?php echo get_post_meta($post->ID, 'email', true); ?>"><?php echo get_post_meta($post->ID, 'email', true); ?></a>
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
</body>
</html>