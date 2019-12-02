import Vue from 'vue'
import Vuex from 'vuex'
Vue.use(Vuex)
import post from './modules/post'
import category from './modules/category'
import user from './modules/user'

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
    user
}

export default new Vuex.Store({
    state,
    getters,
    mutations,
    actions,
    modules
})