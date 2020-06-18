<template>
	<AuthBase>
		<div>
			<form>
				<h3 class="text-center text-blue-500 text-2xl">Create an account</h3>
				<div class="mt-6 relative">
					<label
						class="block hidden text-gray-900 text-xs mb-2 absolute top-0 ml-3 text-indigo-900 -mt-3 bg-white"
					>Full Name</label>
					<input class="input" placeholder="Full Name" type="text" />
				</div>
				<div class="mt-6 relative">
					<label
						class="block hidden text-gray-900 text-xs mb-2 absolute top-0 ml-3 text-indigo-900 -mt-3 bg-white"
					>Email</label>
					<input class="input" placeholder="Email" type="email" />
				</div>
				<div class="mt-6 relative">
					<label
						class="block hidden text-gray-900 text-xs mb-2 absolute top-0 ml-3 text-indigo-900 -mt-3 bg-white"
					>Password</label>
					<input class="input" type="password" placeholder="Password" />
				</div>
				<div class="mt-6">
					<button class="btn w-full">LOGIN</button>
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
	</AuthBase>
</template>
<script>
import AuthBase from "./Base";
export default {
	components: {
		AuthBase
	}
};
</script>
<style scoped>
</style>
