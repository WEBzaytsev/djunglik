'use strict';

import Swiper from 'swiper';
import { Pagination, Navigation } from 'swiper/modules';

export const ReviewsSlider = () => {
	const slider = document.querySelector('.reviews-slider > div');

	if (!slider || !slider.children) return;

	const reviews = [...slider.children];

	slider.classList.add('swiper-wrapper');
	reviews.forEach((r) => r.classList.add('swiper-slide'));

	new Swiper('.reviews-slider', {
		modules: [Pagination, Navigation],
		loop: true,
		noSwiping: false,
		slidesPerView: 'auto',
		pagination: {
			el: '.swiper-pagination',
			type: 'bullets',
			bulletActiveClass: 'active',
			bulletClass:
				'block opacity-30 bg-white w-4.5 h-4.5 rounded-full cursor-pointer',
			clickable: true,
		},
		navigation: {
			nextEl: '.slider-button-next',
			prevEl: '.slider-button-prev',
		},
	});
};
