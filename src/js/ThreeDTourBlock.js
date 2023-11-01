export class ThreeDTourBlock {
	images = document.querySelectorAll('.fade-in-slide');
	currentIndex = 0;

	constructor() {
		if (!this.images.length) return;

		this.showImage(this.currentIndex);
		setTimeout(this.fadeInNextImage.bind(this), 2000);
	}

	showImage(index) {
		this.images[index].style.opacity = 1;
		this.images[index].style.visibility = 'visible';
	}

	hideImage(index) {
		this.images[index].style.opacity = 0;
		this.images[index].style.visibility = 'hidden';
	}

	fadeInNextImage() {
		this.hideImage(this.currentIndex);
		this.currentIndex = (this.currentIndex + 1) % this.images.length;
		this.showImage(this.currentIndex);

		setTimeout(this.fadeInNextImage.bind(this), 2000);
	}
}
