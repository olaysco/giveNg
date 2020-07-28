import Axios from "axios";

const givetem = {
    state: {
        allGivetems: [],
        myCreatedGivetems: [],
        myReceivedGivetems: []
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
        fetchMyCreatedGivetems() {
            Axios.get("api/givetem")
                .then(response => {
                    console.log(response)
                }).catch(err => {
                    console.log(err)
                })
        }
    },
    getters: {},
    mutations: {  }
}

export default givetem;
