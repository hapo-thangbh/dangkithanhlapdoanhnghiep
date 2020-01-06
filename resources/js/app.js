require('./bootstrap')
window.Vue = require('vue')

import swal from 'sweetalert2'
import VueRouter from 'vue-router'
import store from './store/index'
import moment from 'moment'
import { extend } from 'vee-validate'
import router from './router/index'
import { min, required, email } from 'vee-validate/dist/rules'
import wysiwyg from "vue-wysiwyg"
import 'vue2-dropzone/dist/vue2Dropzone.min.css'
// Vue.component('pagination', require('laravel-vue-pagination'));
import VueProgressBar from 'vue-progressbar'
import pagination from 'laravel-vue-pagination'

Vue.use(wysiwyg, {})
Vue.use(pagination)

const options = {
    color: '#31c252',
    failedColor: '#b90000',
    thickness: '3px',
    transition: {
      speed: '1s',
      opacity: '0.6s',
      termination: 700
    },
    autoRevert: true,
    location: 'top',
    inverse: false
}
   
Vue.use(VueProgressBar, options)

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
    timer: 5000
})


const app = new Vue({
    el: '#app',
    store,
    router
})

