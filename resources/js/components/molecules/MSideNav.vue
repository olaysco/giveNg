<template>
	<div class="sidenav" :class="[visible?'sidenav-open':'sidenav-closed']">
		<ul>
			<li class="p-1">
				<router-link to="/" class="text-white text-xs hover:text-blue-300">
					<IBook class="inline mr-2 align-middle" fill="#fff" />Giveng
				</router-link>
			</li>
			<li class="p-1">
				<router-link to="/education" class="text-white text-xs hover:text-blue-300">
					<IBook class="inline mr-2 align-middle" fill="#fff" />Education
				</router-link>
			</li>
			<li class="p-1" v-if="authUser && authUser.email">
				<button v-if="inProfile" @click="logout" class="btn">Logout</button>
				<router-link v-else to="/profile" class="text-white text-xs hover:text-blue-300">
					<IAccount class="inline mr-2 align-middle" fill="#fff" />Profile
				</router-link>
			</li>
			<li class="flex justify-center" v-else>
				<router-link to="/login" class="btn hover:bg-blue-600 w-3/4 p-0">Login</router-link>
			</li>
		</ul>
		<span class="text-center p-2 text-white text-xs opacity-50">© giveng 2020</span>
	</div>
</template>
<script>
import IBook from "../icons/IBook";
import IAccount from "../icons/IAccount";
import { mapState, mapActions } from "vuex";
export default {
	components: {
		IBook,
		IAccount,
	},
	props: {
		visible: {
			type: Boolean,
			default: false,
		},
	},
	computed: {
		...mapState({
			authUser: (state) => state.authStore.authUser,
		}),
		inProfile() {
			return this.$route.path === "/profile";
		},
	},
	methods: {
		async logout() {
			this.$store.dispatch("logoutUser").then((e) => {
				window.location.href = "/";
			});
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
	box-shadow: 2px 5px 4px 0px rgb(255 237 237 / 8%);
	overflow-x: hidden;
	padding-top: 60px;
	transition: 0.5s;
	display: flex;
	flex-direction: column;
	justify-content: space-between;
}

.sidenav a {
	padding: 8px 8px 8px 32px;
	text-decoration: none;
	display: block;
	transition: 0.3s;
}

.sidenav a.btn {
	padding: 9px;
	margin-top: 4px;
}

.sidenav li:hover {
	background-color: #122e50;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
	color: #f1f1f1;
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
