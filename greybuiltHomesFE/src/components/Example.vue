<template>
    <div>
        <div class="grid-container">
            <div class="menu grid-item-1 small-grid-container" >
                <div class="logo-background small-grid-1">
                    <img class="logo" src="/static/Images/logo.png" alt="">
                </div>
                <div class="mobile-background">
                  <img class = "mobile-background-image" src="/static/Images/blueprint.jpg" alt="">
                </div>
            <div class="nav grid-item-2">
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

              <div class="grid-item-3">
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
    grid-template-columns: 30% auto;
    grid-template-rows: 50% auto;
    background-color: #B3B6B7;
    min-height: 94vh;
    min-width:96vw;
    margin-top: 3vh;
    margin-bottom: 3vh;
    margin-left: 2vw;
    margin-right: 2vw;
    box-shadow: 5px 5px 10px #54595f;
    grid-column-gap:3%;
    grid-template-areas:
   "grid-item-1 grid-item-3 "
    "grid-item-2 grid-item-3 ";

}
.grid-item-1{
  grid-area: grid-item-1;
  justify-self: end;
  align-self: start;
  margin-top: -8%;
  margin-left: 5%;

}
.grid-item-2{
  grid-area: grid-item-2;
  justify-self: center;
  align-self: start;
}
.grid-item-3{
  grid-area: grid-item-3;
  margin-right: 3%;
}
.home-image {

  position: relative;
  width: 100%;
  height: auto;
  left: 0;
  margin-top: 3%;

   box-shadow: 5px 5px 10px #54595f;

}
.nav{


}
.nav-box{
  margin: 0;
  margin-top: 0.8em;
  margin-left: 0.5em;
  padding: 0;
  display:flex;
  flex-direction: column;
  font-size: 2.5vw;


  list-style: none;
}
.nav-items {
  display: flex;
  justify-content: left;
  margin: 3%;
    margin-left: 1em;

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

.logo {

  background-color: #0C1B33;
  max-width:93%;
   box-shadow: 5px 5px 10px #54595f;

}



.mobile-background{
  display: none;
}
/* @media screen and (max-width: 500px){
  .grid-item-1{
    max-width: 60%;
    margin: -10% auto 10% auto;
    grid-column: 1 / -1;

  }
  .grid-item-2{
    display: none;
  }
  .mobile-background{

    display: block;

  }
  .mobile-background-image{
        grid-column: 1/-1;
    grid-row-start: 2;
    grid-row-end: 3;
    display: block;
    max-width: 100%;
    margin: 0 auto;
  }
  .grid-container {
    display: grid;
    position: relative;

    grid-template-columns: 100%;
    grid-template-rows: 20% 50% 30%;

  }

} */
</style>
