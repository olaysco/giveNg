<template>
	<svg :height="radius * 2" :width="radius * 2">
		<circle
			stroke="white"
			fill="transparent"
			:stroke-dasharray="circumference + ' ' + circumference"
			:style="{ strokeDashoffset }"
			:stroke-width="stroke"
			:r="normalizedRadius"
			:cx="radius"
			:cy="radius"
		/>
		<text
			:x="(radius * 2) / 2"
			:y="(radius * 2) / 2"
			dominant-baseline="middle"
			text-anchor="middle"
			fill="white"
			:font-size="radius / 3"
		>
			<slot />
		</text>
	</svg>
</template>
<script>
export default {
	props: {
		radius: Number,
		progress: Number,
		stroke: Number
	},
	data() {
		const normalizedRadius = this.radius - this.stroke * 2;
		const circumference = normalizedRadius * 2 * Math.PI;
		return {
			normalizedRadius,
			circumference
		};
	},
	computed: {
		strokeDashoffset() {
			return this.circumference - (this.progress / 100) * this.circumference;
		}
	}
};
</script>
<style scoped>
</style>
