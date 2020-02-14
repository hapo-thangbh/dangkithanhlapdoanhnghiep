import Vue from 'vue'
import VueRouter from 'vue-router'
import ApiService from './../api/index'

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

//Bình luận
import Comment from './../components/Comment/Comment.vue'

//Hộp thư
import ListInbox from './../components/Inbox/ListInbox.vue'

//Hồ sơ
import ListProfile from './../components/Profile/ListProfile.vue'

//Tài liệu
import ListDocument from './../components/Document/ListDocument.vue'

//Tài khoản xã hội
import ListSocialAccount from './../components/SocialAccount/ListSocialAccount.vue'
import AddSocialAccount from './../components/SocialAccount/AddSocialAccount.vue'

//Vị trí quảng cáo
import ListAdsPosition from './../components/AdsPosition/ListAdsPosition.vue'
import Axios from 'axios'

Vue.use(VueRouter)

export default new VueRouter({
    mode:'history',
    linkActiveClass: 'open active',
    base: '/',
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
            path: '/admin/user/edit/:id',
            name: 'editUser',
            component: EditUser
        },
        {
            path: '/admin/auth-profile',
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
        },

        //Hồ sơ
        {
            path: '/admin/Profile',
            name:'listProfile',
            component: ListProfile
        },

        //Tài liệu
        {
            path: '/admin/document',
            name:'listDocument',
            component: ListDocument
        },

        //Vị trí quảng cáo
        {
            path: '/admin/ads_position',
            name:'listAdsPosition',
            component: ListAdsPosition
        },
        {
            path: '*',
            redirect: {
              name: 'dashboard'
            }
        },

        // Tài khoản xã hội
        {
            path: '/admin/social_accounts',
            name:'listSocialAccount',
            component: ListSocialAccount
        },
        {
            path: '/admin/social_account/add',
            name:'addSocialAccount',
            component: AddSocialAccount
        }
    ]
})

function guardAdmin (to, from, next) {
    // let user = localStorage.getItem('infoUser')
    // if (user.level === 1) {
    //     if (to.name == 'dashboard' ||
    //         to.name == 'listUser' || to.name == 'addUser' || to.name == 'editUser' ||
    //         to.name == 'listPost' || to.name == 'addPost' || to.name == 'editPost' ||
    //         to.name == 'listCategory' || to.name == 'addCategory' || to.name == 'editCategory' ||
    //         to.name == 'comment' ||
    //         to.name == 'listInbox' ||
    //         to.name == 'listProfile' ||
    //         to.name == 'listDocument' ||
    //         to.name == 'listAdsPosition'
    //     ) {
    //         next()
    //     } else {
    //         next('/admin')
    //     }
    // } else if (user.level === 0) {
    //     if (to.name == 'dashboard' ||
    //         to.name == 'listPost' || to.name == 'addPost' || to.name == 'editPost' ||
    //         to.name == 'listCategory' || to.name == 'addCategory' || to.name == 'editCategory' ||
    //         to.name == 'comment' ||
    //         to.name == 'listInbox' ||
    //         to.name == 'listDocument' ||
    //         to.name == 'listAdsPosition'
    //     ) {
    //         next()
    //     } else {
    //         next('/admin')
    //     }
    // }

    return new Promise(resolve => {
        axios.get('/api/infoUser')
        .then(({data}) => {
            if (data.level === 1) {
                if (to.name == 'dashboard' ||
                    to.name == 'listUser' || to.name == 'addUser' || to.name == 'editUser' ||
                    to.name == 'listPost' || to.name == 'addPost' || to.name == 'editPost' ||
                    to.name == 'listCategory' || to.name == 'addCategory' || to.name == 'editCategory' ||
                    to.name == 'comment' ||
                    to.name == 'listSocialAccount' || to.name == 'addSocialAccount' ||
                    to.name == 'listInbox' ||
                    to.name == 'listProfile' ||
                    to.name == 'listDocument' ||
                    to.name == 'listAdsPosition'
                ) {
                    next()
                } else {
                    next('/admin')
                }
            } else if (data.level === 0) {
                if (to.name == 'dashboard' ||
                    to.name == 'listPost' || to.name == 'addPost' || to.name == 'editPost' ||
                    to.name == 'listCategory' || to.name == 'addCategory' || to.name == 'editCategory' ||
                    to.name == 'comment' ||
                    to.name == 'listSocialAccount' || to.name == 'addSocialAccount' ||
                    to.name == 'listInbox' ||
                    to.name == 'listDocument' ||
                    to.name == 'listAdsPosition'
                ) {
                    next()
                } else {
                    next('/admin')
                }
            }
        })
    })
}
