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
		document.querySelector(".header .header__logo img").src= 'wp-content/themes/ictserver/assets/image/Logotype2.svg';
		document.querySelector(".header .header__right .cart img").src= 'wp-content/themes/ictserver/assets/image/cart2.png';
	}else{
		ev.target.innerHTML= "Каталог";
		document.querySelector(".header .header__logo img").src= 'wp-content/themes/ictserver/assets/image/Logotype.svg';
		document.querySelector(".header .header__right .cart img").src= 'wp-content/themes/ictserver/assets/image/cart.png';
	}
});