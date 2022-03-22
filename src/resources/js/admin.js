window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
let token = document.head.querySelector('meta[name="csrf-token"]');
if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found');
}
window.Vue = require('vue');
Vue.prototype.$http = axios;
Vue.component('track', require('./components/track.vue'));
Vue.component('trackIp', require('./components/trackIp.vue'));
const app = new Vue({
    el: '#app',
    data: ()=>({

    }),
    methods: {
    }
})
