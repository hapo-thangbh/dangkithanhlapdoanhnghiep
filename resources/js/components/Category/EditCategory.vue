<template>
    <div class="content-wrapper h-1000">
        <section class="content-header">
            <h1><i class="fa fa-book"></i> Chỉnh sửa danh mục</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a>
                </li>
                <li class="active">Chỉnh sửa danh mục</li>
            </ol>
        </section>
        <section class="content">
            <form-input type="edit"></form-input>
        </section>
    </div>
</template>

<script>
import FormInput from './Form.vue'
export default {
    name: 'EditCategory',
    data() {
        return {

        }
    },
    components: {
        FormInput
    }
}
</script>
