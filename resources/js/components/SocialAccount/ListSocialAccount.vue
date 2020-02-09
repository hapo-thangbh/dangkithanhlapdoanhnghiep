<template>
    <div class="content-wrapper h-1000">
        <section class="content-header">
            <h1><i class="fa fa-book"></i> Tài khoản xã hội</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a>
                </li>
                <li class="active">Tài khoản xã hội</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <!-- <div class="box-body">
                            <div class="row">
                                <div class="col-md-3 form-group">
                                    <input type="text" class="form-control" placeholder="Nguồn">
                                </div>

                                <div class="col-md-3 form-group">
                                    <button class="btn btn-primary">
                                        <i class="fa fa-search"></i> Tìm kiếm
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <button class="btn btn-primary ml-3">
                            <i class="fa fa-refresh"></i> Làm mới
                        </button> -->
                        <router-link :to="{ name:'addSocialAccount' }">
                            <button class="btn btn-success mb-3 ml-3 mt-3">
                                <i class="fa fa-plus"></i> Tạo mới
                            </button>
                        </router-link>
                        <div class="box-body table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 20px">ID</th>
                                        <th style="width: 300px">Nguồn</th>
                                        <th style="width: 50px">Link</th>
                                        <th class="text-center" style="width: 100px">Hành động</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr v-for="social_account in social_accounts.data" :key="social_account.id">
                                        <td>{{ social_account.id }}</td>
                                        <td>{{ social_account.source }}</td>
                                        <td>{{ social_account.link }}</td>
                                        <td class="text-center">
                                            <button @click="destroySocialAccount(social_account.id)" class="btn btn-sm btn-danger">
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
                                    :data="social_accounts" 
                                    @pagination-change-page="getResults"
                                    :show-disabled="true"
                                    :limit="1"
                                >
                                </pagination>
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
import ApiService from './../../api/index'
export default {
    name: 'ListSocialAccount',
    data() {
        return {
            social_accounts: {}
        }
    },
    components: {
        pagination
    },
    computed: {
        
    },
    beforeMount() {
        this.getResults()
    },
    mounted() {
        
    },
    methods: {
        ...mapActions('social_account',['getSocialAccounts','deleteSocialAccount']),
        destroySocialAccount(id) {
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
                    this.deleteSocialAccount(id)
                }
            })
            .catch(() => {
                swal.fire(
                    'Thất bại',
                    'Xóa không thành công',
                    'warning'
                )
            })
        },
        // formartDate (date) {
        //     return moment(date).format('DD/MM/YYYY')
        // },
        // refresh () {
        //     this.getPosts()
        // },
        getResults(page = 1) {
            axios.get('/api/social_accounts?page=' + page)
                .then(data => {
                    this.social_accounts = data.data;
                });
        }
    }
}
</script>
