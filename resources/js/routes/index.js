import VRouter from "vue-router";
import vue from "vue";
import EducationHomePage from "../pages/Education/HomePage.vue";
import HomePage from "../pages/HomePage.vue";
import GivetemPage from "../pages/GivetemPage.vue"
import Verify from "../pages/Auth/Verify.vue";
import Login from "../pages/Auth/Login.vue";
import Profile from "../pages/ProfilePage.vue";
import Register from "../pages/Auth/Register.vue";
import SocialAuth from "../pages/Auth/SocialAuth.vue";
import { authMiddleware } from "../middleware/auth";
import store from "../store";
vue.use(VRouter)

const routes = [{
        path: "/",
        component: HomePage,
        meta: {
                guest: true
            }
    },
    {
        path: "/givetem/:id?",
        component: GivetemPage,
        meta: {
            guest: true
        }
    },
    {
        path: "/education",
        component: EducationHomePage,
        meta: {
            guest: true
        }
    }
    ,{
        path: "/register",
        component: Register,
        meta: {
            guest: true
        }
    }
    ,{
        path: "/login",
        component: Login,
        meta: {
            guest: true
        }
    }
    ,{
        path: "/verify",
        component: Verify
    },
    {
        path: "/profile",
        component: Profile
    },
    {
        path: '/auth/:provider/callback',
        component: SocialAuth
    },
]

const router = new VRouter({
    routes,
    mode: "history"
});

router.beforeEach((to, from, next) => {
    const auth = require('../middleware/auth');
    authMiddleware(to, from, next, store);
});

export default router;
