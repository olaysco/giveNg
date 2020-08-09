import Axios from "axios";

const givetem = {
    state: {
        allGivetems: [],
        myCreatedGivetems: [],
        givetemCategories: [
				{ name: "Wares", icon: "ICloth", slug: "wares" },
				{ name: "Food & Beverages", icon: "IFood", slug: "food" },
				{ name: "Protective Mask", icon: "IMask", slug: "mask" },
				{ name: "House Furniture", icon: "IFurniture", slug: "furniture" },
				{ name: "Healthcare & wellbeing", icon: "IMedics", slug: "medics" },
				{ name: "Counseling & care giving", icon: "ICounsel", slug: "counsel" },
				{ name: "Pets", icon: "IPet", slug: "pet" },
				{ name: "more", icon: "IMiscel", slug: "others" },
			],
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
                    commit("setAllGivetems", response.data)
                    console.log(response)
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
