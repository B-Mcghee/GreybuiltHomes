<template>
    <div id="app">

        <!-- <app-main
              :nav-links="navLinks"
              :image-path ="require('../static/Images/logo.png')"
              background="#333"
              linkColor="#777"
              hoverBackground="#999"

            ></app-main> -->
        <app-header :nav-links="navLinks" :image-path="require('../static/Images/logo.png')"></app-header>
        <router-view/>
    </div>
</template>

<script>
import Main from '@/components/Main'
import Header from '@/components/Header'

export default {
    name: 'App',
    components: {
        'app-main': Main,
        'app-header': Header
    },
    data: () => ({

        navLinks: [{

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
                text: 'Project',
                path: '/project',
                icon: 'fas fa-hammer'
            },
            {
                text: 'Testimonial',
                path: '/testimonial',
                icon: 'fas fa-book-open'
            },
            {
                text: 'Home',
                path: '/',
                icon: 'fas fa-home'
            }
        ]

    })
}
</script>

<style>
#app {
    font-family: 'Libre Franklin', 'Raleway', 'Avenir', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    color: #2c3e50;
}

body {
    width:100vw;
    margin: 0;
    padding: 0;
}
.root{
  margin: 0% 10% 10% 10%;
}
</style>
