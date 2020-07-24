import vue from 'vue';
import vuex from 'vuex';
import authStore from './auth';
import givetemStore from "./givetem";

vue.use(vuex)

export default new vuex.Store({
    modules: { authStore, givetemStore },
    state: {
        tags: ['Household item', 'fashion', 'electronic', 'books', 'magazine']
    },
    mutations: {
    },
    actions: {
    },
});
