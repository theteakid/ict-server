let __categorychosen= 0;
let __subcategorychosen= 0;
let __categorypage= 0;
let __menuopened= false;
let __menuelements=
[
    {
        categorytitle: "Серверы",
        subcategories:
        [
            {
                subcategorytitle: "Серверы",
                element:
                `<div class="--cat-elem">
                    <p style="font-size: 18px;font-weight: 600;line-height: 20px;">Серверы</p>
                    <a href="#">Серверы DELL</a>
                    <a href="#">Серверы Lenovo</a>
                    <a href="#">Серверы HP</a>
                    <div class="help-note">
                            <p>
                            Поможем 
                            сконфигурировать 
                            любой сервер
                        </p>
                    </div>
                </div>`
            },
            {
                subcategorytitle: "Комплектующие",
                element:
                `<div class="--cat-elem">
                    <p style="font-size: 18px;font-weight: 600;line-height: 20px;">Комплектующие</p>
                    <a href="#">Блоки питания</a>
                    <a href="#">Жеские диски и SSD</a>
                    <a href="#">Инфраструктурные опции</a>
                    <a href="#">Контроллеры SAS и SATA</a>
                    <a href="#">Серверное ПО</a>
                    <a href="#">Серверное шасси</a>
                    <a href="#">Сетевые адаптеры</a>
                    <a href="#">Оптические приводы</a>
                </div>`
            },
            {
                subcategorytitle: "Оборудование KVM",
                element:
                `<div class="--cat-elem">
                    <p style="font-size: 18px;font-weight: 600;line-height: 20px;">Оборудование KVM</p>
                    <a href="#">KVM комплектующие</a>
                    <a href="#">KVM переключатели</a>
                </div>`
            }
        ]
    },
    {
        categorytitle: "СДХ",
        subcategories:
        [
            {
                subcategorytitle: "Серверы",
                element:
                `<div class="--cat-elem">
                    <p style="font-size: 18px;font-weight: 600;line-height: 20px;">Серверы</p>
                    <a href="#">Серверы DELL</a>
                    <a href="#">Серверы Lenovo</a>
                    <a href="#">Серверы HP</a>
                    <div class="help-note">
                            <p>
                            Поможем 
                            сконфигурировать 
                            любой сервер
                        </p>
                    </div>
                </div>`
            },
            {
                subcategorytitle: "Комплектующие",
                element:
                `<div class="--cat-elem">
                    <p style="font-size: 18px;font-weight: 600;line-height: 20px;">Комплектующие</p>
                    <a href="#">Блоки питания</a>
                    <a href="#">Жеские диски и SSD</a>
                    <a href="#">Инфраструктурные опции</a>
                    <a href="#">Контроллеры SAS и SATA</a>
                    <a href="#">Серверное ПО</a>
                    <a href="#">Серверное шасси</a>
                    <a href="#">Сетевые адаптеры</a>
                    <a href="#">Оптические приводы</a>
                </div>`
            },
            {
                subcategorytitle: "Оборудование KVM",
                element:
                `<div class="--cat-elem">
                    <p style="font-size: 18px;font-weight: 600;line-height: 20px;">Оборудование KVM</p>
                    <a href="#">KVM комплектующие</a>
                    <a href="#">KVM переключатели</a>
                </div>`
            }
        ]
    },
    {
        categorytitle: "Коммутаторы",
        subcategories:
        [
            {
                subcategorytitle: "Серверы",
                element:
                `<div class="--cat-elem">
                    <p style="font-size: 18px;font-weight: 600;line-height: 20px;">Серверы</p>
                    <a href="#">Серверы DELL</a>
                    <a href="#">Серверы Lenovo</a>
                    <a href="#">Серверы HP</a>
                    <div class="help-note">
                            <p>
                            Поможем 
                            сконфигурировать 
                            любой сервер
                        </p>
                    </div>
                </div>`
            },
            {
                subcategorytitle: "Комплектующие",
                element:
                `<div class="--cat-elem">
                    <p style="font-size: 18px;font-weight: 600;line-height: 20px;">Комплектующие</p>
                    <a href="#">Блоки питания</a>
                    <a href="#">Жеские диски и SSD</a>
                    <a href="#">Инфраструктурные опции</a>
                    <a href="#">Контроллеры SAS и SATA</a>
                    <a href="#">Серверное ПО</a>
                    <a href="#">Серверное шасси</a>
                    <a href="#">Сетевые адаптеры</a>
                    <a href="#">Оптические приводы</a>
                </div>`
            },
            {
                subcategorytitle: "Оборудование KVM",
                element:
                `<div class="--cat-elem">
                    <p style="font-size: 18px;font-weight: 600;line-height: 20px;">Оборудование KVM</p>
                    <a href="#">KVM комплектующие</a>
                    <a href="#">KVM переключатели</a>
                </div>`
            }
        ]
    },
    {
        categorytitle: "МФУ",
        subcategories:
        [
            {
                subcategorytitle: "Серверы",
                element:
                `<div class="--cat-elem">
                    <p style="font-size: 18px;font-weight: 600;line-height: 20px;">Серверы</p>
                    <a href="#">Серверы DELL</a>
                    <a href="#">Серверы Lenovo</a>
                    <a href="#">Серверы HP</a>
                    <div class="help-note">
                            <p>
                            Поможем 
                            сконфигурировать 
                            любой сервер
                        </p>
                    </div>
                </div>`
            },
            {
                subcategorytitle: "Комплектующие",
                element:
                `<div class="--cat-elem">
                    <p style="font-size: 18px;font-weight: 600;line-height: 20px;">Комплектующие</p>
                    <a href="#">Блоки питания</a>
                    <a href="#">Жеские диски и SSD</a>
                    <a href="#">Инфраструктурные опции</a>
                    <a href="#">Контроллеры SAS и SATA</a>
                    <a href="#">Серверное ПО</a>
                    <a href="#">Серверное шасси</a>
                    <a href="#">Сетевые адаптеры</a>
                    <a href="#">Оптические приводы</a>
                </div>`
            },
            {
                subcategorytitle: "Оборудование KVM",
                element:
                `<div class="--cat-elem">
                    <p style="font-size: 18px;font-weight: 600;line-height: 20px;">Оборудование KVM</p>
                    <a href="#">KVM комплектующие</a>
                    <a href="#">KVM переключатели</a>
                </div>`
            }
        ]
    }
];
let __headermenu__= null;
let __menucatalog__= null;
let __compact= false;
let ___width___= (window.innerWidth > 0) ? window.innerWidth : screen.width;
let __backarrow= document.querySelector(`.${__menucatalog__} .category__container .arrow-back`);
let __btncatalog= document.querySelector(`.${__headermenu__} .btn__catalog`);
__updateelements();
window.addEventListener('resize',()=>{
    ___width___= (window.innerWidth > 0) ? window.innerWidth : screen.width;
    __updateelements();
});
function __fillmenu() {
    for (let __n= 0; __n<__menuelements[__categorychosen]["subcategories"].length; __n++) {
        document.querySelector(`.mc__adapt .category__container .cc__columns`).insertAdjacentHTML('beforeend',__menuelements[__categorychosen]["subcategories"][__n]["element"]);
    }
    for (let __n= 0; __n<__menuelements[__categorychosen]["subcategories"].length; __n++) {
        document.querySelector(`.mc__desktop .category__container .cc__columns`).insertAdjacentHTML('beforeend',__menuelements[__categorychosen]["subcategories"][__n]["element"]);
    }
    for (let __n= 0; __n<__menuelements.length; __n++) {
        if (__n == __categorychosen) {
            document.querySelector(`.mc__adapt .catalog__categories`).insertAdjacentHTML('beforeend',`<div class="--cc-elem --cce-active" id="${__n}"><p>${__menuelements[__n]["categorytitle"]}</p></div>`);
            document.querySelector(`.mc__desktop .catalog__categories`).insertAdjacentHTML('beforeend',`<div class="--cc-elem --cce-active" id="${__n}"><p>${__menuelements[__n]["categorytitle"]}</p></div>`);
        }else{
            document.querySelector(`.mc__adapt .catalog__categories`).insertAdjacentHTML('beforeend',`<div class="--cc-elem" id="${__n}"><p>${__menuelements[__n]["categorytitle"]}</p></div>`);
            document.querySelector(`.mc__desktop .catalog__categories`).insertAdjacentHTML('beforeend',`<div class="--cc-elem" id="${__n}"><p>${__menuelements[__n]["categorytitle"]}</p></div>`);
        }
    }
}
__fillmenu();
function __adaptchange() {
    document.querySelectorAll(`.catalog__categories .--cc-elem`).forEach(__elem=> {
        __elem.addEventListener('click',(ev)=>{
            __categorypage= 1;
            __categorychosen= __elem.getAttribute('id');
            document.querySelector(`.${__menucatalog__} .catalog__categories .--cce-active`).classList.remove("--cce-active");
            __elem.classList.add('--cce-active');
            if (__compact == false) {
                document.querySelector(`.${__menucatalog__} .category__container #cc__catname`).innerHTML= __menuelements[__categorychosen]["categorytitle"];
            }
            __updatemenu();
        });
    });
}
__adaptchange();
function __openmenu() {
    __menuopened= true;
    __updatebtn();
}
__updatemenu();
function __updatemenu() {
    if (__categorypage == 2) {
        if (__compact == true) {
            document.querySelector(`.${__menucatalog__} .catalog__subcategories`).classList.add("hidden");
            document.querySelector(`.${__menucatalog__} .category__container .cc__columns`).insertAdjacentHTML('beforeend',__menuelements[__categorychosen]["subcategories"][__subcategorychosen]["element"]);
        }
    }
    else if (__categorypage == 1) {
        document.querySelectorAll(`.header .${__menucatalog__} .catalog__subcategories .--cc-elem`).forEach(__cceelem=> {
            __cceelem.remove();
        });
        document.querySelectorAll(`.header .${__menucatalog__} .category__container .cc__columns .--cat-elem`).forEach(__catelem=> {
            __catelem.remove();
        });
        if (__compact == true) {
            document.querySelector(`.${__menucatalog__} .catalog__categories`).classList.add("hidden");
            document.querySelector(`.${__menucatalog__} .catalog__subcategories`).classList.remove("hidden");
            for (let __n= 0; __n<__menuelements[__categorychosen]["subcategories"].length; __n++) {
                if (__n == __subcategorychosen) {
                    document.querySelector(`.${__menucatalog__} .catalog__subcategories`).insertAdjacentHTML('beforeend',`<div class="--cc-elem --cce-active" id="${__n}"><p>${__menuelements[__categorychosen]["subcategories"][__n]["subcategorytitle"]}</p></div>`);
                }else{
                    document.querySelector(`.${__menucatalog__} .catalog__subcategories`).insertAdjacentHTML('beforeend',`<div class="--cc-elem" id="${__n}"><p>${__menuelements[__categorychosen]["subcategories"][__n]["subcategorytitle"]}</p></div>`);
                }
            }
            document.querySelectorAll(`.${__menucatalog__} .catalog__subcategories .--cc-elem`).forEach(__elem=> {
                __elem.addEventListener('click',(ev)=>{
                    __categorypage= 2;
                    __subcategorychosen= __elem.getAttribute('id');
                    __updatemenu();
                });
            });
        }else{
            for (let __n= 0; __n<__menuelements[__categorychosen]["subcategories"].length; __n++) {
                document.querySelector(`.${__menucatalog__} .category__container .cc__columns`).insertAdjacentHTML('beforeend',__menuelements[__categorychosen]["subcategories"][__n]["element"]);
            }
        }
        document.querySelector(`.${__menucatalog__} .category__container`).classList.remove("cc-inactive");
    }
    else if (__categorypage == 0) {
        document.querySelector(`.${__menucatalog__} .catalog__categories`).classList.remove("hidden");
        if (__compact == true) {
            document.querySelector(`.${__menucatalog__} .catalog__subcategories`).classList.add("hidden");
        }
        document.querySelector(`.${__menucatalog__} .category__container`).classList.add("cc-inactive");
    }
}
    
