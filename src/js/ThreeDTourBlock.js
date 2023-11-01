import Swiper from 'swiper';
import { Autoplay, EffectFade } from 'swiper/modules';

export const ThreeDTourBlock = () => {
	const slider = document.querySelector('.virtual-tour-slider > div');

	if (!slider || !slider.children) return;

	const items = [...slider.children];

	slider.classList.add('swiper-wrapper');
	items.forEach((r) => r.classList.add('swiper-slide'));

	new Swiper('.virtual-tour-slider', {
		modules: [Autoplay, EffectFade],
		loop: true,
		speed: 1500,
		effect: 'fade',
		noSwiping: true,
		slidesPerView: 1,
		fadeEffect: {
			crossFade: true,
		},
		autoplay: {
			delay: 1500,
		},
	});
};
