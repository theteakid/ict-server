/*LAST UPDATE - 02.21.2023 8:46 PM*/
if (document.querySelector('.contact-block .cross-close') != null) {
    document.querySelector('.contact-block .cross-close').addEventListener('click',()=>{
        document.querySelector('.contact-block').remove();
    });
}
document.querySelector('.nav__search .nav__search-ico').addEventListener('click',()=>{
    document.querySelector('.nav__search input').focus();
});
if (document.querySelector('.rb-disknum') != null) {
    let __inputmin= document.querySelector('.rb-disknum .prc-min input');
    let __inputmax= document.querySelector('.rb-disknum .prc-max input');
    __inputmin.addEventListener('change',(ev)=>{
        if (ev.target.value == "" || ev.target.value <= 0) {
            ev.target.value= 1;
        }
        if (ev.target.value > 32) {
            ev.target.value= 32;
        }
    });
    __inputmax.addEventListener('change',(ev)=>{
        if (ev.target.value == "" || ev.target.value <= 0) {
            ev.target.value= 1;
        }
        if (ev.target.value > 32) {
            ev.target.value= 32;
        }
    });
}
let __inputmin= document.querySelector('.rb-pricerange .prc-min input');
let __inputmax= document.querySelector('.rb-pricerange .prc-max input');
if (document.querySelector('.rb-pricerange') != null) {
    __inputmin.addEventListener('change',(ev)=>{
        if (ev.target.value == "" || ev.target.value < 0) {
            ev.target.value= 0;
        }
        if (ev.target.value > 3000000) {
            ev.target.value= 3000000;
        }
    });
    __inputmax.addEventListener('change',(ev)=>{
        if (ev.target.value == "" || ev.target.value < 0) {
            ev.target.value= 0;
        }
        if (ev.target.value > 3000000) {
            ev.target.value= 3000000;
        }
    });
}
let __pricerange= document.querySelector(".price-range-slider");
if (__pricerange != null) {
    let __minslider= __pricerange.querySelector(".price-range-slider .prs-min input");
    let __maxslider= __pricerange.querySelector(".price-range-slider .prs-max input");
    __minslider.addEventListener('input',()=>{
        __sliderupdate();
    });
    __maxslider.addEventListener('input',()=>{
        __sliderupdate();
    });
    __sliderupdate();
    function __sliderupdate() {
        let __minpercent= (__minslider.value/__minslider.max)*100;
        let __maxpercent= (__maxslider.value/__maxslider.max)*100;
        if (__maxpercent-__minpercent < 0) {
            __inputmin.value= __maxslider.value;
            __inputmax.value= __minslider.value;
            __pricerange.style.background= `linear-gradient(to right, #e8e8e8 ${__maxpercent}%, #2560DC ${__maxpercent}%, #2560DC ${__minpercent}%, #e8e8e8 ${__minpercent}%)`;
        }else{
            __inputmin.value= __minslider.value;
            __inputmax.value= __maxslider.value;
            __pricerange.style.background= `linear-gradient(to right, #e8e8e8 ${__minpercent}%, #2560DC ${__minpercent}%, #2560DC ${__maxpercent}%, #e8e8e8 ${__maxpercent}%)`;
        }
        //__maxslider.style.background= `linear-gradient(to right, #e8e8e800 ${50}%, #2560DC ${50}%, #2560DC ${__percent}%, #e8e8e8 ${__percent}%)`;
    }
}