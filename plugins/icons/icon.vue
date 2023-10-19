<template>
	<div v-if="id" class="Icon" :class="`Icon-${id}`" :style="`width:${widthValue};height:${heightValue};${color ? `color:${color};` : ''}`">
		<svg class="Icon_inner">
			<use :xlink:href="`#${id}`" />
		</svg>
	</div>
</template>

<script>
export default {
	name: 'Icon',
	props: {
		id: {
			type: String,
			default: null,
		},
		color: {
			type: String,
			default: null,
		},
		width: {
			type: String,
			default: null,
		},
		height: {
			type: String,
			default: null,
		},
	},
	data() {
		return {
			widthValue: this.width || '0px',
			heightValue: this.height || '0px',
		};
	},
	mounted() {
		if (!this.width || !this.height) {
			const el = document.getElementById(this.id);
			if (el) {
				const viewBox = el.getElementsByTagName('svg')[0].getAttribute('viewBox').split(' ');
				if (!this.width) {
					this.widthValue = `${Number(viewBox[2]) / 10}rem`;
				}
				if (!this.height) {
					this.heightValue = `${Number(viewBox[3]) / 10}rem`;
				}
			} else {
				// console.error(`no element with id "${this.id}" in sprite`);
			}
		}
	},
};
</script>

<style lang="scss">
.Icon {
	&_inner {
		width: 100%;
		height: 100%;
		display: block;
		color: inherit;
	}
}
</style>
