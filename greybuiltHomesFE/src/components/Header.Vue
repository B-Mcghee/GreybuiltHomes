<template>
  <div class="container" ref="container">
    <div class="banner-container">
        <nav class="banner-box">
            <div class="banner-items banner2">
                <router-link tag="a" :to="{name: navLinks[1].text}">ABOUT</router-link>
            </div>
            <div class="banner-items banner4">
                <router-link tag="a" :to="{name: navLinks[3].text}">TESTIMONIALS</router-link>
            </div>
            <div class="banner-items banner1">
                <router-link tag="a" :to="{name: navLinks[4].text}"><img class="image-path" :src=imagePath alt=""></router-link>
            </div>
            <div class="banner-items banner3">
                <router-link tag="a" :to="{name: navLinks[2].text}">PROJECTS</router-link>
            </div>
            <div class="banner-items banner5">
                <router-link tag="a" :to="{name: navLinks[0].text}">CONTACT US</router-link>
            </div>
        </nav>
    </div>
    <app-menu v-if="mobilemenu"></app-menu>
    <div @click = "openModal()" class="icon">
      <i class="fas fa-bars"></i>
    </div>
  </div>

</template>

<script>
import MobileMenu from '@/components/MobileMenu.vue'

export default {
    props: [
        'navLinks', 'imagePath'
    ],
    components:
    {'app-menu': MobileMenu},
    data()
      {
        return{
         mobilemenu:false,
         windowWidth: 0

        }
      },
    methods:
    {
      getWindowWidth(event){

        this.windowWidth = document.documentElement.clientWidth;

        if(this.windowWidth < 770){
          this.mobilemenu = true;
        }
        else{
          this.mobilemenu = false;
        }
      }
    },
    mounted() {

        this.$nextTick(function()
        {
          window.addEventListener('resize', this.getWindowWidth);

          this.getWindowWidth()
        })
      },
    beforeDestroy(){
      window.removeEventListener('resize', this.getWindowWidth);

    }


}
</script>

<style scoped lang="scss">
$container: #B3B6B7;
$shadowGrey: #54595f;
$background: #0C1B33;

.container{
  width:100vw;

}

.banner-container {
    width: 100%;
    height:15%;
    background-color: $background;
    .banner-box {
        max-height: 100%;
        margin: 0 auto;
        padding-left: 10em;
        padding-right: 10em;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;

      .image-path{
        max-height: 200px;
      }
    }
}

a {
    font-size: 1rem;
}

a,
a:visited {
    text-decoration: none;
    color: white;
    font-weight: 300;
}

a::after,
a::before {
    content: '';
    display: block;
    margin: 0 auto;
    height: 3px;
    width: 10%;
    background-color: white;
    padding: 0px 2px 0px 2px;
    transition: 500ms ease-in;
    transform: scaleX(0);
}

a:hover::after,
a:hover::before {
    transform: scaleX(10);
}

// @media screen and (max-width: 1024px) {
//     .banner {
//         font-size: 0.8em;
//         img {
//             height: 15vh;
//         }
//     }
// }

@media screen and (max-width: 770px) {

  //   .mobile-menu {
    //       display: flex;
    //       flex-direction: row;
    //       justify-content: space-around;
    //       align-items: center;
    //       position: fixed;
    //       bottom: 0;
    //       left: 0;
    //       right: 0;
    //       height: auto;
    //       background-color: #0C1B33;
    //       color: #fff;
    //       height: 15%;
    //  .mobile-item {
    //       font-size: 2em;
    //   }
    //   }
    .banner2,
    .banner3,
    .banner4,
    .banner5 {
        display: none;
    }
    .banner-box {
        padding: 0px;

        .image-path{
          max-width: 7em;
        }
    }
  .icon{

    display: inline-block;
    background-color: $background;
    color: #fff;
    padding: .5rem .75rem;
    font-size: 2.5em;
    border-radius: .25em;
    position: fixed;
    bottom: .25em;
    left:.25em;
    cursor: pointer;
  }

}
</style>
