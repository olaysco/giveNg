require('./bootstrap');

import Vue from "vue";
import MainApp from "./components/app.vue";
import router from "./routes";
import store from './store';
import VueSocialauth from "vue-social-auth";
import { Form, HasError, AlertError } from 'vform';

window.Form = Form;
Vue.prototype.$http = axios
Vue.use(VueSocialauth, {
  providers: {
    google: {
      clientId: '',
      redirectUri: `${window.location.origin}/auth/google/callback` // Your client app URL
    }
  }
})

Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);

window.addEventListener('load', function () {
    new Vue({
        router,
        store,
        el: "#main",
        render: h => h(MainApp),
    })
});
