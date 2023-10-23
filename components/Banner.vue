<template>
	<section
		class="Banner f-block"
		:class="{
			'Banner_light': theme === 'light',
			'Banner_dark': theme === 'dark',
		}"
	>
		<div
			class="Banner__content f-block__container"
			:class="{
				'Banner__content_left': align === 'left',
				'Banner__content_right': align === 'right',
			}"
		>
			<slot></slot>
		</div>
		<img :src="background" />
	</section>
</template>

<script>
export default {
	props: {
		background: {
			type: String,
			default: '/banner.jpg',
		},
		theme: {
			type: String,
			validator(value) {
				return ['light', 'dark', 'default'].includes(value);
			},
			default: 'default',
		},
		align: {
			type: String,
			validator(value) {
				return ['left', 'right'].includes(value);
			},
			default: 'left',
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

	&_light {
		--banner-color: var(--clr-bronze);
	}

	&_dark {
		--banner-color: var(--clr-white);
	}
}

.Banner__content {
	padding-bottom: rem(6);
	display: flex;
	flex-direction: column;
	justify-content: flex-end;
	z-index: 1;
	color: var(--banner-color);

	&_left {
		align-items: flex-start;
		text-align: left;
	}

	&_right {
		align-items: flex-end;
		text-align: right;
	}
}
</style>
