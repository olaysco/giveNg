<template>
	<div :class="[opened? 'clicked':'']" role="button" aria-label="sidenav-button">
		<div class="bar1"></div>
		<div class="bar2"></div>
		<div class="bar3"></div>
	</div>
</template>
<script>
export default {
	props: {
		opened: {
			default: false,
		},
	},
};
</script>
<style scoped>
.bar1,
.bar2,
.bar3 {
	width: 35px;
	height: 5px;
	background-color: #fff;
	margin: 6px 0;
	transition: 0.4s;
	border-radius: 3em;
}

.clicked .bar1 {
	-webkit-transform: rotate(-45deg) translate(-9px, 6px);
	transform: rotate(-45deg) translate(-9px, 6px);
}

.clicked .bar2 {
	opacity: 0;
}

.clicked .bar3 {
	-webkit-transform: rotate(45deg) translate(-8px, -8px);
	transform: rotate(45deg) translate(-8px, -8px);
}
</style>
