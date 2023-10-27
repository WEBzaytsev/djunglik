export const Menu = () => {
	const menuItemsContainsChildren = [
		...document.querySelectorAll(
			'.main-navigation .menu-item-has-children a',
		),
	];

	menuItemsContainsChildren.forEach((item) =>
		item.addEventListener('click', (e) => {
			if (e.target !== e.currentTarget) return;

			const href = e.currentTarget.getAttribute('href').trim();
			if (href === '' || href === '#') e.preventDefault();
		}),
	);
};
