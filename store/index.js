export const state = () => ({
	siteName: 'Пошив штор Ателье',
});

export const getters = {
	getSiteName(state) {
		return (pageName = null) => {
			if (pageName) {
				return `${state.siteName} - ${pageName}`;
			} else {
				return state.siteName;
			}
		};
	},
};
