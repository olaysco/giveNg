<template>
	<div>
		<div class="bg-white shadow-md rounded-md fixed w-inherit">
			<div class="filter-header p-3 font-semibold">
				<a href="#" class="flex justify-between">
					Filters
					<IFilter />
				</a>
			</div>
			<hr />
			<div class="filter-body p-3 text-xs">
				<div>
					<p class="text-sm font-semibold text-gray-700 mb-2">Category</p>
					<div class="input-group mb-2" v-for="(category, i) in categories" :key="`cat${i}`">
						<input
							type="checkbox"
							name="category"
							:id="category.slug"
							class="mr-2"
							:value="category.slug"
							v-model="filter.category"
						/>
						<label :for="category.slug">{{category.name}}</label>
					</div>
				</div>
				<div>
					<p class="text-sm font-semibold text-gray-700 mb-2 mt-4">Location</p>
					<a href="#" class="flex justify-between">
						Any Location
						<IMapMarker width="12" height="12" />
					</a>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
import IMapMarker from "../icons/IMapMarker";
import IFilter from "../icons/IFilter";
import { mapState } from "vuex";
export default {
	components: {
		IFilter,
		IMapMarker,
	},
	data() {
		return {
			filter: {
				category: [],
			},
		};
	},
	computed: {
		categories() {
			return this.$store.state.givetemStore.givetemCategories;
		},
	},
	created() {
		this.filter.category.push(this.$route.params.slug);
	},
};
</script>
<style scoped>
</style>
