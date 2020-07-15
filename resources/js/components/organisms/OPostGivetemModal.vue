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
				<div class="mt-6 relative">
					<label class="block text-blue-900 text-xs mb-2 font-bold">Givetem Image</label>
					<MImageUpload
						:showDesc="false"
						v-model="givetemForm.image"
						:placeholder="'Givetem Image'"
						:name="'shot 1'"
						id="image1"
						v-slot="slotProps"
						class="mr-1"
						key="banner"
					>
						<div
							class="w-48 h-32 border rounded-md hover:border-blue-700 flex justify-center items-center cursor-pointer"
							@click="slotProps.clickUpload"
							:style="{ backgroundImage: 'url(' + givetemForm.image.data.replace(/(\r\n|\n|\r)/gm, '') + ')'}"
						>
							<IImageArea
								fill="#2b6cb0"
								width="48"
								height="48"
								v-show="givetemForm.image.data === '' || givetemForm.image.data === '/storage/'  "
							/>
						</div>
					</MImageUpload>
					<has-error :form="givetemForm" field="caption"></has-error>
					<AFormHelp>Tips: Choose clear image</AFormHelp>
				</div>
			</div>
		</div>
	</MBaseModal>
</template>
<script>
import MBaseModal from "../molecules/MBaseModal";
import MImageUpload from "../molecules/MImageUpload";
import AFormHelp from "../atoms/AFormHelp";
import IImageArea from "../icons/IImageArea";
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
				image: {
					data: ""
				},
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
		MImageUpload,
		AFormHelp,
		IImageArea
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
