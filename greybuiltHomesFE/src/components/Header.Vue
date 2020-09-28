<template>
    <div class="banner">
        <div class="banner-logo">
            <img src="/static/Images/logo.png" alt="">
        </div>
        <div class="banner-container">
            <ul class="banner-box">
                <li class="banner-items">
                    <router-link tag="a" :to="{name: 'Home'}">HOME</router-link>
                </li>
                <li class="banner-items">
                    <router-link tag="a" :to="{name: 'About'}">ABOUT</router-link>
                </li>
                <li class="banner-items">
                    <router-link tag="a" :to="{name: 'Project'}">PROJECTS</router-link>
                </li>
                <li class="banner-items">
                    <router-link tag="a" :to="{name: 'Testimonial'}">TESTIMONIALS</router-link>
                </li>
                <li class="banner-items ">
                    <router-link tag="a" :to="{name: 'Contact'}">CONTACT US</router-link>
                </li>

            </ul>
        </div>

    </div>
</template>

<script>
export default {

}
</script>

<style scoped>
* {
    box-sizing: border-box;
}

.banner {
    background-color: #0C1B33;
    height: 30%;
}
ul{
  margin:0;
  padding:0;
}
.banner-logo {
    display: flex;
    justify-content: center;
    width: 100vw;
    height: 50%;
}

img {
    height: 20vh;
}

.banner-box {
    display: flex;
    flex-direction: row;
    justify-content: center;
    margin: 0 auto;
}

.banner-items {
    display: flex;
    list-style: none;
    margin: 0 3%;
    padding-bottom: 20px;
    /* border-radius: 0 25px 0 25px; */
    /* transition-duration: 500ms; */
}

/* .banner-container {
    margin-left: 8%;
} */

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
</style>
