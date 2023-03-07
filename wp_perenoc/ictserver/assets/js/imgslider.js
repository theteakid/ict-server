__imgslider= document.querySelector(".img-slider");
__is_elems_all= __imgslider.querySelectorAll(".is-elem");
__is_elems_all.forEach(elem => {
    elem.style= `background-image: url('${elem.getAttribute('url')}')`
    elem.addEventListener('click',()=>{
        __imgslider.querySelector(".is-elem-active").classList.remove('is-elem-active');
        elem.classList.add('is-elem-active');
        document.querySelector(".title-cont .prod-img-preview img").src= elem.getAttribute('url');
    });
});
