require('./bootstrap');
window.Vue = require('vue');

import swal from 'sweetalert2'
import VueRouter from 'vue-router'
import store from './store/index'
import moment from 'moment'
import { extend } from 'vee-validate'
import {
    min,
    required,
    email
} from 'vee-validate/dist/rules'
  
extend('required', required)
extend('min', min)
extend('email', email)

window.moment = moment
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

import ListCategory from './components/Category/ListCategory.vue'
import AddCategory from './components/Category/AddCategory.vue'
import EditCategory from './components/Category/EditCategory.vue'

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
    },
    { 
        path: '/admin/category', 
        name:'listCategory', 
        component: ListCategory
    },
    { 
        path: '/admin/category/add', 
        name:'addCategory', 
        component: AddCategory
    },
    { 
        path: '/admin/category/edit', 
        name:'editCategory', 
        component: EditCategory
    }
]

const router = new VueRouter({
    mode:'history',
    linkActiveClass: 'open active',
    routes 
})

const app = new Vue({
    el: '#app',
    store,
    router
});
