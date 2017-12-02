import Vue from 'vue'
import Router from 'vue-router'
import { AsyncDataPlugin } from 'vue-async-data-2'
import Index from '@/components/Index'
import Help from '@/components/Help'
import About from '@/components/About'

Vue.use(AsyncDataPlugin)
Vue.use(Router)

export default new Router({
  mode: 'history',
  base: '/',
  routes: [{
    path: '/',
    name: 'Index',
    component: Index
  },
  {
    path: '/help',
    name: 'Help',
    component: Help
  },
  {
    path: '/about',
    name: 'About',
    component: About
  }
  ]
})
