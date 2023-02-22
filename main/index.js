/*LAST UPDATE - 02.21.2023 8:46 PM*/
if (document.querySelector('.contact-block .cross-close') != null) {
    document.querySelector('.contact-block .cross-close').addEventListener('click',()=>{
        document.querySelector('.contact-block').remove();
    });
}
document.querySelector('.nav__search .nav__search-ico').addEventListener('click',()=>{
    document.querySelector('.nav__search input').focus();
});
let __inputmin= document.querySelector('.filter-content-elem .range-box .prc-min input');
let __inputmax= document.querySelector('.filter-content-elem .range-box .prc-max input');
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