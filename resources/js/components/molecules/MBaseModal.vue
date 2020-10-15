<template>
	<div class="fixed top-0 left-0 z-40">
        <transition name="fade" mode="out-in" @beforeLeave="beforeLeave" @enter="enter">
		<div class="w-screen top-0 z-30 absolute bg-gray-100 main-modal overflow-y-auto">
			<slot></slot>
		</div>
	</transition>
    </div>
</template>
<script>
import AnimationMixin from "../../mixins/animation";
export default {
	mixins: [AnimationMixin]
};
</script>
<style scoped>
.main-modal {
    min-height: 100vh;
    height: 100%;
}
</style>
