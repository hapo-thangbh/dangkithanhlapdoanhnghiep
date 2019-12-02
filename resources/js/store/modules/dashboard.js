import ApiService from '../../api'
import { reject } from 'q'
import router from './../../router'

export default {
    namespaced: true,
    state: {
        countPost: '',
        countUser: ''
    },
    mutations: {
        setErrors (state, data) {
            state.errors = data
        },
        setCountPost (state, data) {
            state.countPost = data
        },
        setCountUser (state, data) {
            state.countUser = data
        },
    },
    actions: {
        getCountPost (context, commit) {
            return new Promise(resolve => {
                ApiService.get('/api/posts/count')
                .then(({
                    data
                }) => {
                    context.commit('setCountPost', data)
                    resolve(data)
                })
                .catch(err => {
                    console.log(err)
                    context.commit('setErrors', err)
                    reject(err)
                })
            })
        },
        getCountUser (context, commit) {
            return new Promise(resolve => {
                ApiService.get('/api/users/count')
                .then(({
                    data
                }) => {
                    context.commit('setCountUser', data)
                    resolve(data)
                })
                .catch(err => {
                    console.log(err)
                    context.commit('setErrors', err)
                    reject(err)
                })
            })
        }
    }
}