<template>
  <div class="navigation">
    <div class="menu">
        <div class="logo-background">
          <img class="logo" src="/static/Images/logo.png" alt="">
      </div>
      <div class="nav">
        <ul class="nav-box">
          <router-link tag="li" to=""></router-link>
          <router-link tag="li" to=""></router-link>
          <router-link tag="li" to=""></router-link>
          <router-link tag="li" to=""></router-link>
          <li class="nav-items"><a href="">ABOUT</a></li>
          <li class="nav-items"><a href="">PROJECTS</a></li>
          <li class="nav-items"><a href="">CONTACT US</a></li>
          <li class="nav-items"><a href="">TESTIMONIALS</a></li>
        </ul>
      </div>
    </div>
    <div class="home-image-background">
      <img class="home-image" src="/static/Images/side.jpg" alt="">
    </div>
  </div>

</template>

<script>
export default {

}
</script>

<style scoped>
  .navigation
  {
    height: 94vh;
    width:96vw;
    margin-top: 3vh;
    margin-bottom: 3vh;
    margin-left: 2vw;
    margin-right: 2vw;
    background-color:#B3B6B7;

  }
  .menu{
    max-width: 50%;
    min-height: 100%;
  }
  .logo-background{
    position: absolute;
    top:0px ;
    height:50%;
    width:30%;
    left: 5%;
    background-color: #0C1B33;
    z-index: 10;
    box-shadow: 5px 5px 10px #54595f;
  }
  .logo{
    width: 100%;
  }

.nav{
  position: absolute;
  left:5%;
  bottom: 4%;
  margin-left: 2%;
  width:30%;
  cursor: pointer;
}

.nav-box{
  display:flex;
  flex-direction: column;
  font-size: 2.8em;
  list-style: none;
}
.nav-items {
  display: flex;
  justify-content: left;
  margin: 3%;


}

a{
  padding-left:5px;
}
a:hover{
  border-left: 5px solid #0C1B33;
}

a, a:visited{
  color: #0C1B33;
  text-decoration: none;
}

.home-image-background{
  position: absolute;
  top:7%;
  right:4%;
  width: 59%;

}
.home-image{
  width:100%;
  box-shadow: 5px 5px 10px #54595f;
}




</style>


