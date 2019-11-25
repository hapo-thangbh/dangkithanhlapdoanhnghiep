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
                                <label for="title" class="col-md-3 text-md-right">Tiêu đề</label>
                                <div class="col-md-6">
                                    <ValidationProvider rules="required" name="title" v-slot="{ errors }">
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
                                <label for="description" class="col-md-3 text-md-right">Nội dung</label>
                                <div class="col-md-6">
                                    <ValidationProvider rules="required" name="description" v-slot="{ errors }">
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
                                <label for="status" class="col-md-3 text-md-right">Trạng thái</label>
                                <div class="col-md-6">
                                    <input type="checkbox" id="switch" class="toggle-ios toggle-primary" v-model="post.status"/>
                                    <label for="switch" class="tgl-checkbox tgl-primary"></label>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12 text-center">
                                    <button @click="refresh()" class="btn btn-sm btn-default">
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
import { mapState, mapActions } from 'vuex'
export default {
    props: {
        type: String
    },
    data() {
        return {
            post:[]
        }
    },
    components: {
        ValidationProvider, 
        ValidationObserver
    },
    mouted() {
        this.addPost()
        this.clearPost()
    },
    methods: {
        ...mapActions('post',['addPost','clearPost']),
        onSubmit () {
            if (this.type === 'create') {
                this.addPost(this.post)
            }
        },
        refresh () {
            this.clearPost()
        }
    }
}
</script>