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

import ListUser from './components/User/ListUser.vue'
import AddUser from './components/User/AddUser.vue'
import EditUser from './components/User/EditUser.vue'
import Profile from './components/User/Profile.vue'

import ListPost from './components/Post/ListPost.vue'
import AddPost from './components/Post/AddPost.vue'
import EditPost from './components/Post/EditPost.vue'

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
        component: ListUser
    },
    { 
        path: '/admin/user/add', 
        name: 'addUser',
        component: AddUser
    },
    { 
        path: '/admin/user/edit', 
        name: 'editUser',
        component: EditUser
    },
    { 
        path: '/admin/profile', 
        name:'profile', 
        component: Profile
    },
    { 
        path: '/admin/post', 
        name:'listPost', 
        component: ListPost
    },
    { 
        path: '/admin/post/add', 
        name:'addPost', 
        component: AddPost
    },
    { 
        path: '/admin/post/edit', 
        name:'editPost', 
        component: EditPost
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
