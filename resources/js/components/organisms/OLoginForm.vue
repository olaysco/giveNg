<template>
	<div>
		<form @submit.prevent="login()">
			<h3 class="text-center text-blue-500 text-2xl">Welcome back</h3>
			<div class="mt-6 relative">
				<label
					class="block hidden text-gray-900 text-xs mb-2 absolute top-0 ml-3 text-indigo-900 -mt-3 bg-white"
				>Email</label>
				<input
					class="input"
					placeholder="Email"
					type="email"
					v-model="loginForm.email"
					:class="{ 'is-invalid':loginForm.errors.has('email') }"
				/>
				<has-error :form="loginForm" field="email"></has-error>
			</div>
			<div class="mt-6 relative">
				<label
					class="block hidden text-gray-900 text-xs mb-2 absolute top-0 ml-3 text-indigo-900 -mt-3 bg-white"
				>Password</label>
				<input
					class="input"
					type="password"
					placeholder="Password"
					v-model="loginForm.password"
					:class="{ 'is-invalid':loginForm.errors.has('password') }"
				/>
				<has-error :form="loginForm" field="password"></has-error>
			</div>
			<span class="text-gray-500 my-2 float-right text-xs hover:text-gray-400">
				<router-link to="/forgot_password">Forgot Password?</router-link>
			</span>
			<div class="mt-6">
				<button class="btn w-full">LOGIN</button>
			</div>
			<div class="mt-4 text-center">
				<span class="text-sm">
					Do not have an account?
					<span class="text-blue-500">
						<router-link to="/register">create</router-link>
					</span>
				</span>
			</div>
		</form>
	</div>
</template>
<script>
import { mapMutations, mapActions } from "vuex";
export default {
	data() {
		return {
			loginForm: new Form({
				email: "",
				password: ""
			})
		};
	},
	computed: {
		validation() {
			return {
				email: /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(
					this.loginForm.email
				),
				password: this.loginForm.password.length >= 8
			};
		}
	},
	methods: {
		...mapMutations(["setCurrentAuthUser"]),
		...mapActions(["loginUser"]),
		login() {
			this.loginUser(this.loginForm)
				.then(response => {
					this.loginForm = response;
					this.$emit("loginSuccess");
				})
				.catch(err => {
					this.loginForm = err;
				});
		}
	}
};
</script>
<style scoped>
</style>
