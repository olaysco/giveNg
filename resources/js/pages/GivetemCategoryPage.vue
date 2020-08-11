<template>
	<div class="container-fluid px-10 min-h-screen">
		<OBreadcumb></OBreadcumb>
		<div class="w-100 flex flex-col md:flex-row mt-4">
			<OFilterArea class="w-full md:w-1/4 hidden md:block"></OFilterArea>
			<OGivetemList class="w-full md:w-3/4"></OGivetemList>
		</div>
	</div>
</template>
<script>
import OBreadcumb from "../components/organisms/OBreadcumb";
import OFilterArea from "../components/organisms/OFilterArea";
import OGivetemList from "../components/organisms/OGivetemList";
export default {
	components: {
		OBreadcumb,
		OFilterArea,
		OGivetemList,
	},
	created() {
		this.$store.commit("setHeaderBg", "bg-white");
	},
};
</script>
<style scoped>
</style>
