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
                                <div class="col-md-2 form-group">
                                    <input type="text" class="form-control" placeholder="Tiêu đề">
                                </div>

                                <div class="col-md-2 form-group">
                                    <input type="text" class="form-control" placeholder="Danh mục">
                                </div>

                                <div class="col-md-2 form-group">
                                    <input type="text" class="form-control" placeholder="Tác giả">
                                </div>

                                <div class="col-md-2 form-group">
                                    <input type="date" class="form-control">
                                </div>

                                <div class="col-md-2 form-group">
                                    <input type="date" class="form-control">
                                </div>

                                <div class="col-md-2 form-group">
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
                                        <th style="min-width: 20px">STT</th>
                                        <th>Tiêu đề</th>
                                        <th style="min-width: 150px">Từ khoá SEO</th>
                                        <th style="min-width: 200px">Mô tả ngắn</th>
                                        <th>Ảnh đại diện</th>
                                        <th>Danh mục</th>
                                        <th>Trạng thái</th>
                                        <th>Tác giả</th>
                                        <th>Ngày đăng</th>
                                        <th>Lượt xem</th>
                                        <th>Bình luận</th>
                                        <th class="text-center" style="min-width: 150px">Hành động</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr v-for="post in posts.data" :key="post.id">
                                        <td>{{ post.id }}</td>
                                        <td>
                                            <p v-html="post.title" class="title txt-ellipsis">{{ post.title }}</p>
                                        </td>
                                        <td>
                                            <label class="label label-warning">{{ post.seo_title }}</label>
                                        </td>
                                        <td>
                                            <p v-html="post.description_short" class="description_short txt-ellipsis">{{ post.description_short }}</p>
                                        </td>
                                        <td>
                                            <img :src="showImage(post.image_thumb)" class="image-preview-100" alt="Image not found">
                                        </td>
                                        <td>
                                            <label class="label label-default mr-1">{{ post.categories.name }}</label>
                                        </td>
                                        <td>
                                            <label class="label label-success" v-if="post.status == 1">Công khai</label>
                                            <label class="label label-danger" v-else>Riêng tư</label>
                                        </td>
                                        <td>{{ post.user.name }}</td>
                                        <td>{{ formartDate(post.created_at) }}</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-success" @click="linkPost(post.id)">
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
                        <div class="row pull-right">
                            <div class="col-md-12">
                                <pagination
                                    :data="posts"
                                    @pagination-change-page="getResults"
                                    :show-disabled="true"
                                    :limit="1"
                                ></pagination>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import { mapState, mapActions } from 'vuex'
import pagination from 'laravel-vue-pagination'
export default {
    name: 'ListPost',
    data() {
        return {
            posts: {}
        }
    },
    components: {
        pagination
    },
    computed: {
        // ...mapState('post',['posts']),
        ...mapState('category',['categories']),

    },
    mounted() {
        this.getCategories()
        this.getResults()
    },
    methods: {
        ...mapActions('post',['deletePost']),
        ...mapActions('category',['getCategories']),
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
        showImage (img) {
            return "/images/post/"+img
        },
        linkPost (id) {
            window.location.href="/post/"+id
        },
        getResults(page = 1) {
			axios.get('/api/posts?page=' + page)
				.then(data => {
					this.posts = data.data;
				});
		}
    }
}

</script>

<style lang="scss">
    table {
        th {
            min-width: 100px;
        }
    }
</style>
