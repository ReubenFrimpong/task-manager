window.Vue = require('vue');
require('./bootstrap');

Vue.component('list', require('./components/List').default)

const app = new Vue({
    el: '#app',

})