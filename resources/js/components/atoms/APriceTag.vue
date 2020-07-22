<template>
	<div class="price-tag">$FREE</div>
</template>
<script>
export default {};
</script>
<style lang="scss" scoped>
.price-tag {
	font-size: 18px;
	line-height: 18px;
	font-weight: 700;
	padding: 12px;
	color: #614611;
	background: #fdce71;
	display: inline-block;
	position: absolute;
	border-top-left-radius: 3px;
	border-bottom-left-radius: 3px;
	top: 1rem;
	left: 1rem;
	&::before,
	&::after {
		content: "";
		height: 0;
		position: absolute;
		width: 0;
		border-color: transparent;
		border-style: solid;
		border-width: 21px;
		left: 100%;
		margin-left: -21px;
		-webkit-transform: scaleX(0.65);
		transform: scaleX(0.65);
	}
	&::before {
		top: 0;
		border-top-color: #fdce71;
	}
	&::after {
		bottom: 0;
		border-bottom-color: #fdce71;
	}
}
</style>
