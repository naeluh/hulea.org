import Vue from 'vue'
import Router from 'vue-router'
import { AsyncDataPlugin } from 'vue-async-data-2'
import Index from '@/components/Index'
import Writing from '@/components/Writing'
import Resume from '@/components/Resume'
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
    path: '/Resume',
    name: 'Resume',
    component: Resume
  },
  {
    path: '/writing',
    name: 'Writing',
    component: Writing
  },
  {
    path: '/about',
    name: 'About',
    component: About
  }
  ]
})
