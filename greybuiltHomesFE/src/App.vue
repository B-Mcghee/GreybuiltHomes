<template>
  <div id="app">

    <app-main
      :nav-links="navLinks"
      :image-path ="require('../static/Images/logo.png')"
    />
    <router-view/>
  </div>
</template>

<script>
import Main from '@/components/Main'

export default {
  name: 'App',
  components: {'app-main': Main},
  data: () => ({

      navLinks: [
        {
          text: 'Contact',
          path: '/contact',
          icon: 'fas fa-id-card'
        },
                {
          text: 'About',
          path: '/about',
          icon: 'fas fa-user'
        },
                {
          text: 'Projects',
          path: '/project',
          icon: 'fas fa-hammer'
        },
                {
          text: 'Testimonial',
          path: '/testimonial',
          icon: 'fas fa-book-open'
        },
      ]

})
}
</script>

<style>
#app {
  font-family: 'Libre Franklin','Raleway','Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;

  color: #2c3e50;
}
body{
  margin:0;
  padding:0;
}
</style>
