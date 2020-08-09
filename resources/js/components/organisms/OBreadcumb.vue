<template>
	<div>
		<p class="breadcumb-list">
			<a href="/">Home</a>
			<a href="#">Categories</a>
			<a href="#">{{slug}}</a>
		</p>
	</div>
</template>
<script>
export default {
	computed: {
		slug() {
			return this.$route.params.slug;
		},
	},
};
</script>
<style lang="scss" scoped>
.breadcumb-list {
	@apply text-xs text-gray-700;
	a:not(:last-child) {
		&::after {
			content: " /";
			@apply text-gray-200;
		}
	}
}
</style>
