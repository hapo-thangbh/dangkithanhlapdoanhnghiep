<template>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto box-md-login">
                <div class="box-login">
                    <form action v-on:submit.prevent="userLogin(user)">
                        <h4 class="text-center pb-2 font-weight-bold text-color-login">
                            Login
                        </h4>

                        <!-- <div v-if="errors">
                            <div class="alert alert-danger">{{ errors }}</div>
                        </div> -->
                        <div class="input-group form-group frm-position">
                            <div class="input-group-prepend">
                                <div class="input-group-text input-group-icon">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </div>
                            </div>
                            <input id="inline-form-input-username" type="text" placeholder="Username"
                                class="form-control frm-color-btn">
                        </div>

                        <div class="input-group form-group frm-position">
                            <div class="input-group-prepend">
                                <div class="input-group-text input-group-icon">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                </div>
                            </div>
                            <input id="inline-form-input-username" :type="passwordFieldType" placeholder="**********"
                                class="form-control frm-color-btn">
                            <button type="button" class="btn btn-default btn-show-password" @click="showHidePass()"
                                v-if="passwordFieldType == 'password'">
                                <i class="fa fa-eye-slash"></i>
                            </button>
                            <button type="button" class="btn btn-default btn-show-password" @click="showHidePass()"
                                v-else>
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="form-group frm-check-login">
                            <span class="form-check form-check-info">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input"> Lưu tài khoản
                                    <i class="input-helper"></i>
                                </label>
                            </span>

                            <a href="#" class="pr-1 mb-1 text-btn-login">Reset password?</a>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-center text-footer">
                            <button type="submit" class="btn btn-block btn-primary btn-custom mt-1 btn-login">
                                Login
                                <!-- <i v-if="loading" class="fa fa-spinner fa-spin"></i> -->
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                passwordFieldType: 'password'
            }
        },
        methods: {
            showHidePass() {
                this.passwordFieldType = this.passwordFieldType === 'password' ? 'text' : 'password'
            }
        }
    };
</script>