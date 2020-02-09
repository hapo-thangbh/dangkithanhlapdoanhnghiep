<template>
    <div class="content-wrapper h-1000">
        <section class="content-header">
            <h1><i class="fa fa-book"></i> Thêm tài khoản xã hội</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a>
                </li>
                <li class="active">Thêm tài khoản xã hội</li>
            </ol>
        </section>
        <section class="content">
            <form-input type="create"></form-input>
        </section>
    </div>
</template>

<script>
import FormInput from './Form.vue'
export default {
    name: 'AddSocialAccount',
    data() {
        return {

        }
    },
    components: {
        FormInput
    }
}
</script>
