import VuePageable from "./Pageable.vue";

const VuePageablePlugin =  {
	install (Vue, options) {
        Vue.component('vue-pageable', VuePageable);
	}
}

if (typeof window !== 'undefined' && window.Vue) {
	window.Vue.use(VuePageablePlugin)
}

export default VuePageablePlugin
