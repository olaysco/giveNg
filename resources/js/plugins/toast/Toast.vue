<template>
	<transition :enter-active-class="transition.enter" :leave-active-class="transition.leave">
		<div
			role="alert"
			v-show="isActive"
			class="toast"
			:class="[`toast-${type}`, `is-${position}`]"
			@mouseover="toggleTimer(true)"
			@mouseleave="toggleTimer(false)"
			@click="whenClicked"
		>
			<div class="toast-icon"></div>
			<p class="toast-text" v-html="message"></p>
		</div>
	</transition>
</template>

<script>
import { removeElement } from "./helpers.js";
import Timer from "./timer.js";
import Positions from "./positions.js";
import eventBus from "./bus.js";
export default {
	name: "toast",
	props: {
		message: {
			type: String,
			required: true,
		},
		type: {
			type: String,
			default: "success",
		},
		position: {
			type: String,
			default: Positions.BOTTOM_RIGHT,
			validator(value) {
				return Object.values(Positions).includes(value);
			},
		},
		duration: {
			type: Number,
			default: 3000,
		},
		dismissible: {
			type: Boolean,
			default: true,
		},
		onClose: {
			type: Function,
			default: () => {},
		},
		onClick: {
			type: Function,
			default: () => {},
		},
		queue: Boolean,
		pauseOnHover: {
			type: Boolean,
			default: true,
		},
	},
	data() {
		return {
			isActive: false,
			parentTop: null,
			parentBottom: null,
			isHovered: false,
		};
	},
	beforeMount() {
		this.setupContainer();
	},
	mounted() {
		this.showNotice();
		eventBus.$on("toast.clear", this.close);
	},
	methods: {
		setupContainer() {
			this.parentTop = document.querySelector(".notices.is-top");
			this.parentBottom = document.querySelector(".notices.is-bottom");
			// No need to create them, they already exists
			if (this.parentTop && this.parentBottom) return;
			if (!this.parentTop) {
				this.parentTop = document.createElement("div");
				this.parentTop.className = "notices is-top";
			}
			if (!this.parentBottom) {
				this.parentBottom = document.createElement("div");
				this.parentBottom.className = "notices is-bottom";
			}
			const container = document.body;
			container.appendChild(this.parentTop);
			container.appendChild(this.parentBottom);
		},
		shouldQueue() {
			if (!this.queue) return false;
			return (
				this.parentTop.childElementCount > 0 ||
				this.parentBottom.childElementCount > 0
			);
		},
		close() {
			this.timer.stop();
			clearTimeout(this.queueTimer);
			this.isActive = false;
			// Timeout for the animation complete before destroying
			setTimeout(() => {
				this.onClose.apply(null, arguments);
				this.$destroy();
				removeElement(this.$el);
			}, 150);
		},
		showNotice() {
			if (this.shouldQueue()) {
				// Call recursively if should queue
				this.queueTimer = setTimeout(this.showNotice, 250);
				return;
			}
			this.correctParent.insertAdjacentElement("afterbegin", this.$el);
			this.isActive = true;
			this.timer = new Timer(this.close, this.duration);
		},
		whenClicked() {
			if (!this.dismissible) return;
			this.onClick.apply(null, arguments);
			this.close();
		},
		toggleTimer(newVal) {
			if (!this.pauseOnHover) return;
			newVal ? this.timer.pause() : this.timer.resume();
		},
	},
	computed: {
		correctParent() {
			switch (this.position) {
				case Positions.TOP:
				case Positions.TOP_RIGHT:
				case Positions.TOP_LEFT:
					return this.parentTop;
				case Positions.BOTTOM:
				case Positions.BOTTOM_RIGHT:
				case Positions.BOTTOM_LEFT:
					return this.parentBottom;
			}
		},
		transition() {
			switch (this.position) {
				case Positions.TOP:
				case Positions.TOP_RIGHT:
				case Positions.TOP_LEFT:
					return {
						enter: "fadeInDown",
						leave: "fadeOut",
					};
				case Positions.BOTTOM:
				case Positions.BOTTOM_RIGHT:
				case Positions.BOTTOM_LEFT:
					return {
						enter: "fadeInUp",
						leave: "fadeOut",
					};
			}
		},
	},
	beforeDestroy() {
		eventBus.$off("toast.clear", this.close);
	},
};
</script>
<style lang="scss">
$toast-colors: (
	"success": #28a745,
	"info": #17a2b8,
	"warning": #ffc107,
	"error": #dc3545,
	"default": #343a40,
);
.notices {
	position: fixed;
	display: flex;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	padding: 2em;
	overflow: hidden;
	z-index: 1052;
	pointer-events: none;

	.toast {
		display: inline-flex;
		align-items: center;
		animation-duration: 150ms;
		margin: 0.5em 0;
		box-shadow: 0 1px 4px rgba(0, 0, 0, 0.12), 0 0 6px rgba(0, 0, 0, 0.04);
		border-radius: 0.25em;
		pointer-events: auto;
		opacity: 0.92;
		color: #fff;
		min-height: 3em;
		cursor: pointer;

		.toast-text {
			margin: 0;
			padding: 0.5em 1em;
			word-break: break-word;
		}

		.toast-icon {
			display: none;
		}
	}

	// Colors
	@each $color, $value in $toast-colors {
		.toast-#{$color} {
			background-color: $value;
		}
	}

	// Individual toast position
	.toast {
		&.is-top,
		&.is-bottom {
			align-self: center;
		}

		&.is-top-right,
		&.is-bottom-right {
			align-self: flex-end;
		}

		&.is-top-left,
		&.is-bottom-left {
			align-self: flex-start;
		}
	}

	// Notice container positions
	&.is-top {
		flex-direction: column;
	}

	&.is-bottom {
		flex-direction: column-reverse;
	}

	&.is-custom-parent {
		position: absolute;
	}

	@media screen and (max-width: 768px) {
		padding: 0;
		position: fixed !important;
	}
}
</style>
