<template>
	<div class="Banner f-block">
		<img
			:src="background"
			alt=""
		/>
		<div class="Banner__content f-block__container"></div>
	</div>
</template>

<script>
export default {
	props: {
		background: {
			type: String,
			default: '/banner.jpg',
		},
	},
};
</script>

<style
	lang="scss"
	scoped
>
@import "../assets/style/scope";

.Banner {
	height: rem(52.5);
	min-height: 420px;
	position: relative;
	overflow: hidden;

	& > img {
		width: 100%;
		min-width: 100%;
		height: 100%;
		min-height: 100%;
		position: absolute;
		inset: 0 0 0 0;
		object-fit: cover;
	}
}
</style>
