'use strict';

import Swiper from 'swiper';
import { Pagination, Navigation } from 'swiper/modules';

export const NewsSlider = () => {
	const slider = document.querySelector('.news-slider > div');

	if (!slider || !slider.children) return;

	const news = [...slider.children];

	slider.classList.add('swiper-wrapper');
	news.forEach((r) => r.classList.add('swiper-slide'));

	new Swiper('.news-slider', {
		modules: [Pagination, Navigation],
		loop: true,
		noSwiping: false,
		slidesPerView: 'auto',
		pagination: {
			el: '.news-slider-pagination',
			type: 'bullets',
			bulletActiveClass: 'active',
			bulletClass:
				'block bg-grey-600 w-4.5 h-4.5 rounded-full cursor-pointer',
			clickable: true,
		},
		navigation: {
			nextEl: '.news-slider-button-next',
			prevEl: '.news-slider-button-prev',
		},
	});
};
