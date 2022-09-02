window.Vue = require('vue');

import App from './views/App';

const app = new Vue({
    el: '#App',
    render: h => h(App)
});