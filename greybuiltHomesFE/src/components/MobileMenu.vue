<template>
          <div class="mobile-menu">
            <router-link tag="div" :to="{name: 'Project'}">Projects<i class="mobile-item fas fa-hammer"></i></router-link>
            <router-link tag="div" :to="{name: 'About'}">About<i class="mobile-item fas fa-user"></i></router-link>
            <router-link tag="div" :to="{name: 'Home'}">Home<i class="mobile-item fas fa-home"></i></router-link>
            <router-link tag="div" :to="{name: 'Testimonial'}">Floor Plans<i class="mobile-item fas fa-book-open"></i></router-link>
            <router-link tag="div" :to="{name: 'Contact'}">Contact<i class="mobile-item fas fa-id-card"></i></router-link>
        </div>
</template>

<script>
export default {

}
</script>

<style scoped lang="scss">

    .mobile-menu {
        z-index: 2;
        display:flex;
        flex-direction: column;
        justify-content: flex-end;
        align-items: flex-end;
        position: fixed;
        top: 7em;
        bottom: 0;
        left: 0;
        right: 0;
        width: 40%;
        background-color: #0C1B33;
        color: #fff;

        div{
          margin: 1rem .25rem;
        }

    }
   .mobile-item {

        font-size: 2em;
    }

</style>
