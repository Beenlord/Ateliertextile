<template>
	<div class="Penis">
		<div class="Penis__static Penis__static_top">
			<slot name="static-top"></slot>
		</div>
		<div class="Penis__scroll-wrapper">
			<div class="Penis__scroll">
				<slot></slot>
			</div>
		</div>
		<div class="Penis__static Penis__static_bottom">
			<slot name="static-bottom"></slot>
		</div>
	</div>
</template>

<script>
import Lenis from '@studio-freight/lenis';

export default {
	props: {
		off: {
			type: Boolean,
			default: false,
		},
	},
	data() {
		return {
			penis: null,
			penisEvents: null,
			penisWrapper: null,
			penisContent: null,
		};
	},
	mounted() {
		this.penisEvents = this.$el;
		this.penisWrapper = this.$el.querySelector('.Penis__scroll-wrapper');
		this.penisContent = this.$el.querySelector('.Penis__scroll');

		this._mountPenis();
	},
	beforeDestroy() {
		this.destroyPenis();
	},
	methods: {
		_mountPenis() {
			if (!this.off) {
				this.penis = new Lenis({
					eventsTarget: this.penisEvents,
					wrapper: this.penisWrapper,
					content: this.penisContent,
				});

				this.penis.on('scroll', (v) => this.$emit('scroll', v));

				requestAnimationFrame(this._startRaf);
			}
		},
		_startRaf(time) {
			if (this.penis) {
				this.penis.raf(time);
				requestAnimationFrame(this._startRaf);
			}
		},
		/**
		 * Уничтожает экземпляр навешанный на комопнент
		 */
		destroyPenis() {
			if (this.penis) {
				this.penis.off('scroll');
				this.penis.destroy();
				this.penis = null;
			}
		},
		/**
		 * Пролностью реинициализирует скролл
		 */
		remountPenis() {
			this.destroyPenis();
			this._mountPenis();
		},
	},
};
</script>

<style
	lang="scss"
	scoped
>
.Penis {
	position: absolute;
	inset: 0;
	overflow: hidden;
	z-index: 2;
}
.Penis__scroll-wrapper {
	position: absolute;
	inset: 0;
	overflow-y: scroll;
	z-index: 2;
}
.Penis__static {
	position: absolute;
	inset: 0;
	pointer-events: none;

	& > * {
		pointer-events: all;
	}

	&_top {
		z-index: 3;
	}

	&_bottom {
		z-index: 1;
	}
}
</style>
