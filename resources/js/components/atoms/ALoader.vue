<template>
	<div>
		<loading
			class="rotate"
			stroke-linecap="round"
			viewBox="0 0 24 24"
			fill="#4299e1"
			width="48px"
			height="48px"
		/>
		<slot />
	</div>
</template>
<script>
import loading from "../icons/loading";
export default {
	components: {
		loading
	}
};
</script>
<style scoped>
@keyframes rotating {
	from {
		transform: rotate(0deg);
	}
	to {
		transform: rotate(360deg);
	}
}

.rotate {
	animation: rotating 2s linear infinite;
}
</style>
