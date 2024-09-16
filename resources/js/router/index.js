import {createMemoryHistory, createRouter} from 'vue-router'

import Pedidos from "./../Vue/Pedidos.vue";

const routes = [
    {path:'/',component:Pedidos },
]
export const router = createRouter({
    history: createMemoryHistory(import.meta.env.BASE_URL),
    routes,
})
