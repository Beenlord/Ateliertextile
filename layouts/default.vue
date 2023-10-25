<template>
	<main class="layout layout-default">
		<Header />
		<NuxtLink to="/about">About</NuxtLink>
		<NuxtLink to="/">Home</NuxtLink>
		<div class="layout__middle">
			<Nuxt class="page" />
		</div>
		<Icons />
	</main>
</template>

<style lang="scss" scoped>
.layout-default {
	height: 100vh;
	//overflow-y: scroll;
	overflow: hidden;
}
.layout {
	display: flex;
	flex-direction: column;
}
.layout__middle {
	flex-grow: 1;
	position: relative;
}
</style>
