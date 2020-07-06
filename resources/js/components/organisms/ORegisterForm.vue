<template>
	<div :class="[registerForm.busy?'blur':'']">
		<form @submit.prevent="register()">
			<h3 class="text-center text-blue-500 text-2xl">Create an account</h3>
			<div class="mt-6 relative">
				<label
					class="block hidden text-gray-900 text-xs mb-2 absolute top-0 ml-3 text-indigo-900 -mt-3 bg-white"
				>Full Name</label>
				<input
					class="input"
					:class="{ 'is-invalid':registerForm.errors.has('name') }"
					placeholder="Full Name"
					type="text"
					v-model="registerForm.name"
				/>
				<has-error :form="registerForm" field="name"></has-error>
			</div>
			<div class="mt-6 relative">
				<label
					class="block hidden text-gray-900 text-xs mb-2 absolute top-0 ml-3 text-indigo-900 -mt-3 bg-white"
				>Email</label>
				<input
					class="input"
					placeholder="Email"
					type="email"
					v-model="registerForm.email"
					:class="{ 'is-invalid':registerForm.errors.has('email') }"
				/>
				<has-error :form="registerForm" field="email"></has-error>
			</div>
			<div class="mt-6 relative">
				<label
					class="block hidden text-gray-900 text-xs mb-2 absolute top-0 ml-3 text-indigo-900 -mt-3 bg-white"
				>Password</label>
				<input
					class="input"
					type="password"
					placeholder="Password"
					v-model="registerForm.password"
					:class="{ 'is-invalid':registerForm.errors.has('password') }"
				/>
				<has-error :form="registerForm" field="password"></has-error>
			</div>
			<div class="mt-6 relative">
				<label
					class="block hidden text-gray-900 text-xs mb-2 absolute top-0 ml-3 text-indigo-900 -mt-3 bg-white"
				>Confirm Password</label>
				<input
					class="input"
					type="password"
					placeholder="Confirm Password"
					v-model="registerForm.password_confirmation"
					:class="{ 'is-invalid':registerForm.errors.has('password_confirmation') }"
				/>
				<has-error :form="registerForm" field="password_confirmation"></has-error>
			</div>
			<div class="mt-6">
				<button class="btn w-full" type="submit" :disabled="registerForm.busy">
					<span v-if="!registerForm.busy">REGISTER</span>
					<span v-else>busy....</span>
				</button>
			</div>
			<div class="mt-4 text-center">
				<span class="text-sm">
					Already registered?
					<span class="text-blue-500">
						<router-link to="/login">login</router-link>
					</span>
				</span>
			</div>
		</form>
	</div>
</template>
<script>
import { mapMutations, mapActions } from "vuex";
export default {
	components: {},
	data() {
		return {
			registerForm: new Form({
				name: "",
				email: "",
				password: "",
				password_confirmation: ""
			})
		};
	},
	computed: {
		validation() {
			return {
				email: /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(
					this.registerForm.email
				),
				password: this.registerForm.password.length >= 8,
				name: this.registerForm.name.length > 1,
				password_confirmation:
					this.registerForm.password_confirmation.length >= 8 &&
					this.registerForm.password == this.registerForm.password_confirmation
			};
		},
		validFields() {
			return Object.fromEntries(
				Object.entries(this.validation).filter(e => e[1])
			);
		}
	},
	methods: {
		...mapMutations(["setRegisteredUser"]),
		...mapActions(["loginUser"]),
		register() {
			this.registerForm
				.post("/api/register")
				.then(async result => {
					await this.setRegisteredUser(this.registerForm);
					try {
						let e = this.loginUser();
						console.log(e);
					} catch (e) {
						console.log(e);
					}
					this.$emit("registerSuccess");
				})
				.catch(err => {
					console.log(err);
				});
		}
	}
};
</script>
<style scoped>
</style>
