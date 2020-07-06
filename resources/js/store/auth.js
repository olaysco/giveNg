

const authStore = {
    namespaced: false,
    state: {
        registeredUser: null,
        authUser: null
    },
    mutations: {
        setRegisteredUser(state, user) {
            state.registeredUser = user;
        },
        setCurrentAuthUser(state, user) {
            state.authUser = user;
        }
    },
    actions: {
        registerUser({dispatch,state}, user) {
            state.registeredUser = user;
            console.log(dispatch)
        },
        loginUser({ state }) {
            return new Promise((resolve, reject) => {
                axios.get('/sanctum/csrf-cookie').then(response => {
                    axios.post('/login', state.registeredUser).then(response => {
                        return resolve(response);
                    }).catch(error => {
                        return reject(error)
                    }); // credentials didn't match
                });
            })
        },
        getUser({commit}) {
            axios.get("/sanctum/csrf-cookie").then(response => {
                axios
                    .get("/api/user")
                    .then(res => {
                        commit("setCurrentAuthUser", res.data)
                    })
                    .catch(err => {
                        console.log(err);
                    });
            });
        }
    },
};

export default authStore;
