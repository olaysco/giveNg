<template>
	<div class="pt-90">
		<div class="flex w-100 hero">
			<div class="w-1/2 flex justify-center items-center">
				<CardDemo></CardDemo>
			</div>
			<div class="w-1/2 flex flex-col items-center justify-center">
				<div class="text-5xl font-bold">
					<span>
						We
						<b class="text-gray-400">all</b>
					</span>
					<br />
					<span>
						<b class="text-gray-400">can</b>
						Give
					</span>
					<br />
					<button class="btn border-none px-4 py-4 shadow-xl text-md">Give something</button>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
import CardHero from "../components/CardHero";
import CardDemo from "../components/CardDemo";
export default {
	components: {
		CardHero,
		CardDemo
	}
};
</script>
<style scoped>
.hero {
	height: calc(100vh - (0px + 0px));
}
</style>
