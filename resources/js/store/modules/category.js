import ApiService from '../../api'
import { reject } from 'q'
import router from '../../router'

export default {
    namespaced: true,
    state: {
        categories:[],
        errors: '',
        message: '',
        category: {
            name: '',
            status: ''
        }
    },
    mutations: {
        setCategories (state, data) {
            state.categories = data
        },
        setErrors (state, data) {
            state.errors = data
        },
        setMessage (state, data) {
            state.message = data
        },
        setCategory (state, data) {
            state.category = data
        },
        deleteCategory (state, data) {
            state.categories = data
        }
    },
    actions: {
        clearCategory (context) {
            const data = {
                title: '',
                statue: ''
            }
            context.commit('setCategory', data)
        },
        //get list category
        getCategories (context) {
            return new Promise(resolve => {
                ApiService.get('/api/categories')
                    .then(({data}) => {
                        context.commit('setCategories', data)
                        resolve(data)
                    })
                    .catch( err => {
                        context.commit('setErrors', err)
                    })
            })
        },

        //add category
        addCategory (context, data) {
            return new Promise(resolve => {
                ApiService.post('/api/categories/add', data)
                    .then(({data}) => {
                        if (data.status === 200) {
                            context.commit('setCategory', data.message)
                            router.push({ name: 'listCategory' })
                            window.toast.fire({
                                icon: 'success',
                                title: data.message
                            })
                            resolve(data)
                        } else {
                            window.toast.fire({
                                icon: 'error',
                                message: 'Tạo danh mục thất bại!'
                            })
                        }
                    })
                    .catch(err => {
                        console.log(err)
                        reject(err)
                    })
            })
        },

        //delete category
        deleteCategory ({context, dispatch}, id) {
            return new Promise(resolve => {
                ApiService.delete('/api/categories/delete/' +  id)
                    .then(({data}) => {
                        if (data.status === 200) {
                            dispatch('getCategories')
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

        //get info category
        editCategory (context, idCategory) {
            return new Promise(resolve => {
                ApiService.get('/api/categories/edit/' + idCategory)
                    .then(({ data }) => {
                        context.commit('setCategory', data)
                        resolve(data)
                    })
                    .catch(err => {
                        console.log(err)
                    })
            })
        },

        //update category
        updateCategory (context, data) {
            return new Promise(resolve => {
                const idCategory = data.id
                ApiService.put('/api/categories/update/' + idCategory, data)
                    .then(({ data }) => {
                        if(data.status === 200) {
                            context.commit('setCategories', data)
                            router.push({
                                name: 'listCategory'
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
