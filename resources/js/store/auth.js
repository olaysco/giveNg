const authStore = {
    state: {
        registeredUser: null,
        authUser: user
    },
    mutations: {
        setRegisteredUser(state, user) {
            state.registeredUser = user;
        },
        setAuthUser(state, user) {
            state.authUser = user;
        }
    },
    actions: {
        loginUser({ commit }, form) {
            return new Promise((resolve, reject) => {
                axios.get("/sanctum/csrf-cookie").then(response => {
                    form.post("/api/login")
                        .then(response => {
                            commit("setAuthUser", response.data);
                            return resolve(form);
                        })
                        .catch(error => {
                            return reject(form);
                        });
                });
            });
        },
        logoutUser() {
            axios.post("/api/logout");
        },
        getUser({ commit }) {
            return axios.get("/sanctum/csrf-cookie").then(response => {
                return axios
                    .get("/api/user")
                    .then(res => {
                        commit("setAuthUser", res.data);
                    })
                    .catch(err => {
                        console.log(err);
                    });
            });
        }
    }
};

export default authStore;
