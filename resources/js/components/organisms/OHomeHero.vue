<template>
	<div>
		<div class="flex w-100 hero bg-blue-deep">
			<div class="w-full flex flex-col items-center justify-center">
				<div
					class="text-2xl md:text-3xl text-white font-bold w-4/5 text-center mb-5 animate__animated animate__fadeIn animate__delay-2s animate__slow"
				>
					<span class="text-shadow intro-text">Find everything you want at no cost</span>
				</div>
				<div
					class="delay-100 duration-200 ease-in-out flex justify-center mt-4 transition-all w-full"
					v-stick
				>
					<div class="w-11/12 md:w-4/5 relative">
						<input
							class="w-full px-4 py-2 h-16 rounded-full shadow-2xl text-sm md:text-xl pr-12"
							placeholder="Search for free givetem"
						/>
						<magnify class="absolute mr-4 mt-5 right-0 top-0" />
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
import magnify from "../icons/magnify";
import inView from "../../utils/index";
import isInViewport from "../../utils/index";
export default {
	components: {
		magnify,
	},
	directives: {
		stick: {
			bind: function (el, binding, opts) {
				document.querySelector("body").addEventListener("scroll", function (e) {
					if (!isInViewport(el.previousElementSibling)) {
						/** if element is not in viewport
						 *  and add the stick class if it doesnt
						 *  have it
						 **/
						if (!el.classList.contains("stick"))
							setTimeout(() => el.classList.add("stick"), 500);
					} else {
						if (el.classList.contains("stick"))
							setTimeout(() => el.classList.remove("stick"), 500);
					}
				});
			},
		},
	},
};
</script>
<style scoped>
.hero {
	/* background-image: url("/img/hero.svg"); */
	background-repeat: no-repeat;
	background-position: 2em bottom;
	background-size: 60vh;
	height: calc(85vh - (0px + 0px));
}
@media (max-width: 764px) {
	.hero {
		height: calc(75vh - (0px + 0px));
	}
}
.stick {
	position: fixed;
	top: 0;
	z-index: 30;
	width: 75vw;
}
@media (max-width: 764px) {
	.stick {
		left: -12px;
		width: 80vw;
	}
}
</style>
