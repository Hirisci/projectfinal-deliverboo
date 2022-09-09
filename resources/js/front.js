import App from "./views/App";
window.Vue = require("vue");

import VUEbraintree from "vue-braintree";

Vue.use(VUEbraintree);

// axios importato come globale
window.axios = require("axios");
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

// aggiungiamo l'import del file router.js
import router from "./router";

import VueCookies from "vue-cookies";
Vue.use(VueCookies);

const app = new Vue({
    el: "#App",
    render: (h) => h(App),
    router,
});
