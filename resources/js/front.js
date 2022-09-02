window.Vue = require('vue');

// axios importato come globale
window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import App from './views/App';

const app = new Vue({
    el: '#App',
    render: h => h(App)
});