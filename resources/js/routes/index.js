import router from "vue-router";
import vue from "vue"
import HomePage from "../pages/HomePage.vue"
vue.use(router)

const routes = [{
    path: "/",
    component: HomePage
}]

export default new router({
    routes,
    mode: "history"
})
