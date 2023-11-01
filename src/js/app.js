import { ReviewsSlider } from './ReviewsSlider.js';
import { NewsSlider } from './NewsSlider.js';
import { MobileMenu } from './MobileMenu.js';
import { Modal } from './Modal.js';
import { ServicesSlider } from './ServicesSlider.js';
import { ServicesTabs } from './ServicesTabs.js';
import { Menu } from './Menu.js';
import * as fslightbox from 'fslightbox';
import { ValuesSlider } from './ValuesSlider.js';
import { FeedbackForm } from './FeedbackForm.js';
import { ThreeDTourBlock } from './ThreeDTourBlock.js';

(function () {
	const modalFormButtons = [
		...document.querySelectorAll('[data-modal="form"]'),
	];
	const modalReviewButtons = [
		...document.querySelectorAll('[data-modal="review"]'),
	];

	const forms = [
		...document.querySelectorAll('form[data-form="djun-feedback"]'),
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

	forms.forEach((form) => new FeedbackForm(form));

	refreshFsLightbox();
	Menu();
	MobileMenu();
	ReviewsSlider();
	NewsSlider();
	ServicesSlider();
	ServicesTabs();
	ThreeDTourBlock();
	ValuesSlider();
})();
