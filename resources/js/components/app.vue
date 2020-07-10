<template>
	<div class="bg-image">
		<page-header></page-header>
		<transition
			name="fade"
			mode="out-in"
			@beforeLeave="beforeLeave"
			@enter="enter"
			@afterEnter="afterEnter"
		>
			<router-view></router-view>
		</transition>
		<page-footer></page-footer>
	</div>
</template>
<script>
import PageHeader from "./organisms/OPageHeader";
import PageFooter from "./organisms/OPageFooter";
import { mapActions } from "vuex";
export default {
	name: "MainApp",
	components: {
		PageHeader,
		PageFooter
	},
	data() {
		return {
			prevHeight: 0
		};
	},
	methods: {
		...mapActions(["getUser"]),
		beforeLeave(element) {
			this.prevHeight = getComputedStyle(element).height;
		},
		enter(element) {
			const { height } = getComputedStyle(element);
			element.style.height = this.prevHeight;
			setTimeout(() => {
				element.style.height = height;
			});
		},
		afterEnter(element) {
			element.style.height = "auto";
		}
	},
	async beforeMount() {
		await this.getUser();
	}
};
</script>
<style scoped>
.fade-enter-active,
.fade-leave-active {
	transition-duration: 0.3s;
	transition-property: opacity;
	transition-timing-function: ease;
}

.fade-enter,
.fade-leave-active {
	opacity: 0;
}
</style>
