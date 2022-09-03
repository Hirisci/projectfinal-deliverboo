import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import Home from "./pages/Home";
import RestaurantSection from "./pages/RestaurantSection";
const router = new VueRouter({
    mode: "history", //permette la navigazione all'indietro
    routes: [
        {
            path: "/",
            name: "home",
            component: Home
        },
        {
            path: "/restaurant",
            name: "restaurant",
            component: RestaurantSection
        },
    ]
});

export default router