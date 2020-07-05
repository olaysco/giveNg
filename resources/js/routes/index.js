import router from "vue-router";
import vue from "vue";
import EducationHomePage from "../pages/Education/HomePage.vue";
import HomePage from "../pages/HomePage.vue";
import GivetemPage from "../pages/GivetemPage.vue"
import Verify from "../pages/Auth/Verify.vue";
import Login from "../pages/Auth/Login.vue";
import Register from "../pages/Auth/Register.vue";
vue.use(router)

const routes = [{
        path: "/",
        component: HomePage
    },
    {
        path: "/givetem/:id?",
        component: GivetemPage
    },
    {
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
    }
    ,{
        path: "/verify",
        component: Verify
    }
]

export default new router({
    routes,
    mode: "history"
})
