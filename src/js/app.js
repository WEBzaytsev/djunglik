import { ReviewsSlider } from './ReviewsSlider.js';
import { NewsSlider } from './NewsSlider.js';
import { MobileMenu } from './MobileMenu.js';
import { Modal } from './Modal.js';
import { ServicesSlider } from './ServicesSlider.js';
import { ServicesTabs } from './ServicesTabs.js';
import { Menu } from './Menu.js';
import * as fslightbox from 'fslightbox';

(function () {
	const modalFormButtons = [
		...document.querySelectorAll('[data-modal="form"]'),
	];
	const modalReviewButtons = [
		...document.querySelectorAll('[data-modal="review"]'),
	];

	modalFormButtons.forEach(
		(modalFormButton) =>
			new Modal({
				type: modalFormButton.dataset.modal,
				trigger: modalFormButton,
			}),
	);

	modalReviewButtons.forEach(
		(modalReviewButton) =>
			new Modal({
				type: modalReviewButton.dataset.modal,
				trigger: modalReviewButton,
				reviewId: modalReviewButton.dataset.reviewId,
			}),
	);

	refreshFsLightbox();
	Menu();
	MobileMenu();
	ReviewsSlider();
	NewsSlider();
	ServicesSlider();
	ServicesTabs();
})();
