import Toast from './Toast.vue';
import Api from './api.js';
import Positions from './positions.js';

const Plugin = (Vue, options = {}) => {
  let methods = Api(Vue, options);
  Vue.$toast = methods;
  Vue.prototype.$toast = methods;
};

Toast.install = Plugin;

export default Toast;
export {Toast, Positions}
