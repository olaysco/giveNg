

const authStore = {
    namespaced: false,
    state: {
        registeredUser: null,
        authUser: null
    },
    mutations: {
        setRegistereduser(state, user) {
            state.registeredUser = user;
        },
        setCurrentAuthUser(state, user) {
            state.authUser = user;
        }
    },
    actions: {
    },
};

export default authStore;
