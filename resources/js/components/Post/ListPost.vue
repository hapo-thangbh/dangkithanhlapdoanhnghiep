<template>
    <div class="content-wrapper h-1000">
        <section class="content-header">
            <h1><i class="fa fa-paste"></i> Bài viết</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a>
                </li>
                <li class="active">Danh sách bài viết</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-3 form-group">
                                    <input type="text" class="form-control" placeholder="ID">
                                </div>

                                <div class="col-md-3 form-group">
                                    <input type="text" class="form-control" placeholder="Tiêu đề">
                                </div>

                                <div class="col-md-3 form-group">
                                    <input type="text" class="form-control">
                                </div>

                                <div class="col-md-3 form-group">
                                    <button class="btn btn-primary">
                                        <i class="fa fa-search"></i> Tìm kiếm
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <button class="btn btn-primary ml-3" v-on:click="refresh()">
                            <i class="fa fa-refresh"></i> Làm mới
                        </button>
                        <router-link :to="{ name:'addPost' }">
                            <button class="btn btn-success pull-right mb-3 mr-3">
                                <i class="fa fa-plus"></i> Tạo mới
                            </button>
                        </router-link>
                        <div class="box-body table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th style="min-width: 20px">ID</th>
                                        <th style="min-width: 100px">Tiêu đề</th>
                                        <th style="min-width: 100px">Ảnh thumbnail</th>
                                        <th>Nội dung</th>
                                        <th style="min-width: 60px">Danh mục</th>
                                        <th style="min-width: 50px">Trạng thái</th>
                                        <th style="min-width: 100px">Ngày tạo</th>
                                        <th class="text-center" style="min-width: 150px">Hành động</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr v-for="post in posts" :key="post.id">
                                        <td>{{ post.id }}</td>
                                        <td>{{ post.title }}</td>
                                        <td>
                                            <img :src="showImage()" alt="">
                                        </td>
                                        <td>
                                            <p v-html="post.description">{{ post.description }}</p>
                                        </td>
                                        <td>{{ post.category_name }}</td>
                                        <td>
                                            <label class="label label-success" v-if="post.status == 1">Công khai</label>
                                            <label class="label label-danger" v-else>Riêng tư</label>
                                        </td>
                                        <td>{{ formartDate(post.created_at) }}</td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-success">
                                                <i class="fa fa-eye"></i>
                                            </button>

                                            <router-link :to="{ path: '/admin/post/edit/' + post.id }">
                                                <button class="btn btn-sm btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </router-link>

                                            <button @click="destroyPost(post.id)" class="btn btn-sm btn-danger">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import { mapState, mapActions } from 'vuex'
export default {
    name: 'ListPost',
    components: {

    },
    computed: {
        ...mapState('post',['posts'])
    },
    mounted() {
        this.getPosts()
    },
    methods: {
        ...mapActions('post',['getPosts','deletePost']),
        destroyPost(id) {
            swal.fire({
                title: '',
                text: "Bạn có chắc chắn muốn xóa?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Đồng ý',
                cancelButtonText: 'Hủy bỏ'
            })
            .then((result) => {
                if (result.value) {
                    this.deletePost(id)
                }
            })
            .catch(() => {
                swal.fire(
                  'Thất bại',
                  'Xóa danh mục không thành công',
                  'warning'
                )
            })
        },
        formartDate (date) {
            return moment(date).format('DD/MM/YYYY')
        },
        refresh () {
            this.getPosts()
        },
        showImage () {
            return "images/post/"+this.posts.image_thumb
        }
    }
}

</script>
