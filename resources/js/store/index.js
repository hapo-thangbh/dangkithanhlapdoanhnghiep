import Vue from 'vue'
import Vuex from 'vuex'
Vue.use(Vuex)
import post from './modules/post'
import category from './modules/category'
import user from './modules/user'
import dashboard from './modules/dashboard'
import social_account from './modules/social_account'

const state = {

}

const getters = {

}

const mutations = {

}

const actions = {

}

const modules = {
    post,
    category,
    user,
    dashboard,
    social_account
}

export default new Vuex.Store({
    state,
    getters,
    mutations,
    actions,
    modules
})