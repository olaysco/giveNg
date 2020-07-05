<template>
	<button
		:class="`text-white text-sm bg-blue-500 py-2 px-6 rounded-full hover:bg-white hover:text-blue-500 hover:border-blue-500 font-100`"
		aria-label="button"
		@click="performClick()"
	>
		<slot default />
	</button>
</template>
<script>
export default {
	methods: {
		performClick() {
			this.$router.push("/givetem/1");
		}
	}
};
</script>
<style scoped>
</style>
