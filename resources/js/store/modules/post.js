import ApiService from '../../api'
import { reject } from 'q'
import router from './../../router'

export default {
    namespaced: true,
    state: {
        posts:[],
        errors: '',
        message: '',
        post: {
            title: '',
            image_thumb: '',
            categorySelected: [],
            description: '',
            status: ''
        },
        companies: []
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
        },
        deletePost (state, data) {
            state.posts = data
        },
        setCategories (state, data) {
            data.forEach(function (item) {
              state.companies.push({
                id: item.id
              })
            })
        },
    },
    actions: {
        clearPost (context) {
            const data = {
                title: '',
                image_thumb: '',
                categorySelected: [],
                description: '',
                statue: ''
            }
            context.commit('setPost', data)
        },
        //get list post
        getPosts (context) {
            return new Promise(resolve => {
                ApiService.get('/api/posts')
                    .then(({
                        data
                    }) => {
                        context.commit('setPosts', data)
                        resolve(data)
                    })
                    .catch( err => {
                        context.commit('setErrors', err)
                    })
            })
        },

        //add post
        addPost (context, data) {
            data.selected = []
            console.log(data.selected)
            if (data.categorySelected.length > 0) {
                data.categorySelected.forEach(function (item) {
                    data.selected.push(item.id)
                })
            }
            
            // return new Promise(resolve => {
            //     ApiService.post('/api/posts/add', data)
            //         .then(({data}) => {
            //             if (data.status === 200) {
            //                 context.commit('setPost', data.message)
            //                 router.push({ name: 'listPost' })
            //                 window.toast.fire({
            //                     icon: 'success',
            //                     title: data.message
            //                 })
            //                 resolve(data)
            //             } else {
            //                 window.toast.fire({
            //                     icon: 'error',
            //                     message: 'Tạo bài viết thất bại!'
            //                 })
            //             }
            //         })
            //         .catch(err => {
            //             console.log(err)
            //             reject(err)
            //         })
            // })
        },

        //delete post
        deletePost ({context, dispatch}, id) {
            return new Promise(resolve => {
                ApiService.delete('/api/posts/delete/' +  id)
                    .then(({data}) => {
                        if (data.status === 200) {
                            dispatch('getPosts')
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

        //get info post
        editPost (context, idPost) {
            return new Promise(resolve => {
                ApiService.get('/api/posts/edit/' + idPost)
                    .then(({ data }) => {
                        context.commit('setPost', data)
                        resolve(data)
                    })
                    .catch(err => {
                        console.log(err)
                    })
            })
        },

        //update post
        updatePost (context, data) {
            return new Promise(resolve => {
                const idPost = data.id
                ApiService.put('/api/posts/update/' + idPost, data)
                    .then(({ data }) => {
                        if(data.status === 200) {
                            context.commit('setPosts', data)
                            router.push({
                                name: 'listPost'
                            })
                            window.toast.fire({
                                icon: 'success',
                                title: data.message
                            })
                            resolve(data)
                        } else {
                            window.toast.fire({
                                icon: 'error',
                                title: data.error
                            })
                        }
                    })
                    .catch(err => {
                        console.log(err)
                    })
            })
        }

    }
}
