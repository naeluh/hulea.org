import Vue from 'vue'
import Router from 'vue-router'
import { AsyncDataPlugin } from 'vue-async-data-2'
import Index from '@/components/Index'
import Pages from '@/components/Pages'
import Work from '@/components/Work'
import Contact from '@/components/Contact'
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
    path: '/work/:id',
    name: 'Pages',
    component: Pages
  },
  {
    path: '/work/',
    name: 'Work',
    component: Work
  },
  {
    path: '/contact/',
    name: 'Contact',
    component: Contact
  },
  {
    path: '/about/',
    name: 'About',
    component: About
  }
  ]
})
