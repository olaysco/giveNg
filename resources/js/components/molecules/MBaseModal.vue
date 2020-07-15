<template>
	<transition name="fade" mode="out-in" @beforeLeave="beforeLeave" @enter="enter">
		<div class="w-screen h-screen top-0 z-30 absolute bg-gray-100">
			<slot></slot>
		</div>
	</transition>
</template>
<script>
import AnimationMixin from "../../mixins/animation";
export default {
	mixins: [AnimationMixin]
};
</script>
<style scoped>
</style>
