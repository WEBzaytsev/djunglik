export const Modal = class {
	modal = document.getElementById('modal');
	modalContent = document.getElementById('modal-content');
	hideModalCross = document.getElementById('hide-modal-cross');
	lastOpenedModal = null;

	/**
	 * @param {Object} options - The options object.
	 * @param {string} options.type - The type of action to perform. Should be 'form' or 'review'.
	 * @param {HTMLElement} options.trigger - The HTML element that triggers the action.
	 * @param {string} [options.reviewId] - (Optional) The review identifier if `options.type` is 'review'.
	 * @returns {void}
	 */
	constructor(options) {
		this.type = options.type;
		this.trigger = options.trigger;
		this.reviewId = options.reviewId;

		if (!this.trigger || !this.type) return;

		this.init();
	}

	isNewModal() {
		return (
			!this.lastOpenedModal ||
			this.lastOpenedModal?.type !== this.type ||
			this.lastOpenedModal?.reviewId !== this.reviewId
		);
	}

	show(e) {
		e.preventDefault();
		const isNew = this.isNewModal();

		this.create();
		this.modal.classList.add('active');
		document.body.classList.add('overflow-hidden');

		if (isNew) {
			switch (this.type) {
				case 'form':
					const form = new ModalForm();
					form.get_html().then(
						(res) => (this.modalContent.innerHTML = res.data),
					);
					break;
				case 'review':
					const review = new ModalReview(Number(this.reviewId));
					review
						.get_html()
						.then(
							(res) => (this.modalContent.innerHTML = res.data),
						);
			}
		}
	}

	hide() {
		this.modal.classList.remove('active');
		document.body.classList.remove('overflow-hidden');
	}

	create() {
		if (!this.isNewModal()) return;

		this.destroy();

		this.lastOpenedModal.type = this.type;
		this.lastOpenedModal.trigger = this.trigger;

		if (this.reviewId) this.lastOpenedModal.reviewId = this.reviewId;
	}

	destroy() {
		this.lastOpenedModal = {};
		this.modalContent.innerHTML = '';
	}

	init() {
		this.trigger.addEventListener('click', this.show.bind(this));
		this.hideModalCross.addEventListener('click', this.hide.bind(this));
		this.modal.addEventListener('click', (e) => {
			if (e.target === e.currentTarget) this.hide();
		});
	}
};

class ModalForm {
	constructor() {
		console.log('form modal');
	}

	async get_html() {
		try {
			const body = new FormData();
			body.set('action', 'djun_get_feedback_form');
			body.set('feedback_form_nonce', options.feedback_form_nonce);
			const response = await fetch(options.ajax_url, {
				method: 'post',
				body,
			});

			return await response.json();
		} catch (e) {
			return {
				success: false,
				data: e.message,
			};
		}
	}
}

class ModalReview {
	/** @param {number} id */
	constructor(id) {
		this.reviewId = id;
		console.log('Review id: ', id);
	}

	async get_html() {
		try {
			const body = new FormData();
			body.set('action', 'djun_get_review');
			body.set('get_review_nonce', options.get_review_nonce);
			body.set('review_id', this.reviewId);
			const response = await fetch(options.ajax_url, {
				method: 'post',
				body,
			});

			return await response.json();
		} catch (e) {
			return {
				success: false,
				data: e.message,
			};
		}
	}
}
