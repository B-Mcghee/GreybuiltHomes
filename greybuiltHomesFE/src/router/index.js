import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/components/Home'
import Bio from '@/components/Bio'
import Project from '@/components/Project'
import Contact from '@/components/Contact'
import Testimonial from '@/components/Testimonial'
import Example from '@/components/Example'



Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home
    },
    {
      path: '/about',
      name: 'About',
      component: Bio
    },
    {
      path: '/projects',
      name: 'Project',
      component: Project
    },
    {
      path: '/contact',
      name: 'Contact',
      component: Contact
    },
    {
      path: '/testimonials',
      name: 'Testimonial',
      component: Testimonial
    },
    {
      path: '/example',
      name: 'Example',
      component: Example
    }
  ]
})
