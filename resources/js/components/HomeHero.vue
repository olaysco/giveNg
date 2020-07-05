<template>
	<div class="pt-90">
		<div class="flex w-100 hero">
			<div class="w-full flex flex-col items-center justify-center">
				<div
					class="text-3xl md:text-5xl font-bold w-4/5 text-center mb-5 animate__animated animate__fadeIn animate__delay-2s animate__slow"
				>
					<span class>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</span>
				</div>
				<div class="w-full flex justify-center mt-4">
					<div class="w-11/12 md:w-4/5">
						<magnify class="absolute ml-4 mt-5" />
						<input
							class="w-full px-4 py-2 h-16 rounded-full shadow-2xl text-xl pl-12"
							placeholder="Search for free givetem"
						/>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
import CardHero from "../components/CardHero";
import CardDemo from "../components/CardDemo";
import magnify from "@mdi/svg/svg/magnify.svg";
export default {
	components: {
		CardHero,
		CardDemo,
		magnify
	}
};
</script>
<style scoped>
.hero {
	height: calc(100vh - (90px + 0px));
}
@media (max-width: 764px) {
	.hero {
		height: calc(100vh - (0px + 0px));
	}
}
</style>
