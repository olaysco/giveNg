require('./bootstrap');

import Vue from "vue";
import MainApp from "./components/app.vue";
import VuePageablePlugin from "./vue-pageable";

Vue.use(VuePageablePlugin);

window.addEventListener('load', function () {
    new Vue({
        el: "#main",
        render: h => h(MainApp)
    })
});
