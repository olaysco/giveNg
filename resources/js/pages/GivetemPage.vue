<template>
	<div class="givetem-page flex gap-2 flex-col flex-col-reverse md:flex-row">
		<GiverInfo class="w-full md:w-2/6 mt-6 md:mt-0"></GiverInfo>
		<GivetemInfo class="w-full md:w-4/6"></GivetemInfo>
	</div>
</template>
<script>
import GivetemInfo from "../components/organisms/OGivetemInfo";
import GiverInfo from "../components/organisms/OGiverInfo";
import { mapActions } from "vuex";
export default {
	components: {
		GivetemInfo,
		GiverInfo,
	},
	methods: {
		...mapActions(["fetchGivetemById"]),
	},
	async beforeMount() {
		const res = await this.fetchGivetemById(this.$route.params.id);
		console.log(res);
	},
};
</script>
<style scoped>
.givetem-page {
	min-height: 60vh;
	padding-top: 100px;
	@apply px-10;
}
</style>
