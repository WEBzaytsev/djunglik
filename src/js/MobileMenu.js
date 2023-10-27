export const MobileMenu = () => {
	const mobMenu = document.getElementById('mob-menu');
	const mobMenuHeaderBg = document.getElementById('mob-menu-header-bg');
	const mobMenuButton = document.getElementById('mob-menu-button');

	if (!mobMenu || !mobMenuHeaderBg || !mobMenuButton) return;

	const subMenus = [
		...document.querySelectorAll(
			'.mob-main-navigation .menu-item-has-children',
		),
	];

	mobMenuButton.addEventListener('click', (e) => {
		document.documentElement.scrollTop = 0;
		e.preventDefault();
		document.body.classList.toggle('mob-menu-open');
		document.body.classList.toggle('overflow-hidden');
	});

	if (subMenus.length) {
		subMenus.forEach((subMenu) => {
			const link = subMenu.querySelector('a[href="#"]');
			link.addEventListener('click', (e) => {
				e.preventDefault();
				subMenu.classList.toggle('active');
			});
		});
	}
};
