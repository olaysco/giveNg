<template>
	<div class="p-8 grid grid-cols-4 md:grid-cols-6 xl:grid-cols-6 grid-flow-row gap-2">
		<categoryCard v-for="(category, i) in categories" :key="`category${i}`" :category="category"></categoryCard>
	</div>
</template>
<script>
import categoryCard from "../molecules/MCategoryCard";
export default {
	data() {
		return {
			categories: [
				{ name: "Wares", icon: "ICloth", slug: "wares" },
				{ name: "Food & Beverages", icon: "IFood", slug: "food" },
				{ name: "Protective Mask", icon: "IMask", slug: "mask" },
				{ name: "House Furniture", icon: "IFurniture", slug: "furniture" },
				{ name: "Healthcare & wellbeing", icon: "IMedics", slug: "medics" },
				{ name: "Counseling & care giving", icon: "ICounsel", slug: "counsel" },
				{ name: "Pets", icon: "IPet", slug: "pet" },
				{ name: "more", icon: "IMiscel", slug: "others" },
			],
		};
	},
	components: {
		categoryCard,
	},
};
</script>
<style scoped>
</style>
