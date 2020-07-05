<template>
	<div class="__givetem-info pb-8">
		<div class="h-64 overflow-hidden">
			<img class="w-full" src="/img/free-shoe.png" alt="free shoe image" />
		</div>
		<div class="__givetem-info-about my-5 flex px-8">
			<div class="w-1/2 md:w-5/6">
				<h1 class="text-2xl md:text-4xl text-blue-900 font-bold">lorem ipslum dolor</h1>
				<p>
					<tag stroke-linecap="round" viewBox="0 0 24 24" fill="#2a4365" />
				</p>
			</div>
			<div class="w-1/2 md:w-1/6 flex flex-col justify-center">
				<div>
					<button class="w-full btn-outline">Get Item</button>
				</div>
			</div>
		</div>
		<div class="__givetem-info-desc px-8">
			<small class="text-gray-500">Description</small>
			<p class>
				Lorem ipsum dolor sit amet consectetur
				adipisicing elit. Unde minima nisi ut
				tenetur quas, libero iste quasi neque mollitia in ea
				ullam aperiam perferendis aut odit animi
				consequuntur voluptatibus ducimus!
			</p>
		</div>
	</div>
</template>
<script>
import tag from "@mdi/svg/svg/tag-multiple.svg";
export default {
	components: {
		tag
	}
};
</script>
<style scoped>
.__givetem-info {
	@apply shadow-2xl rounded-md;
}
</style>
