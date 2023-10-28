'use strict';

import Swiper from 'swiper';
import { Pagination } from 'swiper/modules';

export const ValuesSlider = () => {
	if (window.innerWidth >= 1024) return;

	const slider = document.querySelector('.values-slider > div');

	if (!slider || !slider.children) return;

	const values = [...slider.children];

	slider.classList.add('swiper-wrapper');
	values.forEach((r) => {
		const wrapper = document.createElement('div');
		wrapper.classList.add('swiper-slide');
		const clonedElement = r.cloneNode(true);
		wrapper.appendChild(clonedElement);
		r.parentNode.replaceChild(wrapper, r);
	});

	new Swiper('.values-slider', {
		modules: [Pagination],
		loop: false,
		noSwiping: false,
		slidesPerView: 'auto',
		pagination: {
			el: '.values-slider-pagination',
			type: 'bullets',
			bulletActiveClass: 'active',
			bulletClass:
				'block bg-grey-600 w-4.5 h-4.5 rounded-full cursor-pointer',
			clickable: true,
		},
	});
};
