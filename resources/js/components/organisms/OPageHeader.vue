<template>
	<div class="page-header flex justify-between items-center py-1 fixed w-full z-20">
		<div class="flex-shrink-0 ml-10 cursor-pointer">
			<router-link to="/">
				<img class="w-16 h-auto" src="/img/giveng-logo-light.svg" alt="logo" />
			</router-link>
		</div>
		<i class="fas fa-bars fa-2x visible md:invisible mr-10 md:mr-0 text-blue-200 cursor-pointer"></i>
		<ul class="md:flex mr-5 font-semibold">
			<!-- <li class="mr-6 p-1">
                <a href="#impacts" class="text-gray-500 hover:text-blue-300">Our impacts</a>
			</li>-->
			<li class="mr-6 p-1 hidden md:inline">
				<router-link to="/education" class="text-gray-500 text-xs hover:text-blue-300">Education</router-link>
			</li>
			<li class="mr-6 p-1" v-if="authUser && authUser.email">
				<button v-if="inProfile" @click="logout" class="btn">Logout</button>
				<router-link v-else to="/profile" class="btn">Profile</router-link>
			</li>
			<li v-else>
				<router-link to="/login" class="btn">Login</router-link>
			</li>
		</ul>
	</div>
</template>
<script>
import { mapState, mapActions } from "vuex";
export default {
	computed: {
		...mapState({
			authUser: state => state.authStore.authUser
		}),
		inProfile() {
			return this.$route.path === "/profile";
		}
	},
	methods: {
		async logout() {
			this.$store.dispatch("logoutUser").then(e => {
				window.location.href = "/";
			});
		}
	}
};
</script>
<style scoped>
.page-header {
	width: 97vh;
}
</style>
