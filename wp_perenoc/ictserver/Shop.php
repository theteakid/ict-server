<?php 
/*
Template Name: ictserver_shop
Template Post Type: post, page, product
*/

?>
<?php get_header(); ?>
<div class="catalog-servers">
<div class="ctg__main-container">
        <div class="tinyblock">
            <p>Server ICT > Серверы</p>
        </div>
        <div class="title-cont">
            <p id="bigtitle" class="title-cont-elem">Серверы</p>
            <p id="pownum" class="title-cont-elem">123</p>
        </div>
        <div class="prod-content">
            <div class="left-block prod-content-elem" style="width: 308px;padding:24px;">
                <div class="filter-content">
                    <div class="filter-content-elem">
                        <p>Доставка</p> 
                        <div class="fce-wrapper">
                            <label class="checkboxcont">
                                <p>со склада в Китае</p>
                                <input type="checkbox" id="cb-delivery-china">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="fce-wrapper">
                            <label class="checkboxcont">
                                <p>со склада в России</p>
                                <input type="checkbox" id="cb-delivery-rus">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="filter-content-elem">
                        <p>Бренд</p> 
                        <div class="fce-wrapper">
                            <label class="checkboxcont">
                                <p>Dell</p>
                                <input type="checkbox" id="cb-brand-dell">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="fce-wrapper">
                            <label class="checkboxcont">
                                <p>Lenovo</p>
                                <input type="checkbox" id="cb-brand-lenovo">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="fce-wrapper">
                            <label class="checkboxcont">
                                <p>Hewlett Packard</p>
                                <input type="checkbox" id="cb-brand-hp">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="filter-content-elem">
                        <p>Форм-фактор</p> 
                        <div class="fce-wrapper">
                            <label class="checkboxcont">
                                <p>Все</p>
                                <input type="checkbox" id="cb-formfactor-all">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="fce-wrapper">
                            <label class="checkboxcont">
                                <p>U1</p>
                                <input type="checkbox" id="cb-formfactor-u1">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="fce-wrapper">
                            <label class="checkboxcont">
                                <p>U2</p>
                                <input type="checkbox" id="cb-formfactor-u2">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="fce-wrapper">
                            <label class="checkboxcont">
                                <p>U3</p>
                                <input type="checkbox" id="cb-formfactor-u3">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="fce-wrapper">
                            <label class="checkboxcont">
                                <p>Tower</p>
                                <input type="checkbox" id="cb-formfactor-tower">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="filter-content-elem">
                        <p>Цена, ₽</p> 
                        <div class="fce-wrapper" style="flex-direction: column; gap: 16px;">
                            <div class="range-box rb-pricerange">
                                <div class="prc-min prc-elem" style="border-radius: 10px 0px 0px 10px;">
                                    <input type="number" min="0" max="3000000" value="0">
                                </div>
                                <div class="prc-max prc-elem" style="border-radius: 0px 10px 10px 0px;">
                                    <input type="number" min="0" max="3000000" value="3000000">
                                </div>
                            </div>
                            <div class="price-range-slider">
                                <div class="prs-min prs">
                                    <input type="range" min="0" value="0" max="3000000" step="10000">
                                </div>
                                <div class="prs-max prs">
                                    <input type="range" min="0" value="3000000" max="3000000" step="10000">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filter-content-elem">
                        <p>Количество дисков</p> 
                        <div class="fce-wrapper" style="flex-direction: column; gap: 16px;">
                            <div class="range-box rb-disknum">
                                <div class="prc-min prc-elem" style="border-radius: 10px 0px 0px 10px;">
                                    <div class="input-wrap"><span style="color: #737f8c;">от</span> <input type="number" min="1" max="32" value="2"></div>
                                </div>
                                <div class="prc-max prc-elem" style="border-radius: 0px 10px 10px 0px;">
                                    <div class="input-wrap"><span style="color: #737f8c;">до</span> <input type="number" min="1" max="32" value="32"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filter-content-elem">
                        <p>RAID контроллер</p> 
                        <div class="fce-wrapper" style="flex-direction: column; gap: 16px;">
                            <div class="dropdown-container mode-2 dd-raidcont">
                                <div class="dropdown">
                                    <div class="content-container">
                                    <div class="cont hidden">
                                        <div class="option" id="0"><img class="ddc-opt-LangIco" src="" style="display: none;" draggable="false">Test</div>
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
                    <div class="filter-content-elem">
                        <p>Количество процессоров</p> 
                        <div class="fce-wrapper">
                            <label class="checkboxcont">
                                <p>1</p>
                                <input type="checkbox" id="cb-cpucount-1">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="fce-wrapper">
                            <label class="checkboxcont">
                                <p>2</p>
                                <input type="checkbox" id="cb-cpucount-2">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="fce-wrapper">
                            <label class="checkboxcont">
                                <p>3</p>
                                <input type="checkbox" id="cb-cpucount-3">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-block prod-content-elem">
                <div class="pce-topblock">
                    <div class="dropdown-container mode-2" style="width: 226px;">
                        <div class="dropdown">
                            <div class="content-container">
                            <div class="cont hidden">
                                <div class="option" id="0"><img class="ddc-opt-LangIco" src="" style="display: none;" draggable="false">По популярности</div>
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
                    <div class="dropdown-container mode-2" style="width: 159px;">
                        <div class="dropdown">
                            <div class="content-container">
                            <div class="cont hidden">
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
                <div class="pce-goods">
                    <div class="novinki">
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
                        <div class="pager">
                            <div class="pager-elem pager-list">
                                <div class="pe-active"><a>1</a></div>
                                <div><a href="#page2">2</a></div>
                                <div><a href="#page3">3</a></div>
                                <div><a href="#page4">4</a></div>
                                <div><a href="#page5">5</a></div>
                                <div><a href="#page6">6</a></div>
                                <div><a href="#page7">7</a></div>
                                <div><a href="#page8">8</a></div>
                                <div class="pe-more"><a>...</a></div>
                            </div>
                            <div class="pager-elem"><a href="#" class="pe-next" draggable="false">Дальше</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="contact-block">
            <div class="cross-close"></div>
            <div class="cb-elem" style="align-items: center;"><a href="#"><img draggable="false" src="<?php echo get_template_directory_uri(); ?>/assets/image/whatsapp.png" alt> WhatsApp</a></div>
            <div class="cb-elem" style="align-items: center;"><a href="#"><img draggable="false" src="<?php echo get_template_directory_uri(); ?>/assets/image/telegram.png" alt> Телеграм</a></div>
            <div class="cb-elem" style="justify-content: center;"><a href="#" style="width: 100%;"><button>Позвоните мне</button></a></div>
        </div>
</div>
<?php get_footer(); ?>