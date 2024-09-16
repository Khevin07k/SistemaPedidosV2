import { Api } from "./Api.Service";

export default {
    list: () => {
        return Api().get("/listarMenu");
    },
    /*listAll: () => {
        return Api().get("/allmenu");
    },
    store: (dat) => {
        return Api().post("/menu", dat);
    },
    showList: (id) => {
        return Api().get(/menu/${id});
    },
    update: (id, dat) => {
        return Api().put(/menu/${id}, dat);
    },
    destroy: (id) => {
        return Api().delete(/menu/${id});
    },*/
};
