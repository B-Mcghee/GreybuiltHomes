<template>
  <nav :style = "{background: [background, '#0C1B33'] }" ref="nav" >
    <ul :style = "{background: [background, '#0C1B33'] }">
      <figure class="image-logo">
        <img :src="imagePath" height="40px" width="40px" alt=""/>
      </figure>
      <li v-for="(link, index) in navLinks"
      :key ="index"
      :style = "{color:[linkColor, '#DDD']}"
      @mouseenter="$event.currentTarget.style.background = hoverBackground, '#999'"
      @mouseleave="$event.currentTarget.style.background = background, '#333'"
      >
      <router-link
      :style = "{color:[linkColor, '#DDD']}"
      tag="a"
      :to="{name: link.path}">{{link.text}}<i :class="link.icon"/></router-link>
      </li>
    </ul>
  </nav>
</template>

<script>

export default {
  props: [
    'navLinks', 'background', 'LinkColor', 'hoverBackground', 'imagePath'
  ]

}
</script>

<style scoped lang="scss">

  nav {
    height: 60px;
    width: 100%;
     ul{
    display: flex;
    height: 100%;
    align-items: center;
    margin-block-start: 0;
    margin-block-end: 0;
    padding-inline-start: 0;

    figure{
      cursor: pointer;
    }
    a{
      text-decoration: none;
      display: flex;
      flex-direction: row-reverse;
      align-items: center;
    }

    i{
      margin-right: 10px;
      font-size: 22px;
    }
    li{
      list-style-type: none;
      padding: 10px 20px;
    }

  }
  }

  @media screen and (max-width: 770px){
    nav {


      ul{
      position:fixed;
      bottom:0;
      left: 0;
      right: 0;

        flex-direction: row;
        height:100px;
        width: 100%;

        li{
          width: 100%;
          padding-left: 0;
          padding-right: 0;
        }

        a{
          flex-direction: row;
          margin-left: 20px;
          justify-content: space-between;
          margin-right:13px;
        }
      }
    }
  }

</style>
