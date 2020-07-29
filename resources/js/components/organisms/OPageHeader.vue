<template>
	<div class="page-header flex justify-between items-center py-1 fixed w-full z-20">
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
};
</script>
<style scoped>
.page-header {
	width: 97vw;
}
</style>
