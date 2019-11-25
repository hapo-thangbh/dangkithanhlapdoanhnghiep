require('./bootstrap');
window.Vue = require('vue');

import swal from 'sweetalert2'
import VueRouter from 'vue-router'
import store from './store/index'
import moment from 'moment'
import { extend } from 'vee-validate'
import router from './router/index'

import { min, required, email } from 'vee-validate/dist/rules'
  
extend('required', required)
extend('min', min)
extend('email', email)

window.moment = moment
window.swal = swal;
window.toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timerProgressBar: true,
    timer: 10000
})

const app = new Vue({
    el: '#app',
    store,
    router
});
