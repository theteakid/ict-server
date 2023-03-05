<?php 
/*
Template Name: ictserver_cart
Template Post Type: post, page, product
*/

?>
<?php get_header(); ?>
<div class="cart">
<div class="cart-container">
        <div class="title-cont">
            <p id="bigtitle" class="title-cont-elem">Корзина</p>
        </div>
        <div class="content-wrapper">
            <div class="cw-elem cw-elem-summary">
                <div class="summary">
                    <div class="summary-elem">
                        <div class="summary-sub-elem">
                            <div class="title-cont">
                                <p id="--title">Итого</p>
                                <p id="--pownum">0 товаров</p>
                            </div>
                        </div>
                        <div class="summary-sub-elem" style="align-self: flex-end;">
                            <p>Итоговая стоимость может измениться после уточнения всех деталей</p>
                        </div>
                    </div>
                    <div class="summary-elem se-right-pos" style="justify-content: left;">
                        <div class="se-price-wrap" style="width: 100%;">
                            <p class="total-price"><span id="--price-num">0</span> ₽</p>
                            <div class="dropdown-container mode-3 dd-raidcont">
                                <div class="dropdown">
                                    <div class="content-container">
                                    <div class="cont hidden" style="width: 150px !important;">
                                        <div class="option" id="0"><img class="ddc-opt-LangIco" src="" style="display: none;" draggable="false">В рублях</div>
                                        <div class="option" id="1"><img class="ddc-opt-LangIco" src="" style="display: none;" draggable="false">Test</div>
                                        <div class="option" id="2"><img class="ddc-opt-LangIco" src="" style="display: none;" draggable="false">Test</div>
                                        <div class="option" id="3"><img class="ddc-opt-LangIco" src="" style="display: none;" draggable="false">Test</div>
                                    </div>
                                    </div>
                                    <div class="upper" chosenOption="0">
                                        <div id="ico-lang"></div><p>Option here</p>
                                        <div class="arrow-down"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="novinki">
                    <div class="box-cards">
                        
                    </div>
                </div>
            </div>
            <div class="cw-elem cw-elem-form" style="width: 805px;">
                <div class="forma" style="margin-top: 0;height: auto;padding: 32px 48px;box-shadow: 0px 6px 16px rgba(0, 26, 52, 0.16);background: #fff;">
                    <h1 class="form-title" style="font-size: 32px;text-align: left;">Оформление заказа</h1>
                    <form class="form" action="#" style="padding: 0;">
                        <input placeholder="Имя и Фамилия" type="text">
                        <input placeholder="Телефон" type="text">
                        <input placeholder="Email" type="email">
                        <input placeholder="Комментарий (необязательно)" type="text" style="height: 48px;text-align: left;">
                        <label for="attachcreds">Прикрепить ТЗ или реквизиты</label>
                        <input type="file" id="attachcreds">
                        <button class="form-button" type="submit">Оформить</button>
                    </form>
                    <div class="text-form" style="margin-bottom: 0;">
                        <span class="form-subtitle">Отправляя заявку, вы соглашаетесь на <a href="#">обработку<br> персональных данных</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>