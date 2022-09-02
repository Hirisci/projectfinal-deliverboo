import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import Home from "./pages/Home";
const router = new VueRouter({
    mode: "history", //permette la navigazione all'indietro
    routes: [
        {
            path: "/",
            name: "home",
            component: Home
        },
    ]
});

export default router