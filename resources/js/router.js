import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import Home from "./pages/Home";
import Page404 from "./pages/Page404";

const router = new VueRouter({
    mode: "history", //permette la navigazione all'indietro
    routes: [
        {
            path: "/",
            name: "home",
            component: Home
        },
        {   // questo link deve essere ASSOLUTAMENTE ultimo del router
            path: "/*",
            name: "page-404",
            component: Page404
        },
    ]
});

export default router