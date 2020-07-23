<template>
	<div class="sidenav" :class="[visible?'sidenav-open':'sidenav-closed']"></div>
</template>
<script>
export default {
	props: {
		visible: {
			type: Boolean,
			default: false,
		},
	},
};
</script>
<style scoped>
.sidenav {
	height: 100%;
	width: 0;
	position: fixed;
	z-index: 50;
	top: 0;
	left: 0;
	background-color: #0a1d35;
	box-shadow: 2px 5px 4px 0px rgb(255 237 237 / 43%);
	overflow-x: hidden;
	padding-top: 60px;
	transition: 0.5s;
}

.sidenav a {
	padding: 8px 8px 8px 32px;
	text-decoration: none;
	font-size: 25px;
	color: #818181;
	display: block;
	transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
	color: #f1f1f1;
}

.sidenav .closebtn {
	position: absolute;
	top: 0;
	right: 25px;
	font-size: 36px;
	margin-left: 50px;
}

@media screen and (max-height: 450px) {
	.sidenav {
		padding-top: 15px;
	}
	.sidenav a {
		font-size: 18px;
	}
}

.sidenav-open {
	width: 250px;
}
</style>