function __update() {
__btncatalog= document.querySelector(`.${__headermenu__} .btn__catalog`);
__backarrow= document.querySelector(`.${__menucatalog__} .category__container .arrow-back`);
if (__compact == true) {
    if (document.querySelector(".mc__desktop").classList.contains("--mc-cat-opened") == true) {
        document.querySelectorAll(`.header .mc__desktop .catalog__subcategories .--cc-elem`).forEach(__cceelem=> {
            __cceelem.remove();
        });
        document.querySelector(".mc__desktop").classList.remove("--mc-cat-opened");
        document.querySelector(".mc__adapt").classList.add("--mc-cat-opened");
        __categorypage= 0;
        __subcategorychosen= 0;
        __categorychosen= 0;
        __openmenu();
        __adaptchange();
        __updatemenu();
    }else{
        
    }
} else {
    if (document.querySelector(".mc__adapt").classList.contains("--mc-cat-opened") == true) {
        document.querySelectorAll(`.header .mc__adapt .category__container .cc__columns .--cat-elem`).forEach(__catelem=> {
            __catelem.remove();
        });
        document.querySelectorAll(`.header .mc__adapt .catalog__subcategories .--cc-elem`).forEach(__cceelem=> {
            __cceelem.remove();
        });
        document.querySelector(".mc__adapt").classList.remove("--mc-cat-opened");
        document.querySelector(".mc__desktop").classList.add("--mc-cat-opened");
        __categorypage= 0;
        __subcategorychosen= 0;
        __categorychosen= 0;
        __openmenu();
        __adaptchange();
        __updatemenu();
    }else{
        
    }
}
__btncatalog.addEventListener('mouseover',(ev)=> {
        __openmenu(ev);
    });
    __btncatalog.onclick= (ev)=> {
        document.querySelector(`.${__menucatalog__} .catalog__categories`).classList.remove("hidden");
        document.querySelector(`.${__menucatalog__} .category__container`).classList.add("cc-inactive");
        if (document.querySelector(`.${__headermenu__} .btn__catalog`).classList.contains('--cat-opened')) {
            __menuopened= false;
            __updatebtn();
        }else{
            __openmenu(ev);
        }
    }
}
if (__compact == true) {
    __backarrow.addEventListener('click',(ev)=>{
            if (__categorypage > 0) {
                __categorypage--;
                __updatemenu();
            }
        });
}
__update();
function __updateelements() {
    if (___width___ <= 768)  {
        __headermenu__= "hm__adapt";
        __menucatalog__= "mc__adapt";
        if (!__compact) {
            __compact= true;
            __update();
        }
    }else{
        __headermenu__= "hm__desktop";
        __menucatalog__= "mc__desktop";
        if (__compact) {
            __compact= false;
            __update();
        }
    }
}
function __updatebtn() {
    if (__menuopened == false) {
        document.querySelector(`.hm__adapt .btn__catalog`).innerHTML= "Каталог";
        document.querySelector(`.header .hm__adapt .header__logo img`).src= './image/Logotype.svg';
        document.querySelector(`.header .hm__adapt .header__right .cart img`).src= './image/cart.png';
        document.querySelector(`.hm__adapt .btn__catalog`).classList.remove('--cat-opened');
        document.querySelector(`.${__menucatalog__}`).classList.remove('--mc-cat-opened');
        document.querySelector(`.header .hm__adapt`).classList.remove('--cnt-cat-opened');
        document.querySelector(".header .nav__search input").classList.remove('searchbar-hl');
        document.querySelector(".darken").classList.add('hidden');
        document.querySelectorAll(`.header .hm__adapt .header__right .nomber a`).forEach(a__elem=> {
            a__elem.classList.remove('nmb-cat-opened');
        });

        document.querySelector(`.hm__desktop .btn__catalog`).innerHTML= "Каталог";
        document.querySelector(`.header .hm__desktop .header__logo img`).src= './image/Logotype.svg';
        document.querySelector(`.header .hm__desktop .header__right .cart img`).src= './image/cart.png';
        document.querySelector(`.hm__desktop .btn__catalog`).classList.remove('--cat-opened');
        document.querySelector(`.${__menucatalog__}`).classList.remove('--mc-cat-opened');
        document.querySelector(`.header .hm__desktop`).classList.remove('--cnt-cat-opened');
        document.querySelector(".header .nav__search input").classList.remove('searchbar-hl');
        document.querySelector(".darken").classList.add('hidden');
        document.querySelectorAll(`.header .hm__desktop .header__right .nomber a`).forEach(a__elem=> {
            a__elem.classList.remove('nmb-cat-opened');
        });

        document.querySelectorAll(`.header .${__menucatalog__} .catalog__subcategories .--cc-elem`).forEach(__cceelem=> {
            __cceelem.remove();
        });
        if (__compact == true) {
            document.querySelectorAll(`.header .${__menucatalog__} .category__container .cc__columns .--cat-elem`).forEach(__catelem=> {
                __catelem.remove();
            });
        }
        __categorychosen= 0;
    }else{
        __btncatalog.classList.add('--cat-opened');
        document.querySelector(`.${__menucatalog__}`).classList.add('--mc-cat-opened');
        document.querySelector(`.header .${__headermenu__}`).classList.add('--cnt-cat-opened');
        document.querySelector(".header .nav__search input").classList.add('searchbar-hl');
        document.querySelector(".darken").classList.remove('hidden');
        document.querySelectorAll(`.header .${__headermenu__} .header__right .nomber a`).forEach(a__elem=> {
            a__elem.classList.add('nmb-cat-opened');
        });
        __btncatalog.innerHTML= "Закрыть";
        document.querySelector(`.header .${__headermenu__} .header__logo img`).src= './image/Logotype2.svg';
        document.querySelector(`.header .${__headermenu__} .header__right .cart img`).src= './image/cart2.png';
    }
}