<template>
	<div class="container-fluid px-10 min-h-screen">
		<OBreadcumb></OBreadcumb>
		<div class="w-100 flex mt-4">
			<OFilterArea class="w-1/4"></OFilterArea>
			<div class="w-3/4"></div>
		</div>
	</div>
</template>
<script>
import OBreadcumb from "../components/organisms/OBreadcumb";
import OFilterArea from "../components/organisms/OFilterArea";
export default {
	components: {
		OBreadcumb,
		OFilterArea,
	},
};
</script>
<style scoped>
.container-fluid {
	padding-top: 100px;
}
</style>
