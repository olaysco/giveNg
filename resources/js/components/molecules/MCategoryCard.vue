<template>
	<div
		class="relative flex justify-center items-center flex-col bg-blue-100 rounded-md text-gray-600 text-xs pb-2 capitalize hover:bg-blue-200 hover:shadow-lg delay-100 duration-200 ease-linear text-center"
	>
		<router-link
			:to="`/category/${category.slug}`"
			aria-label="category-link"
			class="absolute w-full h-full"
		></router-link>
		<component v-bind:is="category.icon" class="w-5/6 h-auto p-2"></component>
		<p>{{category.name}}</p>
	</div>
</template>
<script>
export default {
	props: {
		category: {
			type: Object,
			required: true,
		},
	},
	components: {
		ICloth: () => import("../icons/ICloth"),
		ICounsel: () => import("../icons/ICounsel"),
		IFood: () => import("../icons/IFood"),
		IFurniture: () => import("../icons/IFurniture"),
		IMask: () => import("../icons/IMask"),
		IMedics: () => import("../icons/IMedics"),
		IMiscel: () => import("../icons/IMiscel"),
		IPet: () => import("../icons/IPet"),
	},
};
</script>
<style scoped>
</style>
