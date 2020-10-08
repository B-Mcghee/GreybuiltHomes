<template>
          <div class="mobile-menu">
            <router-link tag="div" :to="{name: 'Project'}"><i class="mobile-item fas fa-hammer"></i></router-link>
            <router-link tag="div" :to="{name: 'About'}"><i class="mobile-item fas fa-user"></i></router-link>
            <router-link tag="div" :to="{name: 'Home'}"><i class="mobile-item fas fa-home"></i></router-link>
            <router-link tag="div" :to="{name: 'Testimonial'}"><i class="mobile-item fas fa-book-open"></i></router-link>
            <router-link tag="div" :to="{name: 'Contact'}"><i class="mobile-item fas fa-id-card"></i></router-link>
        </div>
</template>

<script>
export default {

}
</script>

<style scoped lang="scss">
.mobile-menu{
  display: none;
}
  @media screen and (max-width: 500px) {

    .mobile-menu {
        display:flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        height: 120px;
        background-color: #0C1B33;
        color: #fff;

    }
   .mobile-item {

        font-size: 2em;
    }
    }
</style>
