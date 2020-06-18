import router from "vue-router";
import vue from "vue";
import EducationHomePage from "../pages/Education/HomePage.vue";
import HomePage from "../pages/HomePage.vue";
import Login from "../pages/Auth/Login.vue";
import Register from "../pages/Auth/Register.vue";
vue.use(router)

const routes = [{
        path: "/",
        component: HomePage
    },{
        path: "/education",
        component: EducationHomePage
    }
    ,{
        path: "/register",
        component: Register
    }
    ,{
        path: "/login",
        component: Login
    }]

export default new router({
    routes,
    mode: "history"
})
