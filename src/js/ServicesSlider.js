'use strict';

import Swiper from 'swiper';
import { Pagination, Navigation } from 'swiper/modules';

export const ServicesSlider = () => {
	const slider = document.querySelector('.services-slider > div');

	if (!slider || !slider.children) return;

	const service = [...slider.children];

	slider.classList.add('swiper-wrapper');
	service.forEach((r) => r.classList.add('swiper-slide'));

	const minSlideWidth = 605;
	const totalWidth = minSlideWidth * service.length;
	slider.style.width = `${totalWidth}px`;

	new Swiper('.services-slider', {
		modules: [Pagination, Navigation],
		loop: false,
		noSwiping: false,
		slidesPerView: 'auto',
		pagination: {
			el: '.services-slider-pagination',
			type: 'bullets',
			bulletActiveClass: 'active',
			bulletClass:
				'block bg-grey-600 w-4.5 h-4.5 rounded-full cursor-pointer',
			clickable: true,
		},
		navigation: {
			nextEl: '.services-slider-button-next',
			prevEl: '.services-slider-button-prev',
		},
	});
};
