import { object, string } from 'yup';
import { mask } from './utils/mask.js';

const userSchema = object({
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
});

export class FeedbackForm {
	constructor(form) {
		if (!form || !(form instanceof HTMLFormElement)) return;
		this.form = form;
		this.loader = this.form.querySelector('.loader');
		this.statusText = this.form.querySelector('#form-status');

		mask();
		this.form.addEventListener('submit', this.submitHandler.bind(this));
	}

	async validate() {
		const name =
			this.form.querySelector('input[name="feedback-name"]') ||
			this.form.querySelector('input[name="modal-feedback-name"]');
		const phone =
			this.form.querySelector('input[name="feedback-phone"]') ||
			this.form.querySelector('input[name="modal-feedback-phone"]');

		console.log(phone.value.length);

		return await userSchema.validate({
			name: name.value,
			phone: phone.value,
		});
	}

	async submitHandler(e) {
		e.preventDefault();

		try {
			const isValid = await this.validate();
			console.log(isValid);

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
			console.log(e);
			this.statusText.innerHTML = e.message;
			this.statusText.classList.remove('text-green-800');
			this.statusText.classList.add('text-red');
			this.statusText.style.display = 'block';
		}
	}
}
