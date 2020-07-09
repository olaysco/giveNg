<template>
	<div class="px-10 py-12 stats bg-cover">
		<div class="flex flex-col items-center sm:grid sm:grid-cols-2">
			<div>
				<h2 class="text-5xl text-white hidden sm:block">
					Quality
					<br />Educaion
					<br />For
					<br />All
				</h2>
				<h2 class="text-3xl text-white block sm:hidden">Quality Educaion For All</h2>
				<div class="mt-10 mb-12 sm:mb-0 flex">
					<a
						href="#"
						class="mx-auto sm:mx-0 text-white text-sm bg-blue-500 py-3 px-6 rounded-full hover:bg-white hover:text-blue-500 hover:border-blue-500"
					>Take Action</a>
				</div>
			</div>
			<div>
				<div v-for="stat in stats" :key="stat.title">
					<card-base>
						<div class="bg-white p-8 rounded shadow relative mb-10">
							<pop-text>DID YOU KNOW?</pop-text>
							<div class="flex justify-between">
								<div>
									<h3 class="text-3xl text-blue-900 font-bold">{{stat.title}}</h3>
									<p>{{stat.body}}</p>
								</div>
								<div class="flex flex-col justify-around ml-10">
									<a href="#" class>
										<img src="/img/twitter-icon.svg" alt="twitter" />
									</a>
									<a href="#" class>
										<img src="/img/facebook-icon.svg" alt="fb" />
									</a>
								</div>
							</div>
						</div>
					</card-base>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
import CardBase from "../atoms/ACardBase";
import PopText from "../molecules/MPopText";
export default {
	data() {
		return {
			stats: [
				{
					title: "3 out of 4",
					body: "People living in poverty depend on agriculture for survival."
				},
				{
					title: "30%",
					body: "People living in poverty depend on agriculture for survival."
				},
				{
					title: "200 million +",
					body: "People living in poverty depend on agriculture for survival."
				}
			]
		};
	},
	components: {
		CardBase,
		PopText
	}
};
</script>
<style scoped>
.stats {
	background-image: url("/img/image-1.jpg");
}
</style>
