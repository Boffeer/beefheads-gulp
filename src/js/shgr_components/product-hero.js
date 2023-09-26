window.addEventListener('DOMContentLoaded', (event) => {

	function initPreviewCarousels() {
		if (!document.querySelector('.product-carousel__gallery') && !document.querySelector('.product-carousel__thumbs')) return;

		const heroThumbsCarousels = [...document.querySelectorAll('.product-carousel__thumbs')];
		const heroGalleriesCarousels = [...document.querySelectorAll('.product-carousel__gallery')];

		heroGalleriesCarousels.forEach((carousel, index) => {
			const id = Math.floor(Math.random() * 900000) + 100000;

			carousel.classList.add(`js_product-carousel__gallery-${id}`)
			heroThumbsCarousels[index].classList.add(`js_product-carousel__thumbs-${id}`)

			if (carousel.classList.contains('js_carousel--inited')) return;

			let heroThumbs = new Swiper(`.js_product-carousel__thumbs-${id} .swiper`, {
				spaceBetween: 16,
				slidesPerView: 3,
				navigation: {
					nextEl: `.js_product-carousel__thumbs-${id} .product-carousel__thumbs-next`,
					prevEl: `.js_product-carousel__thumbs-${id} .product-carousel__thumbs-prev`,
				},
				breakpoints: {
					602: {
						slidesPerView: 4,
					}
				}
			});

			let heroGallery = new Swiper(`.js_product-carousel__gallery-${id} .swiper`, {
				spaceBetween: 10,
				slidesPerView: 1.5,
				centeredSlides: true,
				centeredSlidesBounds: true,
				centerInsufficientSlides: true,
				navigation: {
					nextEl: `.js_product-carousel__gallery-${id} .product-carousel__gallery-next`,
					prevEl: `.js_product-carousel__gallery-${id} .product-carousel__gallery-prev`,
				},
				breakpoints: {
					602: {
						slidesPerView: 1,
						centeredSlides: false,
						centeredSlidesBounds: false,
						centerInsufficientSlides: false,
					}
				},
				thumbs: {
					swiper: heroThumbs,
				},
				on: {
					slideChange: function() {
						heroThumbs.slideTo(this.activeIndex);
					},
				},
			});

			heroThumbs.on('slideChange', () => {
				heroGallery.slideTo(heroThumbs.activeIndex);
			})
			heroThumbs.slides.forEach((slide, index) => {
				slide.addEventListener('click', () => {
					heroGallery.slideTo(index);
				})
			})
			if (!carousel) return;
			carousel.classList.add('js_carousel--inited')
		});
	}

	initPreviewCarousels();
	window.initPreviewCarousels = initPreviewCarousels;


	function initPreviewCloser() {
		const preview = document.querySelector('.product-hero-perview');
		if (!preview) return;

		const closer = preview.querySelector('.product-hero-preview__close');
		if (!closer) return;

		closer.addEventListener('click', () => {
			preview.classList.remove('active')
		})
	}
	initPreviewCloser()
	window.initPreviewCloser = initPreviewCloser;

});
