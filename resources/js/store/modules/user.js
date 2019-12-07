import ApiService from '../../api'
import { reject } from 'q'
import router from './../../router'

export default {
    namespaced: true,
    state: {
        users:[],
        errors: ''
    },
    mutations: {
        setUsers (state, data) {
            state.users = data
        },
        setErrors (state, data) {
            state.errors = data
        }
    },
    actions: {
        getUsers (context, commit) {
            return new Promise(resolve => {
                ApiService.get('/api/users')
                .then(({
                    data
                }) => {
                    context.commit('setUsers', data)
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