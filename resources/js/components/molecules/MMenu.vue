<template>
	<div>
		<div class="block md:hidden mr-2 md:mr-0 cursor-pointer" @click="handleClick">
			<IBar :opened="sideNavOpen" />
		</div>
		<MSideNav :visible="sideNavOpen" />
		<ul class="hidden md:flex mr-5 font-semibold">
			<li class="mr-6 p-1 hidden md:inline">
				<router-link to="/" class="text-blule-300 text-xs hover:text-blue-400" v-if="inEducation">
					<IBook class="inline mr-2 align-middle" fill="#90cdf4" />Giveng
				</router-link>
				<router-link to="/education" class="text-blue-300 text-xs hover:text-blue-400" v-else>
					<IBook class="inline mr-2 align-bottom" fill="#90cdf4" />Education
				</router-link>
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
import IBar from "../icons/IBar";
import IBook from "../icons/IBook";
import MSideNav from "./MSideNav";
import { mapState, mapActions } from "vuex";
export default {
	components: {
		IBook,
		IBar,
		MSideNav,
	},
	data() {
		return {
			sideNavOpen: false,
		};
	},
	computed: {
		...mapState({
			authUser: (state) => state.authStore.authUser,
		}),
		inProfile() {
			return this.$route.path === "/profile";
		},
		inEducation() {
			return this.$route.path === "/education";
		},
	},
	methods: {
		async logout() {
			this.$store.dispatch("logoutUser").then((e) => {
				window.location.href = "/";
			});
		},
		handleClick() {
			console.log("clicked");
			this.sideNavOpen = !this.sideNavOpen;
		},
	},
};
</script>
<style scoped>
</style>
