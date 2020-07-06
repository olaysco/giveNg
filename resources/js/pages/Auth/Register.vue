<template>
	<AuthBase>
		<RegisterForm @registerSuccess="handleRegisterSuccess()" />
	</AuthBase>
</template>
<script>
import AuthBase from "./Base";
import RegisterForm from "../../components/organisms/ORegisterForm";
import { mapMutations } from "vuex";
export default {
	components: {
		AuthBase,
		RegisterForm
	},
	data() {
		return {};
	},
	methods: {
		handleRegisterSuccess() {
			//alert and redirect
			alert("success");
			this.$router.push("/profile");
		}
	}
};
</script>
<style scoped>
</style>
