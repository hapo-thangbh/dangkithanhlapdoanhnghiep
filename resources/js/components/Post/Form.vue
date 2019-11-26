<template>
    <ValidationObserver v-slot="{ passes }">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="row">
                        <div class="col-md-12">
                            <router-link :to="{ name:'listPost' }">
                                <button class="btn btn-primary pull-right mr-3 mt-3">
                                        <i class="fa fa-backward"></i> Trở về
                                </button>
                            </router-link>
                        </div>
                    </div>
                    <div class="box-body">
                        <form @submit.prevent="passes(onSubmit)" class="pb-5" method="post">
                            <div class="row form-group">
                                <label for="title" class="col-md-2 text-md-right">Tiêu đề</label>
                                <div class="col-md-8">
                                    <ValidationProvider rules="required" name="Tiêu đề" v-slot="{ errors }">
                                        <input
                                            type="text"
                                            class="form-control"
                                            v-bind:class="errors[0]?'border-danger':''"
                                            v-model="post.title"
                                        >
                                        <span class="text-danger">{{ errors[0] }}</span>
                                    </ValidationProvider>
                                </div>
                            </div>

                            <!-- <div class="row form-group">
                                <label for="tag" class="col-md-3 text-md-right">Tag</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control">
                                </div>
                            </div> -->

                            <div class="row form-group">
                                <label for="description" class="col-md-2 text-md-right">Nội dung</label>
                                <div class="col-md-8">
                                    <ValidationProvider rules="required" name="Nội dung" v-slot="{ errors }">
                                        <textarea
                                            cols="30"
                                            rows="10"
                                            class="form-control"
                                            v-bind:class="errors[0]?'border-danger':''"
                                            v-model="post.description"
                                        ></textarea>
                                        <span class="text-danger">{{ errors[0] }}</span>
                                    </ValidationProvider>
                                </div>
                            </div>

                            <div class="row form-group">
                                <label for="status" class="col-md-2 text-md-right">Công khai</label>
                                <div class="col-md-8">
                                    <input type="checkbox" id="switch" class="toggle-ios toggle-primary" v-model="post.status"/>
                                    <label for="switch" class="tgl-checkbox tgl-primary"></label>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12 text-center">
                                    <button @click="refresh()" type="button" class="btn btn-sm btn-default">
                                        <i class="fa fa-refresh"></i> Làm mới
                                    </button>
                                    <button type="submit" class="btn btn-sm btn-success">
                                        <i class="fa fa-check"></i> Xác nhận
                                    </button>
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
        type: String
    },
    data() {
        return {
            
        }
    },
    components: {
        ValidationProvider,
        ValidationObserver
    },
    mounted() {
        if (this.type === 'create') {
            this.clearPost()
        } else {
            let idPost = this.$route.params.id
            this.editPost(idPost)
        }
    },
    computed: {
        ...mapState('post',['post'])
    },
    methods: {
        ...mapActions('post',['clearPost','addPost','editPost','updatePost']),
        onSubmit () {
            if (this.type === 'create') {
                this.addPost(this.post)
            } else {
                this.updatePost(this.post)
            }
        },
        refresh () {
            this.clearPost()
        }
    }
}
</script>
