// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'
import 'vue-awesome/icons'
import Icon from 'vue-awesome/components/Icon'
import Nav from './components/Nav'
import Contact from './components/Contact'
import store from './store'
Vue.component('icon', Icon)
Vue.component('Nav', Nav)
Vue.component('Contact', Contact)
Vue.config.productionTip = false
require('./assets/scss/main.scss')
require('../node_modules/basscss-typography/index.css')
require('../node_modules/basscss-typography/css/typography.css')
require('../node_modules/basscss-type-scale/index.css')
require('../node_modules/basscss-type-scale/css/type-scale.css')
require('../node_modules/basscss-padding/index.css')
require('../node_modules/basscss-padding/css/padding.css')
require('../node_modules/basscss-margin/index.css')
require('../node_modules/basscss-margin/css/margin.css')

/* eslint-disable no-new */
new Vue({
  el: '#app',
  store,
  router,
  template: '<App/>',
  components: { App }
})
