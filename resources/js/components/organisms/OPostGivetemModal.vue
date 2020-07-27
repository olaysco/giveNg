<template>
	<MBaseModal v-if="visible">
		<form action="#">
			<div class="px-8 py-8 flex flex-col items-center">
				<div class="flex justify-between w-full">
					<h4 class="font-bold text-2xl text-blue-900 cursor-not-allowed title">Create Givetem</h4>
					<a
						href="#"
						aria-label="modal close button"
						role="button"
						class="bg-gray-400 grid h-10 items-center justify-center rounded-md shadow-lg text-gray-900 text-xs w-10 fixed right-0 mr-10"
						@click="doClose"
					>X</a>
				</div>
				<div class="w-full md:w-3/5 mt-8">
					<div class="mt-6 relative">
						<label class="label">Givetem Title</label>
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
						<label class="label">Givetem Caption</label>
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
						<label class="label">Givetem Image</label>
						<MImageUpload
							:showDesc="false"
							v-model="givetemForm.image"
							:placeholder="'Givetem Image'"
							:name="'shot 1'"
							id="image1"
							v-slot="slotProps"
							class="mr-1"
							:class="{ 'is-invalid':givetemForm.errors.has('image') }"
							key="banner"
						>
							<div
								class="w-48 h-32 border rounded-md hover:border-blue-700 flex justify-center items-center cursor-pointer bg-cover bg-repeat-space"
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
						<has-error :form="givetemForm" field="image"></has-error>
						<AFormHelp>Tips: Choose clear image</AFormHelp>
					</div>
					<div class="mt-6 relative">
						<label class="label">Pickup location</label>
						<Places
							class="input"
							placeholder="Givetem pickup location"
							type="text"
							v-model="givetemForm.pickup_location.label"
							@change="val => { givetemForm.pickup_location.data = val }"
							:options="options"
							:class="{ 'is-invalid':givetemForm.errors.has('pickup_location') }"
						/>
						<has-error :form="givetemForm" field="pickup_location"></has-error>
						<AFormHelp>Tips: pickup location</AFormHelp>
					</div>
					<div class="mt-6 relative">
						<label for="#infoInput" class="label">Givetem info</label>
						<textarea
							class="input"
							placeholder="Givetem full info .i.e a detailed info."
							v-model="givetemForm.info"
							:class="{ 'is-invalid':givetemForm.errors.has('info') }"
							id
							cols="30"
							rows="10"
						></textarea>
						<has-error :form="givetemForm" field="info"></has-error>
						<AFormHelp>Tips: max of 2000 words</AFormHelp>
					</div>
					<div class="mt-6 relative">
						<label for="#infoTag" class="label">Tags</label>
						<v-select
							taggable
							multiple
							label="title"
							class="vSelect"
							:class="{ 'is-invalid':givetemForm.errors.has('tags') }"
							:options="tags"
							v-model="givetemForm.tags"
							placeholder="tag the givetem"
						/>
						<has-error :form="givetemForm" field="tags"></has-error>
					</div>
					<div class="mt-6 relative">
						<button
							type="button"
							class="btn float-right"
							@click="handlePost"
							:disabled="givetemForm.busy"
						>
							<span v-if="!givetemForm.busy">POST GIVETERM</span>
							<span v-else>busy....</span>
						</button>
					</div>
				</div>
			</div>
		</form>
	</MBaseModal>
</template>
<script>
import "vue-select/dist/vue-select.css";
import MBaseModal from "../molecules/MBaseModal";
import MImageUpload from "../molecules/MImageUpload";
import AFormHelp from "../atoms/AFormHelp";
import IImageArea from "../icons/IImageArea";
import Places from "vue-places";
import vSelect from "vue-select";
import { mapState, mapActions } from "vuex";
export default {
	props: {
		visible: {
			required: true,
			type: Boolean,
		},
	},
	data() {
		return {
			givetemForm: new Form({
				title: "",
				image: {
					data: "",
				},
				caption: "",
				available: "",
				category: "",
				pickup_location: {
					label: null,
					data: {},
				},
				info: "",
				tags: "",
			}),
			options: {
				appId: process.env.MIX_ALGOLIA_APP_ID,
				apiKey: process.env.MIX_ALGOLIA_SEARCH_KEY,
				countries: ["NG"],
			},
		};
	},
	computed: {
		tags() {
			return this.$store.state.tags;
		},
	},
	components: {
		MBaseModal,
		MImageUpload,
		AFormHelp,
		IImageArea,
		Places,
		vSelect,
	},
	methods: {
		...mapActions(["postGivetem"]),
		doClose() {
			this.$emit("close");
		},
		handlePost() {
			this.postGivetem(this.givetemForm)
				.then(() => {
					alert("givetem posted successfully");
				})
				.catch((form) => {});
		},
	},
};
</script>
<style scoped>
.title {
	font-variant: small-caps;
}
</style>
