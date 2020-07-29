import Axios from "axios";

const givetem = {
    state: {
        allGivetems: [],
        myCreatedGivetems: [],
        myReceivedGivetems: [],
        currentSingleGivetem: null
    },
    actions: {
        postGivetem({dispatch}, form) {
            return new Promise((resolve, reject) => {
                form.post("/api/givetem")
                    .then(response => {
                        dispatch("fetchMyCreatedGivetems");
                        resolve(response);
                    })
                    .catch(err => reject(form));
            });
        },
        fetchMyCreatedGivetems({commit}) {
            Axios.get("/api/user/givetems")
                .then(response => {
                    commit("setMyCreatedGivetems", response.data)
                }).catch(err => {
                    console.log(err)
                })
        },
        fetchAllGivetems({ commit }) {
            Axios.get("/api/givetems")
                .then(response => {
                    commit("setAllGivetems", response.data.data)
                }).catch(err => {
                    console.log(err)
                })
        },
        fetchGivetemById({ commit }, id) {
            Axios.get(`/api/givetem/${id}`)
                .then(response => {
                    commit("setCurrentSingleGivetem", response.data.data);
                })
        }
    },
    mutations: {
        setMyCreatedGivetems(state, givetems) {
            state.myCreatedGivetems = givetems
        },
        setAllGivetems(state, givetems) {
            state.allGivetems = givetems
        },
        setCurrentSingleGivetem(state, givetem) {
            state.currentSingleGivetem = givetem;
        }
    }
}

export default givetem;
