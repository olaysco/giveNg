<template>
	<div class="flex justify-between items-center py-1 bg-transparent fixed w-full z-20">
		<div class="flex-shrink-0 ml-10 cursor-pointer">
			<img class="w-20 h-auto" src="/img/giveng-logo-light.svg" alt="logo" />
		</div>
		<i class="fas fa-bars fa-2x visible md:invisible mr-10 md:mr-0 text-blue-200 cursor-pointer"></i>
		<ul class="md:flex mr-5 font-semibold">
			<!-- <li class="mr-6 p-1">
                <a href="#impacts" class="text-gray-500 hover:text-blue-300">Our impacts</a>
			</li>-->
			<li class="mr-6 p-1">
				<router-link to="/education" class="text-gray-500 text-xs hover:text-blue-300">Education</router-link>
			</li>
			<li class="mr-6 p-1">
				<router-link
					to="/register"
					class="text-white text-sm bg-blue-500 py-2 px-6 rounded-full hover:bg-white hover:text-blue-500 hover:border-blue-500 font-100"
				>Login</router-link>
			</li>
		</ul>
	</div>
</template>
<script>
export default {};
</script>
<style scoped>
</style>
