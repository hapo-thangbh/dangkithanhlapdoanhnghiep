import ApiService from '../../api'
import { reject } from 'q'
import router from '../../router'

export default {
    namespaced: true,
    state: {
        social_accounts: {},
        errors: '',
        message: '',
        social_account: {
            source: '',
            link: ''
        }
    },
    mutations: {
        setSocialAccounts (state, data) {
            state.social_accounts = data
        },
        setErrors (state, data) {
            state.errors = data
        },
        setMessage (state, data) {
            state.message = data
        },
        setSocialAccount (state, data) {
            state.social_account = data
        },
        deleteSocialAccount (state, data) {
            state.social_accounts = data
        }
    },
    actions: {
        clearSocialAccount (context) {
            const data = {
                source: '',
                link: ''
            }
            context.commit('setSocialAccount', data)
        },

        //get list SocialAccount for paginate
        getSocialAccounts (context) {
            return new Promise(resolve => {
                ApiService.get('/api/social_accounts')
                    .then(({data}) => {
                        context.commit('setSocialAccounts', data)
                        resolve(data)
                    })
                    .catch( err => {
                        context.commit('setErrors', err)
                    })
            })
        },

        //add social account
        addSocialAccount (context, data) {
            return new Promise(resolve => {
                ApiService.post('/api/social_accounts/add', data)
                    .then(({data}) => {
                        if (data.status === 200) {
                            context.commit('setSocialAccount', data.message)
                            router.push({ name: 'listSocialAccount' })
                            window.toast.fire({
                                icon: 'success',
                                title: data.message
                            })
                            resolve(data)
                        } else {
                            window.toast.fire({
                                icon: 'error',
                                message: 'Tạo tài khoản xã hội thất bại!'
                            })
                        }
                    })
                    .catch(err => {
                        console.log(err)
                        reject(err)
                    })
            })
        },

        //delete social account
        deleteSocialAccount ({context, dispatch}, id) {
            return new Promise(resolve => {
                ApiService.delete('/api/social_accounts/delete/' +  id)
                    .then(({data}) => {
                        if (data.status === 200) {
                            dispatch('getSocialAccounts')
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
        }
    }
}
