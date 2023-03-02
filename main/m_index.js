/*LAST UPDATE - 02.21.2023 8:46 PM*/
document.querySelector('.contact-block .cross-close').addEventListener('click',()=>{
    document.querySelector('.contact-block').remove();
});
document.querySelector('.nav__search .nav__search-ico').addEventListener('click',()=>{
    document.querySelector('.nav__search input').focus();
});

$('#search  input[name=\'search\']').bind('click', function(e) {
        if (e.key == 13) {
        url = $('base').attr('href') + 'index.php?route=product/search';

        var search = $('input[name=\'search\']').attr('value');

        if (search) {
            url += '&search=' + encodeURIComponent(search);
        }

        location = url;
    }

});