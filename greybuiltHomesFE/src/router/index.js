import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/components/Home'
import BioList from '../views/BioList.vue'
import ProjectList from '../views/ProjectList.vue'
import Contact from '../views/Contact.vue'
import TestimonialList from '../views/TestimonialList.vue'
import Example from '@/components/Example'
import Calendar from '@/components/Calendar'
import Main from '@/components/Main'
import StoredProjects from '../store/modules/projects'



Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home
    },
    {
      path: '/main',
      name: 'Main',
      component: Main
    },
    {
      path: '/about',
      name: 'About',
      component: () => { return import ('../views/BioList.vue')}
    },
    {
      path: '/projects',
      name: 'Project',
      component: () => { return import ('../views/ProjectList.vue') }
    },
    {
      path: '/contact',
      name: 'Contact',
      component: () => { return import ('../views/Contact.vue') }
    },
    {
      path: '/testimonials',
      name: 'Testimonial',
      component: () => { return import ('../views/TestimonialList.vue')}

    },
    {
      path: '/example',
      name: 'Example',
      component: Example
    },
    {
      path: '/calendar',
      name: 'Calendar',
      component: Calendar
    }
  ]
})
