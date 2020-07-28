Vue.component("toast", {
	template: `
    <div :class="['c-toasts__item', 'c-toasts__item--' + toast.type]" >
      <span class="c-toasts__item-text">{{ toast.text }}</span>
    </div>
  `,
	props: {
		toast: {
			type: Object,
			required: true,
		},
	},
});
Vue.component("toastManager")
export default ({ app }, inject) => {
    inject('toast', toast);
}
