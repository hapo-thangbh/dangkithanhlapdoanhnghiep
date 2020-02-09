<template>
    <ValidationObserver v-slot="{ passes }">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="row">
                        <div class="col-md-12">
                            <router-link :to="{ name:'listSocialAccount' }">
                                <button class="btn btn-primary pull-right mr-3 mt-3">
                                        <i class="fa fa-backward"></i> Trở về
                                </button>
                            </router-link>
                        </div>
                    </div>
                    <div class="box-body">
                        <form @submit.prevent="passes(onSubmit)" class="pb-5" method="post">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row form-group">
                                            <label for="title" class="col-md-3 text-md-right">Nguồn</label>
                                            <div class="col-md-9">
                                                <ValidationProvider rules="" name="Nguồn" v-slot="{ errors }">
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        v-bind:class="errors[0]?'border-danger':''"
                                                        v-model="social_account.source"
                                                    >
                                                    <span class="text-danger">{{ errors[0] }}</span>
                                                </ValidationProvider>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <label for="title" class="col-md-3 text-md-right">Link</label>
                                            <div class="col-md-9">
                                                <ValidationProvider rules="" name="Link" v-slot="{ errors }">
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        v-bind:class="errors[0]?'border-danger':''"
                                                        v-model="social_account.link"
                                                    >
                                                    <span class="text-danger">{{ errors[0] }}</span>
                                                </ValidationProvider>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row form-group">
                                            <div class="col-md-12 text-center">
                                                <button type="button" @click="refresh()" class="btn btn-sm btn-default" v-if="type==='create'">
                                                    <i class="fa fa-refresh"></i> Làm mới
                                                </button>
                                                <button type="submit" class="btn btn-sm btn-success">
                                                    <i class="fa fa-check"></i> Xác nhận
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </ValidationObserver>
</template>

<script>
import { ValidationProvider, ValidationObserver  } from 'vee-validate'
import { extend } from 'vee-validate'
import { mapState, mapActions } from 'vuex'
import Multiselect from 'vue-multiselect'
import ApiService from './../../api/index'

extend('required', {
    validate: (value, { required }) => {
        const length = value && value.length;
        return length >= 0
    },
    params: ['required'],
    message: '{_field_} không được để trống.'
});
export default {
    props: {
        type: String,
    },
    data() {
        return {
            // checkedCateParent: [],
            // childCate: []
        }
    },
    components: {
        ValidationProvider,
        ValidationObserver,
        Multiselect
    },
    mounted() {
        if (this.type === 'create') {
            this.clearSocialAccount()
        }
        // this.getCategoriesParent()
        // this.getAllCategories()
        // this.getTreeView()

    },
    computed: {
        ...mapState('social_account',['social_accounts','social_account'])
        // ...mapState('social_account',['allCategories','social_account'])
    },
    methods: {
        ...mapActions('social_account',[
            'clearSocialAccount',
            'addSocialAccount',
            'getSocialAccounts'
        ]),
        onSubmit () {
            if (this.type === 'create') {
                this.addSocialAccount(this.social_account)
            }
        },
        refresh () {
            this.clearSocialAccount()
        }
        // ,
        // check (e) {
        //     let element = this.checkedCateParent.findIndex(a => a === e.target.value)
        //     if (element >= 0) {
        //         this.checkedCateParent.splice(element, 1)
        //     } else {
        //         this.checkedCateParent.push(e.target.value)
        //     }

        //     const self = this
        //     return ApiService.post('/api/childrenCate', this.checkedCateParent)
        //         .then(({
        //             data
        //         }) => {
        //             self.childCate = []
        //             data.forEach(function(e) {
        //                 self.childCate.push(e.name)
        //             })
        //         })
        //         .catch(error => {
        //             console.log(error)
        //         })
        // }
    }
}
</script>