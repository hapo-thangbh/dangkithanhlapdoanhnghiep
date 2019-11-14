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
import Dashboard from './components/Dashboard.vue'
import User from './components/Users.vue'
import Profile from './components/Profile.vue'

Vue.use(VueRouter)
let routes = [
    { 
        path: '/admin', 
        redirect: '/admin/dashboard'
    },
    { 
        path: '/admin/dashboard', 
        name: 'dashboard',
        component: Dashboard
    },
    { 
        path: '/admin/user', 
        name: 'listUser',
        component: User
    },
    { 
        path: '/admin/profile', 
        name:'profile', 
        component: Profile
    }
]

const router = new VueRouter({
    mode:'history',
    linkActiveClass: 'open active',
    routes 
})

const app = new Vue({
    el: '#app',
    router
});
