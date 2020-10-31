<template>
    <div id="app">

        <!-- <app-main
                  :nav-links="navLinks"
                  :image-path ="require('../static/Images/logo.png')"
                  background="#333"
                  linkColor="#777"
                  hoverBackground="#999"

                ></app-main> -->
        <navigation :nav-links="navLinks" :image-path="require('../static/Images/GB_Homes_Reverse.png')" linkColor="#777" />
        <!-- <app-header :nav-links="navLinks" :image-path="require('../static/Images/logo.png')"></app-header> -->
        <router-view/>
    </div>
</template>

<script>
import Main from '@/components/Main'
import Header from '@/components/Header'
import Navigation from '@/components/Navigation/Navigation'
export default {
    name: 'App',
    components: {
        'app-main': Main,
        'app-header': Header,
        Navigation
    },
    data: () => ({

        navLinks: [

            {
                text: 'About',
                path: '/about',
                icon: 'fas fa-user'
            },
            {
                text: 'Projects',
                path: '/projects',
                icon: 'fas fa-hammer'
            },
            {
                text: 'Home',
                path: '/',
                icon: 'fas fa-home'
            },
            {
                text: 'Floor Plans',
                path: '/testimonials',
                icon: 'fas fa-book-open'
            },

            {

                text: 'Contact Us',
                path: '/contact',
                icon: 'fas fa-id-card'
            },



        ]

    })
}
</script>

<style>
figure {
    margin-block-start: 0;
    margin-block-end: 0;
    margin-inline-start: 10px;
    margin-inline-end: 0;
}

#app {
    font-family: 'Libre Franklin', 'Raleway', 'Avenir', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    color: rgb(18, 39, 68);
}

body {
    width: 100vw;
    margin: 0;
    padding: 0;
}

</style>
