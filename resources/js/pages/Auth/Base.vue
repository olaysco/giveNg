<template>
	<div class="w-screen bg-white flex flex-row">
		<!-- <div class="w-1/2 hidden bg-gray-900 md:flex flex-col justify-between p-6"></div> -->
		<div class="w-full md:flex my-auto block justify-center items-center p-0">
			<div class="w-screen h-screen md:w-full md:h-auto flex items-center justify-center rounded-md">
				<div class="w-full md:w-1/2 flex flex-col items-center justify-center">
					<router-link to="/">
						<img class="w-20 h-auto" src="/img/giveng-logo-light.svg" alt="logo" />
					</router-link>
					<div
						class="transition-all ease-linear duration-75 delay-75 p-6 bg-white rounded-md shadow-md hover:shadow-outline"
					>
						<slot />
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
import styled from "vue-styled-components";
export default {};
</script>
