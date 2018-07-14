// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'
import 'vue-awesome/icons'
import Icon from 'vue-awesome/components/Icon'
import About from './components/About'
import Footer from './components/Footer'
import runtime from 'offline-plugin/runtime'
runtime.install({
  onUpdateReady () {
    // console.log('update ready')
    runtime.applyUpdate()
  },
  onUpdated () {
    // console.log('updated')
    location.reload()
  }
})
Vue.component('icon', Icon)
Vue.component('Footer', Footer)
Vue.component('About', About)
Vue.config.productionTip = false
require('./assets/scss/main.scss')
/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  template: '<App/>',
  components: { App }
})
