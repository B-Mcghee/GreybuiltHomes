<template>
    <div>
        <div class="grid-container">
            <div class="menu grid-item-1 small-grid-container" >
                <div class="logo-background small-grid-1">
                    <img class="logo" src="/static/Images/logo.png" alt="">
                </div>
                <div class="nav small-grid-2">
                    <ul class="nav-box">
                        <li class="nav-items">
                            <router-link tag="a" :to="{name: 'About'}">ABOUT</router-link>
                        </li>
                        <li class="nav-items">
                            <router-link tag="a" :to="{name: 'Project'}">PROJECTS</router-link>
                        </li>
                        <li class="nav-items">
                            <router-link tag="a" :to="{name: 'Contact'}">CONTACT US</router-link>
                        </li>
                        <li class="nav-items">
                            <router-link tag="a" :to="{name: 'Testimonial'}">TESTIMONIALS</router-link>
                        </li>
                    </ul>
                </div>
            </div>
              <div class="grid-item-2">
                <img class="home-image" src="/static/Images/side.jpg" alt="">
              </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style scoped>
.grid-container {
    display: grid;
    position: relative;

    grid-template-columns: 35% 65%;
    grid-template-rows: 50% 40%;
    grid-column-gap:3%;
    background-color: #B3B6B7;
    /* grid-template-columns: 500px 450px; */
    /* grid-auto-rows: minmax(150px, auto); */
    min-height: 94vh;
    min-width:96vw;
    margin-top: 3vh;
    margin-bottom: 3vh;
    margin-left: 2vw;
    margin-right: 2vw;
     box-shadow: 5px 5px 10px #54595f;
}
.grid-item-1{
  margin-top: -10%;
  margin-left: 10%;
  width:10%;
  grid-column-start: 1;
  grid-column-end: 2;
  grid-row-start: 1;
  grid-row-end: 3;
}
.nav-box{
  display: flex;
  flex-direction: column;


}
.nav-items{
  display: flex;
  list-style: none;
  justify-content: left;
  align-content: center;
font-size: calc(14px + (26 - 14) * ((100vw - 300px) / (1600 - 1000)));  padding: 10px;



}
a{
  padding-left:5px;
}
a::after{

  content:'';
  display: block;
  margin:0 auto;
  height:3px;
  width:10%;
  background-color: #0C1B33;
  padding-left: 2px;
  transition: 500ms ease-in;
  transform: scaleX(0);
}
a:hover::after{
transform: scaleX(10);
}

a, a:visited{
  color: #0C1B33;
  text-decoration: none;
}
.menu {
  display: grid;
}
.small-grid-1{

}


.logo-background {
}

.logo {

  background-color: #0C1B33;
  width:100%;
   box-shadow: 5px 5px 10px #54595f;

}

.grid-item-2{
position: relative;
max-width: 93%;
}
.home-image {

  position: relative;
  width: 100%;
  height: auto;
  left: 0;
 margin-top: 3%;

   box-shadow: 5px 5px 10px #54595f;

}
</style>
