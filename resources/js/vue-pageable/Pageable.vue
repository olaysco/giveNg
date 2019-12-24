<template>
  <div ref="vuePageable" >
	<slot></slot>
  </div>

</template>
<script>
import Pageable from "pageable";
export default {
	props: {
		options: {
			required: false,
			default: function(){
                return {}
            }
		}
	},
	data(){
		return {api: undefined,}
	},
	methods: {
		init() {
            this.api = new Pageable(this.$refs.vuePageable, this.options);
            console.log(this.api)
		},
		destroy(){
			if(this.api !== "undefined" && this.api.destroy !== "undefined") {
				this.api.destroy();
				this.api = undefined;
			}
		}
	},
	mounted(){
		this.init();
	},
	beforeDestroy(){
		if (typeof this.api !== "undefined"){
			this.destroy();
		}
	}


}
</script>
<style scoped>
</style>
