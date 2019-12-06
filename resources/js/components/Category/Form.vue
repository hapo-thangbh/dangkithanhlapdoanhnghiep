<template>
    <ValidationObserver v-slot="{ passes }">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="row">
                        <div class="col-md-12">
                            <router-link :to="{ name:'listCategory' }">
                                <button class="btn btn-primary pull-right mr-3 mt-3">
                                        <i class="fa fa-backward"></i> Trở về
                                </button>
                            </router-link>
                        </div>
                    </div>
                    <div class="box-body">
                        <form @submit.prevent="passes(onSubmit)" class="pb-5" method="post">
                            <div class="row form-group">
                                <label for="title" class="col-md-3 text-md-right">Tên danh mục</label>
                                <div class="col-md-6">
                                    <ValidationProvider rules="required" name="Tên danh mục" v-slot="{ errors }">
                                        <input
                                            type="text"
                                            class="form-control"
                                            v-bind:class="errors[0]?'border-danger':''"
                                            v-model="category.name"
                                        >
                                        <span class="text-danger">{{ errors[0] }}</span>
                                    </ValidationProvider>
                                </div>
                            </div>

                            <div class="row form-group">
                                <label for="status" class="col-md-3 text-md-right">Trạng thái</label>
                                <div class="col-md-6">
                                    <input type="checkbox" id="switch" class="toggle-ios toggle-primary" v-model="category.status"/>
                                    <label for="switch" class="tgl-checkbox tgl-primary"></label>
                                </div>
                            </div>

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
        type: String,
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
            this.clearCategory()
        } else {
            let idCategory = this.$route.params.id
            this.editCategory(idCategory)
        }
    },
    computed: {
        ...mapState('category',['categories','category'])
    },
    methods: {
        ...mapActions('category',['clearCategory','addCategory','editCategory','updateCategory']),
        onSubmit () {
            if (this.type === 'create') {
                this.addCategory(this.category)
            } else {
                this.updateCategory(this.category)
            }
        },
        refresh () {
            this.clearCategory()
        }
    }
}
</script>