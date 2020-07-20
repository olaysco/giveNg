<template>
	<div>
		<div class="flex w-100 hero bg-blue-900">
			<div class="w-full flex flex-col items-center justify-center">
				<div
					class="text-2xl md:text-3xl text-white font-bold w-4/5 text-center mb-5 animate__animated animate__fadeIn animate__delay-2s animate__slow"
				>
					<span class>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</span>
				</div>
				<div class="w-full flex justify-center mt-4">
					<div class="w-11/12 md:w-4/5 relative">
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
import magnify from "../icons/magnify";
export default {
	components: {
		magnify
	}
};
</script>
<style scoped>
.hero {
	height: calc(85vh - (0px + 0px));
}
@media (max-width: 764px) {
	.hero {
		height: calc(75vh - (0px + 0px));
	}
}
</style>
