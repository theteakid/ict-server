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
if (document.querySelector('.rb-pricerange') != null) {
    let __inputmin= document.querySelector('.rb-pricerange .prc-min input');
    let __inputmax= document.querySelector('.rb-pricerange .prc-max input');
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