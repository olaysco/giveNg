<template>
	<div class="row">
		<div class="col-md-12">
			<div>
				<div>
					<div class="complete-text rounded">
						<h2>Yes! You're almost there.</h2>
						<span
							class="w-100"
						>Thank you for signing up with RoyalPay. Just some steps away from getting started</span>
						<ol class="steps mt-4">
							<li>
								Check your email for an activation email(we sent it to
								<b>{{authStore.registeredUser.email}}</b>)
							</li>
							<li>Click the link in the email to activate your account</li>
							<li>Continue to your account</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
import { mapState } from "vuex";
export default {
	computed: {
		...mapState(["authStore"])
	}
};
</script>
<style scoped>
.complete-text {
	background-color: rgba(25, 46, 58, 0.82);
	padding: 1em 2em;
	line-height: 36px;
}
.complete-text h2 {
	color: #ffeb3b;
	text-align: center;
}
.steps {
	margin: 0;
	padding: 0;
	list-style-type: none;
}

.steps li {
	counter-increment: step-counter;
	margin-bottom: 10px;
}
p {
	overflow-y: scroll;
}
.steps li::before {
	content: counter(step-counter);
	margin-right: 5px;
	font-size: 80%;
	background-color: #a51882;
	color: white;
	font-weight: bold;
	padding: 3px 8px;
	border-radius: 3px;
}
.card-img-overlay {
	overflow-y: auto;
	display: flex;
	justify-content: center;
	align-items: center;
}
.card-text {
	overflow: hidden;
}
</style>
