import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import Home from "./pages/Home";
import RestaurantSection from "./pages/RestaurantSection";
import Page404 from "./components/sections/Page404";
import { component } from "vue/types/umd";

const router = new VueRouter({
    mode: "history", //permette la navigazione all'indietro
    routes: [
        {
            path: "/",
            name: "home",
            component: Home
        },
        {
            path: "/restaurant/:slug",
            name: "restaurant",
            component: RestaurantSection
        },
        {
            path: "/checkout",
            name: "checkout",
            component: CheckoutSection
        },
        {   // rotta 404 sempre per ultima
            path: "/*",
            name: "page-404",
            component: Page404
        },
    ]
});

export default router