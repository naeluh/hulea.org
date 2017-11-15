import Vue from 'vue'
import Router from 'vue-router'
import { AsyncDataPlugin } from 'vue-async-data-2'
import Index from '@/components/Index'
import Pages from '@/components/Pages'
import Work from '@/components/Work'

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
    path: '/pages/:id',
    name: 'Pages',
    component: Pages
  },
  {
    path: '/work/',
    name: 'Work',
    component: Work
  }
  ]
})
