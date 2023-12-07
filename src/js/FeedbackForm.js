import { number, object, string } from 'yup';
import { mask } from './utils/mask.js';

export class FeedbackForm {
	userSchema = null;
	ageRange = null;
	ageRangeCircle = null;
	isDragging = false;

	constructor(form) {
		if (!form || !(form instanceof HTMLFormElement)) return;
		this.form = form;
		this.loader = this.form.querySelector('.loader');
		this.statusText = this.form.querySelector('.form-status');

		const userSchemaObject = {
			name: string()
				.required('Заполните имя')
				.min(
					2,
					'Введите корректное имя. <br>Имя должно содержать не менее 2х букв',
				)
				.max(
					25,
					'Введите корректное имя. <br>Имя должно содержать не олее 25х букв',
				),
			phone: string()
				.required('Заполните номер телефона')
				.min(15, 'Некорректный номер телефона'),
		};

		const ageInput = this.form.querySelector(
			'input[name="section-feedback-age"]',
		);

		if (ageInput) {
			ageInput.addEventListener('input', this.handleAgeInput.bind(this));
			this.ageRange = this.form.querySelector('.age-range');
			this.ageRangeCircle = this.form.querySelector('.age-range-circle');
			this.ageRangeCircle.addEventListener(
				'mousedown',
				function (e) {
					this.isDragging = true;
					this.handleDrag(e);
				}.bind(this),
			);
			this.ageRangeCircle.addEventListener(
				'touchstart',
				function (e) {
					this.isDragging = true;
					this.handleDrag(e);
				}.bind(this),
			);

			document.addEventListener(
				'mousemove',
				function (e) {
					if (this.isDragging) {
						this.handleDrag(e);
					}
				}.bind(this),
			);
			document.addEventListener(
				'touchmove',
				function (e) {
					if (this.isDragging) {
						this.handleDrag(e);
					}
				}.bind(this),
			);

			document.addEventListener(
				'mouseup',
				function () {
					this.isDragging = false;
				}.bind(this),
			);
			document.addEventListener(
				'touchend',
				function () {
					this.isDragging = false;
				}.bind(this),
			);

			userSchemaObject['age'] = number()
				.required('Укажите возраст')
				.min(1, 'Минимальный возраст - 1 год')
				.max(5, 'Максимальный возраст - 5 лет');
		}

		this.userSchema = object(userSchemaObject);

		mask();
		this.form.addEventListener('submit', this.submitHandler.bind(this));
	}

	handleDrag(e) {
		e.preventDefault();
		const clientX = e.touches ? e.touches[0].clientX : e.clientX;

		const containerRect =
			this.ageRange.parentElement.getBoundingClientRect();
		const offsetX = clientX - containerRect.left;
		const percentage = Math.max(
			0,
			Math.min(1, offsetX / containerRect.width),
		);

		const minValue = 0;
		const maxValue = 5;
		this.form.querySelector('input[name="section-feedback-age"]').value =
			Math.round(percentage * (maxValue - minValue));

		const circlePosition = (percentage * 100).toFixed(2);
		this.ageRange.style.maxWidth = circlePosition + '%';
	}

	handleAgeInput(e) {
		const input = e.currentTarget;
		const value = Number(input.value.trim());

		if (input.value.trim() !== '' && isNaN(value)) {
			input.value = '1';
			this.ageRange.style.maxWidth = '20%';
			return;
		}

		if (value < 0) {
			input.value = '0';
			this.ageRange.style.maxWidth = '0%';
			return;
		}

		if (value > 5) {
			input.value = '5';
			this.ageRange.style.maxWidth = '100%';
			return;
		}

		this.ageRange.style.maxWidth = `${(100 / 5) * value}%`;
	}

	async validate() {
		const name =
			this.form.querySelector('input[name="feedback-name"]') ||
			this.form.querySelector('input[name="section-feedback-name"]') ||
			this.form.querySelector('input[name="modal-feedback-name"]');
		const phone =
			this.form.querySelector('input[name="feedback-phone"]') ||
			this.form.querySelector('input[name="section-feedback-phone"]') ||
			this.form.querySelector('input[name="modal-feedback-phone"]');
		const age = this.form.querySelector(
			'input[name="section-feedback-age"]',
		);

		const schema = {
			name: name.value,
			phone: phone.value,
		};

		if (age) {
			schema['age'] = age.value;
		}

		return await this.userSchema.validate(schema);
	}

	async submitHandler(e) {
		e.preventDefault();

		try {
			const isValid = await this.validate();

			const url = this.form.action;
			const method = this.form.method;
			this.loader.classList.add('active');

			fetch(url, {
				method: method,
				body: new FormData(this.form),
			})
				.then((res) => {
					if (res.ok) {
						this.form.reset();
						this.statusText.innerHTML =
							'Спасибо за вашу заявку! <br>Наш менеджер свяжется с Вами в ближайшее время';
						this.statusText.classList.remove('text-red');
						this.statusText.classList.add('text-green-800');
					}
				})
				.catch(() => {
					this.statusText.innerHTML =
						'Ошибка сервера. Попробуйте позже';
					this.statusText.classList.remove('text-green-800');
					this.statusText.classList.add('text-red');
				})
				.finally(() => {
					this.statusText.style.display = 'block';
					this.loader.classList.remove('active');
				});
		} catch (e) {
			this.statusText.innerHTML = e.message;
			this.statusText.classList.remove('text-green-800');
			this.statusText.classList.add('text-red');
			this.statusText.style.display = 'block';
		}
	}
}
