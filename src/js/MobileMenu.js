export const MobileMenu = () => {
	const mobMenu = document.getElementById('mob-menu');
	const mobMenuHeaderBg = document.getElementById('mob-menu-header-bg');
	const mobMenuButton = document.getElementById('mob-menu-button');

	if (!mobMenu || !mobMenuHeaderBg || !mobMenuButton) return;

	const subMenus = [...document.querySelectorAll('.menu-item-has-children')];

	mobMenuButton.addEventListener('click', (e) => {
		document.documentElement.scrollTop = 0;
		e.preventDefault();
		document.body.classList.toggle('mob-menu-open');
		document.body.classList.toggle('overflow-hidden');
	});

	if (subMenus.length) {
		subMenus.forEach((subMenu) =>
			subMenu.addEventListener('click', (e) => {
				e.preventDefault();
				e.currentTarget.classList.toggle('active');
			}),
		);
	}
};
