<template>
    <div>
        <div class="grid-container">
            <div class="menu grid-item-1 small-grid-container">
                <div class="logo-background small-grid-1">
                    <img class="logo" src="/static/Images/logo.png" alt="">
                </div>
                <!-- <div class="mobile-background">
                      <img class = "mobile-background-image" src="/static/Images/blueprint.jpg" alt="">
                    </div> -->
            </div>
            <div class="nav grid-item-2">
                  <nav class="nav-box">
                    <div class="nav-items nav-item1">
                        <router-link tag="a" :to="{name: 'About'}">ABOUT</router-link>
                    </div>
                    <div class="nav-items nav-item2">
                        <router-link tag="a" :to="{name: 'Project'}">PROJECTS</router-link>
                    </div>
                    <div class="nav-items nav-item3">
                        <router-link tag="a" :to="{name: 'Contact'}">CONTACT US</router-link>
                    </div>
                    <div class="nav-items nav-item4">
                        <router-link tag="a" :to="{name: 'Testimonial'}">TESTIMONIALS</router-link>
                    </div>
                </nav>
                <!-- <ul class="nav-box">
                    <li class="nav-items nav-item1">
                        <router-link tag="a" :to="{name: 'About'}">ABOUT</router-link>
                    </li>
                    <li class="nav-items nav-item2">
                        <router-link tag="a" :to="{name: 'Project'}">PROJECTS</router-link>
                    </li>
                    <li class="nav-items nav-item3">
                        <router-link tag="a" :to="{name: 'Contact'}">CONTACT US</router-link>
                    </li>
                    <li class="nav-items nav-item4">
                        <router-link tag="a" :to="{name: 'Testimonial'}">TESTIMONIALS</router-link>
                    </li>
                </ul> -->
            </div>
            <div class="grid-item-4">
                  <h1 class="landing-title"> Call us today to build your dream home!</h1>
                <p class="landing-text">We are a family owned business in
                  Southern Indiana striving to build exceptional custom homes for our customers.</p>

                  <button class="get-started"><span>Get Started</span></button>
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

<style scoped lang="scss">
$container: #B3B6B7;
$shadowGrey: #54595f;
$background: #0C1B33;

.grid-container {
    display: grid;
    grid-template-columns: 30% auto;
    grid-template-rows: 40% auto;
    background-color: $container;
    min-height: 94vh;
    min-width: 96vw;
    margin-top: 3vh;
    margin-bottom: 3vh;
    margin-left: 2vw;
    margin-right: 2vw;
    box-shadow: 5px 5px 10px $shadowGrey;
    column-gap: 3%;
    grid-template-areas:
    "grid-item-1 grid-item-2 "
    "grid-item-4 grid-item-3 ";
}

.grid-item-1 {
    grid-area: grid-item-1;
    justify-self: end;
    align-self: start;
    margin-top: -8%;
    margin-left: 5%;
}

.grid-item-2 {
    grid-area: grid-item-2;

}
.grid-item-4{

 grid-area: grid-item-4;
 justify-self: center;
  align-self: start;
  margin-top: 5%;
  .landing-title{
    font-size: 2.5vw;
    font-weight: 900;
  }
  .landing-text{
    margin-top: 5%;
    font-size: 1.3vw;
    line-height: 1.5em;
  }
  .get-started{
    background-color: $background;
    color: #fff;
    padding: 15px 20px;
    border-radius: 25px;
    border: none;
    cursor: pointer;
    text-align: center;
    transition: all 0.5s;


  }
  .get-started  span{
    position: relative;
    transition: 0.5s;
  }
  .get-started span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
  }

  .get-started:hover{
      opacity: 0.8;
  }
}

.nav-box {
    margin: 0;
    margin-top: 0.8em;
    margin-left: 0.5em;
    padding: 0;
    font-size: 2vw;
    display: grid;
    grid-template-columns: auto auto;
    grid-template-rows: auto auto;
    grid-template-areas:
    "nav1 nav2"
    "nav3 nav4";

    .nav-item1{
      grid-area: nav1;
    }
    .nav-item2{
      grid-area: nav2;
    }
    .nav-item3{
      grid-area: nav3;
    }
    .nav-item4{
      grid-area: nav4;
    }

}

.grid-item-3 {
    grid-area: grid-item-3;
    margin-right: 3%;
}

.home-image {
    position: relative;
    width: 100%;
    height: auto;
    left: 0;
    margin-top: -20%;
    border-radius: 25px 0px;
    box-shadow: 5px 5px 10px $shadowGrey;
}

.nav-items {
    margin: 3%;
    margin-left: 1em;
}
a {
    padding-left: 5px;
}

a::after {
    content: '';
    display: block;
    margin: 0 auto;
    height: 3px;
    width: 10%;
    background-color: $background;
    padding-left: 2px;
    transition: 500ms ease-in;
    transform: scaleX(0);
}

a:hover::after {
    transform: scaleX(5);
}

a,
a:visited {
    color: $background;
    text-decoration: none;
}

.logo {
    background-color: $background;
    max-width: 93%;
    box-shadow: 5px 5px 10px $shadowGrey;
}

@media screen and (max-width: 800px) {
    .grid-container {
        display: grid;
        grid-template-columns: 35% 60%;
        grid-template-rows: auto 40% auto;
        grid-template-areas: "grid-item1 grid-item3" "grid-item2 grid-item2";
        .grid-item-1 {
            grid-area: grid-item1;
        }
        .grid-item-3 {
            grid-area: grid-item3;
        }
        .grid-item-2 {
            grid-area: grid-item2;
        }
        .nav-box {
            display: grid;
            grid-template-columns: 50% 50%;
            grid-template-rows: 50% 50%;
            width: 100%;
            justify-items: left;
            grid-template-areas: "nav-item1 nav-item2" "nav-item3 nav-item4";
            width: 100vw;
            font-size: 4.5vw;
            li {
                margin: 5%;
            }
        }
        .nav-item1 {
            grid-area: nav-item1;
            display: inline;
        }
        .nav-item2 {
            display: inline;
            grid-area: nav-item2;
        }
    }
}

@media screen and (max-width: 500px) {
    .grid-container {
        display: grid;
        grid-template-columns: 100%;
        grid-template-rows: auto auto auto;
        grid-template-areas: "grid-item-1 " "grid-item-3 " "grid-item-2";
    }
    .grid-item-1 {
        grid-area: grid-item-1;
        max-width: 60%;
        margin: -10% auto 10% auto;
    }
    .grid-item-3 {
        grid-area: grid-item-3;
        .home-image {
            margin-left: 1.5%;
            box-shadow: 2px 2px 5px $shadowGrey;
            border-radius: 15px 0px;
            width: 90%;
        }
    }
    .grid-item-2 {
        grid-area: grid-item-2;
    }
    .nav-box {
        width: 100%;
        display: grid;
    }
}
</style>
