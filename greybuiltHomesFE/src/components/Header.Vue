<template>
    <div class="container">
        <div class="banner">
            <div class="banner-container">
                <nav class="banner-box">
                    <div class="banner-items banner2">
                        <router-link tag="a" :to="{name: 'About'}">ABOUT</router-link>
                    </div>
                    <div class="banner-items banner4">
                        <router-link tag="a" :to="{name: 'Testimonial'}">TESTIMONIALS</router-link>
                    </div>
                    <div class="banner-items banner1">
                        <router-link tag="a" :to="{name: 'Home'}"><img src="/static/Images/logo.png" alt=""></router-link>
                    </div>
                    <div class="banner-items banner3">
                        <router-link tag="a" :to="{name: 'Project'}">PROJECTS</router-link>
                    </div>
                    <div class="banner-items banner5">
                        <router-link tag="a" :to="{name: 'Contact'}">CONTACT US</router-link>
                    </div>

                </nav>
            </div>
        </div>

    </div>
</template>

<script>
export default {

}
</script>

<style scoped lang="scss">
$container: #B3B6B7;
$shadowGrey: #54595f;
$background: #0C1B33;

.mobile-menu {
    display: none;
}
.container{
  position: sticky;
}
.banner {
    display: grid;
    background-color: #0C1B33;
    height: 30%;
}

ul {
    margin: 0;
    padding: 0;
}

img {
    height: 25vh;
}
.banner-container{
  background-color: $background;
}
.banner-box {
    margin: 0 auto;
    width: 90%;
    padding: 20px 0px;
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
}

a {
    font-size: 1.8em;
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
@media screen and (max-width: 1024px){
  .banner{

    font-size: 0.8em;

    img{
      height: 15vh;
    }
  }
}

@media screen and (max-width: 500px) {
    .mobile-menu {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        height: auto;
        background-color: #0C1B33;
        color: #fff;
        height: 15%;
   .mobile-item {

        font-size: 2em;
    }
    }

    .banner2,
    .banner3,
    .banner4,
    .banner5 {
        display: none;
    }
    .banner-box {
        padding: 0px;
    }
    img{
      height: 20vh;
    }
}
</style>
