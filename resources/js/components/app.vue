<template>
	<div class="main">
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
import AnimationMixin from "../mixins/animation";
import { mapActions } from "vuex";
export default {
	name: "MainApp",
	mixins: [AnimationMixin],
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
		...mapActions(["getUser"])
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
.main {
	display: flex;
	min-height: 100vh;
	flex-direction: column;
	justify-content: space-between;
}
</style>
