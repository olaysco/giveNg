const givetem = {
    state: {
        allGivetems: [],
        myCreatedGivetems: [],
        myReceivedGivetems: []
    },
    actions: {
        postGivetem(payload, form) {
            return new Promise((resolve, reject) => {
                form.post("/api/givetem")
                    .then(response => {
                        dispatch("fetchMyCreatedGivetems");
                        resolve(form);
                    })
                    .catch(err => reject(form));
            });
        },
        fetchMyCreatedGivetems() {

        }
    },
    getters: {},
    mutations: {  }
}

export default givetem;
