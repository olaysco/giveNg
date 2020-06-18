require('./bootstrap');

import Vue from "vue";
import MainApp from "./components/app.vue";
import router from "./routes";

window.addEventListener('load', function () {
    new Vue({
        router,
        el: "#main",
        render: h => h(MainApp),
    })
});
