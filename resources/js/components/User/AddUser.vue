<template>
    <div class="content-wrapper h-900">
        <section class="content-header">
            <h1><i class="fa fa-user-plus"></i> Thêm người dùng</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a>
                </li>
                <li class="active">Thêm người dùng</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="row">
                            <div class="col-md-12">
                                <router-link :to="{ name:'listUser' }" class="txt-white">
                                    <button class="btn btn-primary pull-right mr-3 mt-3">
                                            <i class="fa fa-backward"></i> Trở về
                                    </button>
                                </router-link>
                            </div>
                        </div>
                        <div class="box-body">
                            <form-input type="create"></form-input>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import FormInput from './Form'
export default {
    name: 'CreateUser',
    components: {
        FormInput
    }
}
</script>
