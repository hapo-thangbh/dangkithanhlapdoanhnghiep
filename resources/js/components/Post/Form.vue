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
                                <div class="col-md-10">
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
                                <label for="tag" class="col-md-1 text-md-right">Tag</label>
                                <div class="col-md-11">
                                    <input type="text" class="form-control">
                                </div>
                            </div> -->

                            <div class="row form-group">
                                <label for="tag" class="col-md-2 text-md-right">Ảnh thumbnail</label>
                                <div class="col-md-3 d-flex justify-content-start">
                                    <div v-if="!image">
                                        <label for="chooseImage">
                                            <i class="fa fa-cloud-upload icon-upload-thumb"></i>
                                        </label>
                                        <ValidationProvider class="d-flex" rules="required" name="Ảnh thumbnail" v-slot="{ errors }">
                                            <input 
                                                type="file" 
                                                id="chooseImage" 
                                                class="d-none" 
                                                @change="onFileChange"
                                                v-bind:class="errors[0]?'border-danger':''"
                                            >
                                            <span class="text-danger">{{ errors[0] }}</span>
                                        </ValidationProvider>
                                    </div>
                                    <div v-else class="text-center">
                                        <img :src="image" style="width: 200px; height: 200px"/> <br/>
                                        <button class="btn btn-sm btn-danger mt-2" @click="removeImage">Xóa ảnh</button>
                                    </div>
                                </div>
                            </div>

                            <div class="row form-group">
                                <label for="tag" class="col-md-2 text-md-right">Danh mục</label>
                                <div class="col-md-10">
                                    <ValidationProvider rules="required" name="Danh mục" v-slot="{ errors }">
                                        <multiselect 
                                            v-model="post.category" 
                                            :options="categories"
                                            label="name"
                                            track-by="id"
                                            placeholder=""
                                            v-bind:class="errors[0]?'border-danger':''"
                                        ></multiselect>
                                        <span class="text-danger">{{ errors[0] }}</span>
                                    </ValidationProvider>

                                </div>
                            </div>

                            <div class="row form-group">
                                <label for="description" class="col-md-2 text-md-right">Nội dung</label>
                                <div class="col-md-10">
                                    <ValidationProvider rules="required" name="Nội dung" v-slot="{ errors }">
                                        <wysiwyg 
                                            v-bind:class="errors[0]?'border-danger':''"
                                            v-model="post.description" 
                                            placeholder=""
                                        />
                                        <span class="text-danger">{{ errors[0] }}</span>
                                    </ValidationProvider>
                                </div>
                            </div>

                            <div class="row form-group">
                                <label for="status" class="col-md-2 text-md-right">Công khai</label>
                                <div class="col-md-10">
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
import Multiselect from 'vue-multiselect'

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
            image: ''
        }
    },
    components: {
        ValidationProvider,
        ValidationObserver,
        Multiselect
    },
    mounted() {
        if (this.type === 'create') {
            this.clearPost()
        } else {
            let idPost = this.$route.params.id
            this.editPost(idPost)
        }
        this.getCategories()
    },
    computed: {
        ...mapState('post', ['post']),
        ...mapState('category', ['categories'])
    },
    methods: {
        ...mapActions('post',['clearPost','addPost','editPost','updatePost']),
        ...mapActions('category', ['getCategories']),
        onSubmit () {
            if (this.type === 'create') {
                this.addPost(this.post)
            } else {
                this.updatePost(this.post)
            }
        },
        refresh () {
            this.clearPost()
        },
        onFileChange (e) {
            var files = e.target.files || e.dataTransfer.files
            if (!files.length)
                return
            this.createImage(files[0])
        },
        createImage (file) {
            var image = new Image();
            var reader = new FileReader()
            var vm = this;

            reader.onload = (e) => {
                vm.image = e.target.result
            }
            reader.readAsDataURL(file)
        },
        removeImage (e) {
            this.image = ''
        }
    }
}
</script>

<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
