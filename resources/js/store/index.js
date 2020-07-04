import vue from 'vue';
import vuex from 'vuex';
import authStore from './auth';

vue.use(vuex)

const store = new vuex.Store({
    modules: { authStore },
    state: {
    },
    mutations: {
    },
    actions: {
    },
});

export default store;
