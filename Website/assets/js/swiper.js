let fullscreenSlider = new Swiper('.fullscreen-slider', {
	direction: 'horizontal',
	autoplay: { delay: 3000 },
	slidesPerView: 1,
	loop: true,
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
});

let multipleSlider = new Swiper('.multiple-slider .swiper-container', {
	slidesPerView: 1,
	// spaceBetween: 15,
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	breakpoints: {
    960: {
      slidesPerView: 5,
			spaceBetween: 30,
    }
  }
});

let showcaseSlider = new Swiper('.showcase-slider .swiper-container', {
	slidesPerView: 1,
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	breakpoints: {
    960: {
      slidesPerView: 2,
			spaceBetween: 20,
    }
  }
});