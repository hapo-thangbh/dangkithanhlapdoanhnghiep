import Vue from 'vue'
import VueRouter from 'vue-router'

import Dashboard from './../components/Dashboard.vue'

import ListUser from './../components/User/ListUser.vue'
import AddUser from './../components/User/AddUser.vue'
import EditUser from './../components/User/EditUser.vue'
import Profile from './../components/User/Profile.vue'

import ListPost from './../components/Post/ListPost.vue'
import AddPost from './../components/Post/AddPost.vue'
import EditPost from './../components/Post/EditPost.vue'

import ListCategory from './../components/Category/ListCategory.vue'
import AddCategory from './../components/Category/AddCategory.vue'
import EditCategory from './../components/Category/EditCategory.vue'

//bình luận
import Comment from './../components/Comment/Comment.vue'

//hộp thư
import ListInbox from './../components/Inbox/ListInbox.vue'

Vue.use(VueRouter)

export default new VueRouter({
    mode:'history',
    linkActiveClass: 'open active',
    routes: [
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
            path: '/admin/post/edit/:id',
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
            path: '/admin/category/edit/:id',
            name:'editCategory',
            component: EditCategory
        },

        //Bình luận
        {
            path: '/admin/comment',
            name:'comment',
            component: Comment
        },

        //Hộp thư
        {
            path: '/admin/inbox',
            name:'listInbox',
            component: ListInbox
        }
    ]
})
