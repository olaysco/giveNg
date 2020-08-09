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
				<img :src="`${givetem.image_url}`" alt="free bag" aria-label="bag image" class="rounded-l-md" />
			</div>
		</div>
		<div class="__body">
			<div class="__body-about">
				<span class="__body-about-title">{{givetem.title}}</span>
				<span class="__body-about-giver">by {{givetem.giver}}</span>
			</div>
			<a-button class="absolute right-0 bottom-0 mx-4 mb-2 w-" @click="gotoPage(givetem.id)">Get Item</a-button>
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
	@apply flex h-auto bg-white rounded-md relative cursor-pointer;
	& .__head {
		@apply relative w-1/4;
		.__head-action {
			@apply absolute bottom-0 w-full p-1 hidden;
			transition: all 4s ease-in-out 100s;
			button {
				border-radius: 0.25rem;
			}
		}
	}
	& .__body {
		@apply text-sm w-3/4 m-4;
		& .__body-about {
			@apply flex flex-col;
			& .__body-about-title {
				@apply font-semibold mb-2;
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
</style>
