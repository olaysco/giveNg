<template>
	<div class="w-screen min-h-screen bg-white flex flex-row">
		<div
			class="w-full min-h-screen md:flex my-auto block justify-center items-center p-0 bg-blue-100 bg-opacity-25"
		>
			<div class="w-screen h-screen md:w-full md:h-auto flex items-center justify-center rounded-md">
				<div class="w-full px-8 md:px-0 md:w-3/5 flex flex-col items-center justify-center">
					<div
						class="transition-all ease-linear duration-75 delay-75 bg-white h-auto w-full rounded-md shadow-2xl pb-8"
					>
						<div class="h-8 bg-blue-200 rounded-t-md"></div>
						<div class="profile-group flex flex-col relative">
							<div class="h-20 pt-fill"></div>
							<div class="h-16"></div>
							<AAvatar class="absolute left-0 right-0 top-0 bottom-0 m-auto w-24 h-24" />
						</div>
						<div>
							<h3 class="text-center text-2xl text-blue-900 font-bold" v-if="user">{{user.name}}</h3>
						</div>
						<div class="grid grid-cols-2 text-center text-gray-500 text-sm mt-8">
							<div>
								<h3>Given out</h3>
								<p>0</p>
								<p class="mt-2">
									<!-- <router-link to="/profile/post" class="btn border">Post a givetem</router-link> -->
									<a href="#" @click="doShowPostGivetem" class="btn border">Post a givetem</a>
								</p>
							</div>
							<div>
								<h3>Received</h3>
								<p>0</p>
								<p class="mt-2">
									<a href="http://" class="btn-outline border">Search for givetems</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<OPostGivetemModal :visible="showPostGivetem" @close="handlePostgivetemClose" />
	</div>
</template>
<script>
import { mapState } from "vuex";
import OPostGivetemModal from "../components/organisms/OPostGivetemModal";
import AAvatar from "../components/atoms/AAvatar";
export default {
	components: {
		AAvatar,
		OPostGivetemModal,
	},
	data() {
		return {
			showPostGivetem: false,
		};
	},
	computed: {
		user() {
			return this.$store.state.authStore.authUser;
		},
	},
	methods: {
		doShowPostGivetem() {
			this.showPostGivetem = true;
		},
		handlePostgivetemClose() {
			this.showPostGivetem = false;
		},
	},
};
</script>
<style scoped>
.pt-fill {
	background-color: #bee3f8;
	background-image: url("data:image/svg+xml,%3Csvg width='20' height='20' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23a5d1ea' fill-opacity='0.4' fill-rule='evenodd'%3E%3Ccircle cx='3' cy='3' r='3'/%3E%3Ccircle cx='13' cy='13' r='3'/%3E%3C/g%3E%3C/svg%3E");
}
</style>
