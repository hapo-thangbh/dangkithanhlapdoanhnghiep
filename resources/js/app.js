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
import User from './components/User.vue'
import Profile from './components/Profile.vue'

Vue.use(VueRouter)
let routes = [
    { 
        path: '/admin/dashboard', 
        // component: require('./components/Dashboard.vue').default 
        component: Dashboard
    },
    { 
        path: '/admin/user', 
        component: require('./components/Users.vue').default 
    },
    { 
        path: '/admin/profile', 
        name:'profile', 
        component: require('./components/Profile.vue').default 
    }
]

// export default new Router({
//     mode: 'history',
//     base: '/',
//     linkActiveClass: 'open active',
//     routes: [{
//       path: '/',
//       component: DefaultContainer,
//       children: [{
//         path: '/',
//         component: ListVoice,
//         name: 'listVoice',
//         beforeEnter: guard
//       },
//       {
//         path: '/voice/list',
//         component: ListVoice,
//         name: 'listVoice',
//         beforeEnter: guard
//       },
//       {
//         path: '/bookmark/list',
//         component: ListBookmark,
//         name: 'listBookmark',
//         beforeEnter: guard
//       },
//       {
//         path: '/history/list',
//         component: ListHistory,
//         name: 'listHistory',
//         beforeEnter: guard
//       },
//       {
//         path: '/auth/changepassword',
//         component: ChangePassword,
//         name: 'changePassword',
//         beforeEnter: guard
//       }
//       ]
//     },
//     {
//       path: '/admin',
//       component: AdminContainer,
//       children: [{
//         path: '/',
//         component: Dashboard,
//         name: 'dashboard',
//         beforeEnter: guardAdmin
//       },
//       {
//         path: '/admin/user',
//         name: 'listUserAdmin',
//         component: User,
//         beforeEnter: guardAdmin
//       },
//       {
//         path: '/admin/user/add',
//         name: 'addUser',
//         component: AddUser,
//         beforeEnter: guardAdmin
//       },
//       {
//         path: '/admin/user/:id/edit',
//         name: 'editUser',
//         component: EditUser,
//         beforeEnter: guardAdmin
//       }, {
//         path: '/admin/group',
//         name: 'listGroupAdmin',
//         component: Group,
//         beforeEnter: guardAdmin
//       },
//       {
//         path: '/admin/group/add',
//         name: 'addGroup',
//         component: AddGroup,
//         beforeEnter: guardAdmin
//       },
//     },
//     {
//       path: '*',
//       redirect: {
//         name: '404'
//       }
//     },
//     {
//       path: '/404',
//       name: '404',
//       component: PageNotFound
//     },
//     {
//       path: '/login',
//       component: Login,
//       name: 'login'
//     }]   
// })


const router = new VueRouter({
    mode:'history', 
    routes 
})

const app = new Vue({
    el: '#app',
    router
});
