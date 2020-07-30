<template>
	<div
		class="page-header flex justify-between items-center py-1 fixed w-full z-20 shadow-md"
		:class="[inHome?'bg-blue-deep':'']"
	>
		<div class="flex-shrink-0 ml-2 md:ml-10 cursor-pointer">
			<router-link to="/">
				<img class="w-16 h-auto" src="/img/giveng-logo-light.svg" alt="logo" />
			</router-link>
		</div>
		<MMenu />
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
	},
};
</script>
<style lang="scss" scoped>
.page-header {
	width: calc(100vw - 16px);
	@media (screen and max-width: 769px) {
		width: calc(100vw);
	}
}
</style>
