<template>
	<div
		class="page-header flex justify-between items-center py-1 fixed w-full z-20 shadow-md"
		:class="[headerBg]"
	>
		<div class="flex-shrink-0 ml-2 md:ml-10 cursor-pointer">
			<router-link to="/">
				<img class="w-16 h-auto" src="/img/giveng-logo-light.svg" alt="logo" />
			</router-link>
		</div>
		<MMenu class="md:mr-6" />
	</div>
</template>
<script>
import MMenu from "../molecules/MMenu";
export default {
	components: {
		MMenu,
	},
	computed: {
		inHome() {
			return this.$route.path === "/";
		},
		headerBg() {
			return this.$store.state.uiStore.headerBg;
		},
	},
};
</script>
<style lang="scss" scoped>
.page-header {
	width: calc(100vw);
	@media (screen and max-width: 769px) {
		width: calc(100vw);
		padding: 0px 8px 0px 0px;
	}
}
</style>
