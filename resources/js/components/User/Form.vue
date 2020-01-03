<template>
    <ValidationObserver v-slot="{ passes }">
        <form @submit.prevent="passes(onSubmit)" class="pb-5" method="post">
            <div class="row">
                <div class="col-md-3">
                    <div class="row form-group text-center">
                        <label for="name" class="col-md-12">Avatar</label>
                        <div class="col-md-12">
                            <div v-if="!user.avatar">
                                <label for="chooseImage">
                                    <i class="fa fa-cloud-upload icon-upload-thumb"></i>
                                </label>
                                <ValidationProvider class="d-flex" rules="required" name="Avatar" v-slot="{ errors }">
                                    <input 
                                        type="file" 
                                        id="chooseImage" 
                                        class="d-none" 
                                        @change="onFileChange"
                                        v-bind:class="errors[0]?'border-danger':''"
                                    >
                                    <p class="text-danger mx-auto">{{ errors[0] }}</p>
                                </ValidationProvider>
                            </div>
                            <div v-else>
                                <img :src="showImage()" class="image-preview"/> <br/>
                                <button class="btn btn-sm btn-danger mt-2" @click="removeImage">Xoá ảnh</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="row form-group">
                        <label for="name" class="col-md-12">Tên đăng nhập</label>
                        <div class="col-md-12">
                            <ValidationProvider rules="required" name="Tên đăng nhập" v-slot="{ errors }">
                                <input 
                                    type="text" 
                                    class="form-control"
                                    v-bind:class="errors[0]?'border-danger':''"
                                    v-model="user.username" 
                                >

                                <span class="text-danger">{{ errors[0] }}</span>
                            </ValidationProvider>
                        </div>
                    </div>

                    <div class="row form-group">
                        <label for="name" class="col-md-12">Họ tên</label>
                        <div class="col-md-12">
                            <ValidationProvider rules="required" name="Họ tên" v-slot="{ errors }">
                                <input 
                                    type="text" 
                                    class="form-control"
                                    v-bind:class="errors[0]?'border-danger':''"
                                    v-model="user.name" 
                                >

                                <span class="text-danger">{{ errors[0] }}</span>
                            </ValidationProvider>
                        </div>
                    </div>

                    <div class="row form-group">
                        <label for="name" class="col-md-12">Email</label>
                        <div class="col-md-12">
                            <input 
                                type="email" 
                                class="form-control"
                                v-if="type==='edit'"
                                v-model="user.email" 
                                disabled
                            >
                            <ValidationProvider rules="required" name="Email" v-slot="{ errors }" v-else>
                                <input 
                                    type="email" 
                                    class="form-control"
                                    v-bind:class="errors[0]?'border-danger':''"
                                    v-model="user.email" 
                                >
                                <span class="text-danger">{{ errors[0] }}</span>
                            </ValidationProvider>
                        </div>
                    </div>

                    <div class="row form-group">
                        <label for="name" class="col-md-12">Mật khẩu</label>
                        <div class="col-md-12">
                            <ValidationProvider rules="required" name="Tên đăng nhập" v-slot="{ errors }">
                                <input 
                                    type="password" 
                                    class="form-control"
                                    v-bind:class="errors[0]?'border-danger':''"
                                    v-model="user.password" 
                                >

                                <span class="text-danger">{{ errors[0] }}</span>
                            </ValidationProvider>
                        </div>
                    </div>

                    <div class="row form-group">
                        <label for="name" class="col-md-12">QUyền người dùng</label>
                        <div class="col-md-12">
                            <ValidationProvider rules="required" name="Quyền người dùng" v-slot="{ errors }">
                                <input 
                                    name="level" 
                                    id="admin" 
                                    type="radio" 
                                    value="1"
                                    v-model="user.level"
                                > <label for="admin">Admin</label>

                                <input 
                                    name="level" 
                                    id="user" 
                                    type="radio" 
                                    value="0"
                                    v-model="user.level"
                                > <label for="user">User</label>

                                <span class="text-danger">{{ errors[0] }}</span>
                            </ValidationProvider>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12 text-center">
                    <button @click="refresh()" type="button" class="btn btn-sm btn-default" v-if="type==='create'">
                        <i class="fa fa-refresh"></i> Làm mới
                    </button>
                    <button type="submit" class="btn btn-sm btn-success">
                        <i class="fa fa-check"></i> Xác nhận
                    </button>
                </div>
            </div>
        </form>
    </ValidationObserver>
</template>

<script>
import { ValidationProvider, ValidationObserver  } from 'vee-validate'
import { extend } from 'vee-validate'
import { mapState, mapActions } from 'vuex'
import Multiselect from 'vue-multiselect'
import ApiService from '../../api'

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
    mounted() {
        if (this.type === 'create') {
            this.clearUser()
        } else {
            let idUser = this.$route.params.id
            // this.editUser(idUser)
        }
    },
    computed: {
        ...mapState('user', ['user'])
    },
    components: {
        ValidationProvider,
        ValidationObserver,
        Multiselect
    },
    methods: {
        ...mapActions('user', ['addUser', 'updateUser', 'clearUser']),
        onSubmit () {
            if (this.type === 'create') {
                this.addUser(this.user)
            } else {
                this.updateUser(this.user)
            }
        },
        onFileChange (e) {
            var files = e.target.files || e.dataTransfer.files
            if (!files.length)
                return
            this.createImage(files[0])
        },
        createImage (file) {
            var avatar = new Image();
            var reader = new FileReader()
            var vm = this;

            reader.onload = (e) => {
                vm.user.avatar = e.target.result
            }
            reader.readAsDataURL(file)
        },
        removeImage (e) {
            this.user.avatar = ''
        },
        showImage () {
            let image = this.user.avatar
            if (image.length > 100) {
                return this.user.avatar
            } else {
                return '/public/images/avatar/'+this.user.avatar
            }
        },
    }
}
</script>
