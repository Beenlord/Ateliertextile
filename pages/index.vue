<template>
	<main class="page_index">
		<Banner
			background="/pages/index/images/00.jpg"
		/>
	</main>
</template>

<script>
import pageMixin from '@/mixins/pageMixin.js';

export default {
	mixins: [
		pageMixin({
			pageName: 'Домашняя',
		}),
	],
};
</script>
