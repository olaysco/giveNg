<template>
	<MBaseModal v-if="visible">
		<div class="px-8 py-8 flex flex-col items-center">
			<div class="flex justify-between w-full">
				<h4 class="font-bold text-2xl text-blue-900">Create new Givetem</h4>
				<a
					href="#"
					class="bg-gray-400 grid h-10 items-center justify-center rounded-md text-gray-800 text-xs w-10"
					@click="doClose"
				>X</a>
			</div>
			<div class="w-full md:w-3/5 mt-8">
				<div class="mt-6 relative">
					<label class="block text-blue-900 text-xs mb-2 font-bold">Givetem Title</label>
					<input
						class="input"
						placeholder="Givetem title e.g. Used IPhone 7"
						type="title"
						v-model="givetemForm.title"
						:class="{ 'is-invalid':givetemForm.errors.has('title') }"
					/>
					<has-error :form="givetemForm" field="title"></has-error>
					<AFormHelp>Tips: use short and very descriptive title</AFormHelp>
				</div>
				<div class="mt-6 relative">
					<label class="block text-blue-900 text-xs mb-2 font-bold">Givetem Caption</label>
					<input
						class="input"
						placeholder="Givetem caption e.g. IPhone used only for about a year."
						type="title"
						v-model="givetemForm.caption"
						:class="{ 'is-invalid':givetemForm.errors.has('caption') }"
					/>
					<has-error :form="givetemForm" field="caption"></has-error>
					<AFormHelp>Tips: it should be a single sentence</AFormHelp>
				</div>
			</div>
		</div>
	</MBaseModal>
</template>
<script>
import MBaseModal from "../molecules/MBaseModal";
import AFormHelp from "../atoms/AFormHelp";
export default {
	props: {
		visible: {
			required: true,
			type: Boolean
		}
	},
	data() {
		return {
			givetemForm: new Form({
				title: "",
				image: "",
				caption: "",
				available: "",
				category: "",
				pickup_location: "",
				info: "",
				tags: ""
			})
		};
	},
	components: {
		MBaseModal,
		AFormHelp
	},
	methods: {
		doClose() {
			this.$emit("close");
		}
	}
};
</script>
<style scoped>
</style>
