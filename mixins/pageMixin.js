import { mapGetters } from 'vuex';
import Lenis from '@studio-freight/lenis';

export default function(opt) {
	opt = {
		pageName: null,
		useLenis: true,
		...opt,
	};

	return {
		data() {
			return {
				lenis: null,
			};
		},
		computed: {
			...mapGetters({
				siteName: 'getSiteName',
			}),
		},
		head() {
			return {
				title: this.siteName(opt.pageName),
			};
		},
		mounted() {
			if (opt.useLenis) {
				const wrapper = this.$el.parentNode;
				const content = this.$el;

				this.lenis = new Lenis({
					wrapper,
					content,
				});

				this.raf();
			}
		},
		beforeDestroy() {
			if (this.lenis) {
				this.lenis.destroy();
				this.lenis = null;
			}
		},
		methods: {
			raf(time) {
				if (this.lenis) {
					this.lenis.raf(time);
					requestAnimationFrame(this.raf);
				}
			},
		},
	};
};
