import Router from 'vue-router'
import Vue from 'vue'

import DefaultContainer from './../view/frontend/layout/Default.vue'
import DefaultAdminContainer from './../view/admin/layout/Default.vue'
import Dashboard from './../view/admin/Dashboard.vue'

import LoginAdmin from './../view/admin/user/Login.vue'

import ListUserAdmin from './../view/admin/user/ListUser.vue'
import AddUser from './../view/admin/user/AddUser.vue'
Vue.use(Router)

export default new Router({
    mode: 'history',
    base: '/',
    linkActiveClass: 'active',
    routes: [
        {
            path: '/',
            component: DefaultContainer
        },
        {
            path: '/login',
            name: 'loginAdmin',
            component: LoginAdmin
        },
        {
            path: '/admin',
            component: DefaultAdminContainer,
            children: [
                {
                    path: '/',
                    name: 'dashboard',
                    component: Dashboard,
                    // beforeEnter: guardAdmin
                },
                {
                    path: '/user',
                    name: 'listUserAdmin',
                    component: ListUserAdmin
                },
                {
                    path: '/user/add',
                    name: 'addUser',
                    component: AddUser
                }
            ]
        }
    ]
})