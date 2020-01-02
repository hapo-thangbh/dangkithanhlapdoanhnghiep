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
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row form-group">
                                            <label for="title" class="col-md-3 text-md-right">Tên danh mục</label>
                                            <div class="col-md-9">
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
                                            <label for="title" class="col-md-3 text-md-right">Danh mục cha</label>
                                            <div class="col-md-9">
                                                <!-- <multiselect 
                                                    v-model="category.parent_id"
                                                    :options="categories"
                                                    label="name"
                                                    track-by="id"
                                                    placeholder=""
                                                ></multiselect> -->

                                                <select v-model="category.parent_id" class="form-control">
                                                    <option value="">--Chọn danh mục--</option>
                                                    <option
                                                        v-for="cate in categories"
                                                        :key="cate.id"
                                                        :value="cate.id"
                                                    > {{ cate.name }}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Danh mục cha</label> <br/>
                                                <div v-for="cateParent in categoriesParent" :key="cateParent.id">
                                                    <label class="checkbox-success">
                                                        <input type="checkbox" :id="cateParent.id" v-model="checkedCateParent" @click="check($event)" :value="cateParent.id">
                                                        <span></span>
                                                    </label>
                                                    <label class="lbl-checkbox-success" :for="cateParent.id">{{ cateParent.name }}</label>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <label>Danh mục con</label> <br/>
                                                <p v-for="value in childCate" :key="value.id">
                                                    <i>{{ value }}</i>
                                                </p>
                                            </div>

                                            <div class="col-md-4">
                                                <label>Danh sách menu</label>
                                                <span v-html="treeView" style="list-style: none">{{ treeView }}</span>
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
            checkedCateParent: [],
            childCate: []
        }
    },
    components: {
        ValidationProvider,
        ValidationObserver,
        Multiselect
    },
    mounted() {
        if (this.type === 'create') {
            this.clearCategory()
        } else {
            let idCategory = this.$route.params.id
            this.editCategory(idCategory)
        }
        this.getCategoriesParent()
        this.getCategories()
        this.getTreeView()

    },
    computed: {
        ...mapState('category',['categories','category', 'categoriesParent', 'treeView'])
    },
    methods: {
        ...mapActions('category',[
            'clearCategory',
            'addCategory',
            'editCategory',
            'updateCategory', 
            'getCategories', 
            'getCategoriesParent',
            'getTreeView'
        ]),
        onSubmit () {
            if (this.type === 'create') {
                this.addCategory(this.category)
            } else {
                this.updateCategory(this.category)
            }
        },
        refresh () {
            this.clearCategory()
        },
        check (e) {
            let element = this.checkedCateParent.findIndex(a => a === e.target.value)
            if (element >= 0) {
                this.checkedCateParent.splice(element, 1)
            } else {
                this.checkedCateParent.push(e.target.value)
            }

            const self = this
            return ApiService.post('/api/childrenCate', this.checkedCateParent)
                .then(({
                    data
                }) => {
                    data.forEach(function(e) {
                        let index = self.childCate.findIndex(a => a === e.name)
                        if (index >= 0) {
                            self.childCate.splice(index, 1)
                        } else {
                            self.childCate.push(e.name)
                        }
                        // self.childCate.push(e.name)
                    })
                })
                .catch(error => {
                    console.log(error)
                })
        }
    }
}
</script>