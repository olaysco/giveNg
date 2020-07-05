<template>
	<div>welcome</div>
</template>
<script>
export default {
	mounted() {
		axios.get("/sanctum/csrf-cookie").then(response => {
			axios
				.get("/api/user")
				.then(res => {
					console.log(res);
				})
				.catch(err => {
					console.log(err);
				});
		});
	}
};
</script>
<style scoped>
</style>
