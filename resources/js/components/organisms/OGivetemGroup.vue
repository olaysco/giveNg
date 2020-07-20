<template>
	<div
		:class="[!loading?'givetem-group p-8 grid grid-cols-2 md:grid-cols-4 xl:grid-cols-6 grid-flow-row': 'flex justify-center', 'mt-8']"
	>
		<a-loader v-if="loading">
			<span class="text-xs text-center text-gray-500">fetching ...</span>
		</a-loader>
		<givetem-card
			v-else
			v-for="(givetem, i) in [...givetems, ...givetems]"
			:givetem="givetem"
			:key="i"
		/>
	</div>
</template>
<script>
import ALoader from "../atoms/ALoader";
import GivetemCard from "../molecules/GivetemCard";
export default {
	components: {
		GivetemCard,
		ALoader
	},
	data() {
		return {
			itval: null,
			loading: true
		};
	},
	computed: {
		givetems() {
			return [
				{
					image: "free-bag.png",
					desc:
						"This school is for kids between the age of 5 -8 and in a very good condition",
					giver: "Tijadeen Josh",
					title: "school bag",
					quality: 70,
					id: 1
				},
				{
					image: "free-shoe.png",
					desc:
						"Sneakers bought in 2015 but rarely used in about 5 outings, giving it out free",
					giver: "Mesh Goldman",
					title: "Sneakers",
					quality: 50,
					id: 2
				},
				{
					image: "free-book.png",
					desc:
						"4 inspirational and 1 romantic novel books, that are taking up space In my library",
					giver: "salisu white",
					title: "Books",
					quality: 90,
					id: 3
				}
			];
		}
	},
	mounted() {
		this.itval = setTimeout(() => {
			this.loading = false;
		}, 3000);
	},
	beforeDestroy() {
		clearInterval(this.itval);
	}
};
</script>
<style scoped>
.givetem-group {
	justify-items: center;
	@apply row-gap-12;
}
</style>
