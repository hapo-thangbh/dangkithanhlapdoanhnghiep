import Vue from 'vue'
import App from './App.vue'

const JQuery = require('jquery')
window.$ = window.jQuery = JQuery
import router from './router'
import BootstrapVue from 'bootstrap-vue'
import moment from 'moment'
import swal from 'sweetalert2'

Vue.use(BootstrapVue)
Vue.use(moment)
Vue.config.productionTip = false

window.swal = swal
window.toast = swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 5000
})
window.swal = swal

new Vue({
  render: h => h(App),
  router,
}).$mount('#app')
