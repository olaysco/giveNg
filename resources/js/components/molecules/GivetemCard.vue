<template>
	<div
		class="givetem-card ease-in delay-50 duration-50"
		role="gridcell"
		tabindex="0"
		ref="givetem-card"
	>
		<div class="__head">
			<a-rate
				:radius="30"
				:progress="givetem.quality"
				:stroke="4"
				class="absolute right-0 mt-2 mr-2"
			>{{givetem.quality}}%</a-rate>
			<div class="__head-img">
				<img :src="`${givetem.image_url}`" alt="free bag" aria-label="bag image" />
			</div>
			<div class="__head-action">
				<a-button class="w-full" @click="gotoPage(givetem.id)">Get Item</a-button>
			</div>
		</div>
		<div class="__body">
			<div class="__body-about">
				<span class="__body-about-title">{{givetem.title}}</span>
				<span class="__body-about-giver">by {{givetem.giver}}</span>
			</div>
		</div>
	</div>
</template>
<script>
import AButton from "../atoms/AButton";
import ARate from "../atoms/ARate";
import isInViewPort from "../../utils";
export default {
	components: {
		AButton,
		ARate,
	},
	props: {
		givetem: {
			required: true,
			type: Object,
		},
	},
	methods: {
		addAnimate() {
			this.$refs["givetem-card"].classList.add("animate__fadeIn");
		},
		removeAnimate() {
			this.$refs["givetem-card"].classList.remove("animate__fadeIn");
		},
		gotoPage(id) {
			console.log("clciked");
			this.$router.push("/givetem/id");
		},
	},
};
</script>
<style lang='scss' scoped>
.givetem-card {
	transition: all 0.4s ease-in-out 5s;
	box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 14px 0px;
	@apply h-auto bg-white rounded-md relative cursor-pointer;
	width: 90%;
	& .__head {
		@apply relative;
		.__head-action {
			@apply absolute bottom-0 w-full p-1 hidden;
			transition: all 4s ease-in-out 100s;
			button {
				border-radius: 0.25rem;
			}
		}
	}
	& .__body {
		@apply p-6 flex flex-col justify-between text-sm;
		& .__body-about {
			@apply flex flex-col;
			& .__body-about-title {
				@apply font-semibold;
			}
			& .__body-about-giver {
				@apply text-gray-600;
			}
		}
		& .__body-action {
			@apply flex justify-center;
		}
	}
	&:hover {
		.__head-action {
			display: inline;
		}
	}
}
@media (max-width: 500px) {
	.givetem-card {
		width: 90%;
	}
}
</style>
