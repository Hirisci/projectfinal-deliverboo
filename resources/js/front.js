window.Vue = require("vue");
import VueCookies from "vue-cookies";
Vue.use(VueCookies);
// axios importato come globale
window.axios = require("axios");

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

// aggiungiamo l'import del file router.js
import router from "./router";

import App from "./views/App";

const app = new Vue({
    el: "#App",
    render: (h) => h(App),
    router,
});
