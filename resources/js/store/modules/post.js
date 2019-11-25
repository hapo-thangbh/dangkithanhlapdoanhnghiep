import ApiService from '../../api'
import { reject } from 'q'
// import router from '@/routers'

export default {
    namespaced: true,
    state: {
        posts:[],
        errors: '',
        message: '',
        post: {
            title: '',
            description: '',
            status: ''
        }
    },
    mutations: {
        setPosts (state, data) {
            state.posts = data
        },
        setErrors (state, data) {
            state.errors = data
        },
        setMessage (state, data) {
            state.message = data
        },
        setPost (state, data) {
            state.post = data
        }
    },
    actions: {
        clearPost (context) {
            const data = {
                title: '',
                description: '',
                statue: ''
            }
            context.commit('setPosts', data)
        },
        getPosts (context) {
            return new Promise(resolve => {
                ApiService.get('/api/posts')
                    .then(({data}) => {
                        context.commit('setPosts', data)
                        resolve(data)
                    })
                    .catch( err => {
                        context.commit('setErrors', err)
                    })
            })
        },

        addPost (context, data) {
            return new Promise(resolve => {
                ApiService.post('/api/posts/add', data)
                    .then(({data}) => {
                        if (data.status === 200) {
                            context.commit('setPost', data.message)
                            router.push({ name: 'listPost' })
                            window.toast.fire({
                                type: 'success',
                                title: 'Tạo bài viết thành công!'
                            })
                            dispatch('clearPost')
                            resolve(data)
                        } else {
                            window.toast.fire({
                                type: 'error',
                                message: 'Tạo bài viết thất bại!'
                            })
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