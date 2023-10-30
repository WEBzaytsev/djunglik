let slideIndex = 0;

export const ThreeDTourBlock = () => {
	const images = [...document.querySelectorAll('.three-d-tour-slide')];

	if (!images.length) return;

	let i;

	for (i = 0; i < images.length; i++) {
		images[i].style.display = 'none';
	}

	slideIndex++;
	if (slideIndex > images.length) {
		slideIndex = 1;
	}

	images[slideIndex - 1].style.display = 'block';

	setTimeout(ThreeDTourBlock, 3000);
};
