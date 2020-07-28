<template>
	<div>
		<transition-group name="toasts" tag="div" class="c-toasts">
			<toast class="toasts-item" v-for="toast in toasts" :toast="toast" :key="toast.id"></toast>
		</transition-group>
	</div>
</template>
<script>
Vue.component("toast", {
	template: `
    <div :class="['c-toasts__item', 'c-toasts__item--' + toast.type]" >
      <span class="c-toasts__item-text">{{ toast.text }}</span>
    </div>
  `,
	props: {
		toast: {
			type: Object,
			required: true,
		},
	},
});
export default {
	data() {
		return {
			toasts: [],
		};
	},
	methods: {
		addToast({ type = "info", duration = 4000, text }) {
			const id = toastID++;
			this.toasts.push({ id, type, text });
			setTimeout(() => {
				this.removeToast(id);
			}, duration);
		},
	},
};
</script>
<style lang="scss">
toasts-item {
	transition: all 0.5s;
}

.toasts-enter,
.toasts-leave-to {
	opacity: 0;
	transform: scale(0.9);
}

.toasts-leave-active {
	position: absolute;
	z-index: -1;
}

// Component

// Block
.c-toasts {
	position: fixed;
	top: 20px;
	left: 20px;
	z-index: 9999;

	width: 300px;

	pointer-events: none;
}

// Element
.c-toasts__item {
	display: flex;
	align-items: center;

	width: 100%;
	margin-bottom: 10px;
	padding: 15px;
	border-radius: 5px;

	color: #fff;
	background-color: rgba(0, 0, 0, 0.8);
}

.c-toasts__item-text {
	font-size: 14px;
	line-height: 1.5;
}

// Modifiers
.c-toasts__item--success {
	background-color: #339900;
}

.c-toasts__item--danger {
	background-color: #cc3300;
}

.c-toasts__item--warning {
	background-color: #ffcc00;
}

.c-toasts__item--info {
	background-color: #40a6ce;
}
</style>
