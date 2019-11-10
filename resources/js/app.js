require('./bootstrap');

window.Vue = require('vue');

import swal from 'sweetalert2'
import VueRouter from 'vue-router'

window.swal = swal;
const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 5000
  });
window.toast = toast;

Vue.use(VueRouter)
let routes = [
    { path: '/dashboard', component: require('./components/Dashboard.vue').default },
    { path: '/user', component: require('./components/Users.vue').default },
    { path: '/profile', name:'profile', component: require('./components/Profile.vue').default }
]

const router = new VueRouter({
    mode:'history', 
    routes 
})

const app = new Vue({
    el: '#app',
    router
});
