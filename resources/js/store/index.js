import vue from 'vue';
import vuex from 'vuex';
import authStore from './auth';

vue.use(vuex)

export default new vuex.Store({
    modules: { authStore },
    state: {
    },
    mutations: {
    },
    actions: {
    },
});
