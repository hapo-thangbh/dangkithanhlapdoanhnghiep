import ApiService from '../../api'
import { reject } from 'q'
import router from './../../router'

export default {
    namespaced: true,
    state: {
        users:[],
        errors: '',
        user: {
            username: '',
            email: '',
            name: '',
            avatar: '',
            password: '',
            level: ''
        }
    },
    mutations: {
        clearUser (state, data) {
            state.user = data
        },
        setUsers (state, data) {
            state.users = data
        },
        setErrors (state, data) {
            state.errors = data
        },
        setUser (state, data) {
            state.user = data
        }
    },
    actions: {
        //clear
        clearUser (context) {
            const user = {
                username: '',
                email: '',
                name: '',
                avatar: '',
                password: '',
                level:''
            }

            context.commit('clearUser', user)
        },

        //get list user
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
        },
        
        //create user
        addUser (context, data) {
            return new Promise(resolve => {
                ApiService.post('/api/users/create', data)
                .then(({
                    data
                }) => {
                    if (data.status === 200) {
                        context.commit('setUser', data)
                        router.push({ name: 'listUser' })
                        window.toast.fire({
                            icon: 'success',
                            title: data.message
                        })
                        resolve(data)
                    } else {
                        window.toast.fire({
                            icon: 'error',
                            title: 'Tạo tài khoản thất bại!'
                        })
                    }
                })
                .catch(error => {
                    console.log(error)
                    reject(error)
                })
            })
        },

        //update user
        updateUser (context, data) {
            let id = data.id
            return new Promise(resolve => {
                ApiService.post('/api/users/edit/' + id, data)
                .then(({
                    data
                }) => {
                    if (data.status === 200) {
                        context.commit('setUser', data)
                        router.push({ name: 'listUser' })
                        window.toast.fire({
                            icon: 'success',
                            title: data.message
                        })
                        resolve(data)
                    } else {
                        window.toast.fire({
                            icon: 'error',
                            title: 'Cập nhật tài khoản thất bại!'
                        })
                    }
                })
                .catch(error => {
                    console.log(error)
                    reject(error)
                })
            })
        },

        deleteUser ({context, dispatch}, id) {
            return new Promise(resolve => {
                ApiService.delete('/api/users/delete/' +  id)
                    .then(({data}) => {
                        if (data.status === 200) {
                            dispatch('getUsers')
                            window.swal.fire(
                                '',
                                data.message,
                                'success'
                            )
                            resolve(data)
                        } else {
                            window.swal.fire(
                                '',
                                data.error,
                                'error'
                            )
                            context.commit('setErrors', data.error)
                        }
                    })
                    .catch(err => {
                        console.log(err)
                        reject(err)
                    })
            })
        },
    }
}