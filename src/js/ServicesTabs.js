'use strict';

export const ServicesTabs = () => {
	const tabs = [...document.querySelectorAll('p[data-tab-id]')];
	const tabsContents = [...document.querySelectorAll('div[data-tab]')];

	if (!tabs || !tabsContents) return;

	tabs.forEach((tab) =>
		tab.addEventListener('click', (e) => {
			e.preventDefault();

			const id = e.currentTarget.dataset.tabId;

			tabs.forEach((tab) => tab.classList.remove('active'));
			tabsContents.forEach((tabContent) =>
				tabContent.classList.remove('active'),
			);

			e.currentTarget.classList.add('active');
			tabsContents
				.find((tabContent) => tabContent.dataset.tab === id)
				.classList.add('active');
		}),
	);
};
