<template>
	<div class="mx-auto bg-blue-500 px-10 py-10 relative">
		<pop-text>TAKE ACTION</pop-text>
		<div
			:class="['grid grid-cols-1 gap-24 cursor-default', `md:grid-cols-${actions.length}`, `sm:grid-cols-${actions.length/2}`]"
		>
			<div v-for="act in actions" :key="act.title">
				<h4 v-text="act.title" class="text-white text-bold text-lg"></h4>
				<p v-text="act.body" class="text-blue-100 text-xs"></p>
			</div>
		</div>
	</div>
</template>
<script>
import PopText from "../molecules/MPopText";
export default {
	components: {
		PopText
	},
	data() {
		return {
			actions: [
				{
					title: "Learn",
					body: "Get the facts about this issue and how we’re helping."
				},
				{
					title: "Volunteer",
					body: "Find out about upcoming events that need your help."
				},
				{
					title: "Share",
					body:
						"Let your social media networks know about this important cause."
				},
				{
					title: "Donate",
					body: "Help us raise money to make a big difference with this issue."
				}
			]
		};
	}
};
</script>
<style scoped>
</style>
