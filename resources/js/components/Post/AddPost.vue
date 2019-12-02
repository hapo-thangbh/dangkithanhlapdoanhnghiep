<template>
    <div class="content-wrapper h-1000">
        <section class="content-header">
            <h1><i class="fa fa-paste"></i> Thêm bài viết</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a>
                </li>
                <li class="active">Thêm bài viết</li>
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
    name: 'AddPost',
    data() {
        return {

        }
    },
    components: {
        FormInput
    },
    methods: {

    }
}

</script>
