<template>
	<div
		:class="[!loading?'givetem-group p-8 grid grid-cols-2 md:grid-cols-4 xl:grid-cols-6 grid-flow-row': 'flex justify-center', 'mt-8']"
	>
		<a-loader v-if="loading">
			<span class="text-xs text-center text-gray-500">fetching ...</span>
		</a-loader>
		<givetem-card v-else v-for="(givetem, i) in givetems" :givetem="givetem" :key="i" />
	</div>
</template>
<script>
import ALoader from "../atoms/ALoader";
import GivetemCard from "../molecules/GivetemCard";
export default {
	components: {
		GivetemCard,
		ALoader,
	},
	data() {
		return {
			itval: null,
			loading: true,
		};
	},
	computed: {
		givetems() {
			return this.$store.state.givetemStore.allGivetems;
		},
	},
	mounted() {
		this.itval = setTimeout(() => {
			this.loading = false;
		}, 3000);
	},
	beforeDestroy() {
		clearInterval(this.itval);
	},
};
</script>
<style scoped>
.givetem-group {
	justify-items: center;
	@apply row-gap-12;
}
</style>
