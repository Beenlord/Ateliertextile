<template>
	<main class="layout layout-test">
		<Nuxt class="page" />
	</main>
</template>

<style lang="scss" scoped>
.layout-default {
	height: 100vh;
	overflow: hidden;

	&.layout {
		display: flex;
		flex-direction: column;
	}
	&.layout__middle {
		flex-grow: 1;
		position: relative;
	}
}
</style>
