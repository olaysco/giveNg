<template>
	<AuthBase>
		<LoginForm @loginSuccess="handleLoginSuccess" />
	</AuthBase>
</template>
<script>
import AuthBase from "./Base";
import LoginForm from "../../components/organisms/OLoginForm.vue";
import { mapMutations } from "vuex";
export default {
	components: {
		AuthBase,
		LoginForm
	},
	data() {
		return {};
	},
	computed: {},
	methods: {
		handleLoginSuccess() {
			this.$router.push("/profile");
		}
	}
};
</script>
<style scoped>
</style>
