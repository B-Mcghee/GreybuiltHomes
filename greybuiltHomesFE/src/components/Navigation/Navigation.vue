<template>
<nav :style = "{background: [background, 'rgb(18,39,68)' ] }"  >
    <ul :style = "{background: [background, 'rgb(18,39,68)'] }" ref="nav">
      <figure class="image-logo" @click="toggleNav">
        <img :src="imagePath"   alt=""/>
      </figure>
      <li v-for="(link, index) in navLinks"
      :key ="index"
      :style = "{color:[linkColor, '#FFF']}"
      @mouseenter="$event.currentTarget.style.background =  'rgb(18,39,68)','#999'"
      @mouseleave="$event.currentTarget.style.background =  'rgb(18,39,68)','#333'"
      >
      <router-link
      :style = "{color:[linkColor, '#FFF']}"
      tag="a"
      :to="link.path"><span @click="navToggle">{{link.text}}</span><i @click="navToggle" :class="link.icon" /></router-link>
      </li>
    </ul>
    <div class="icon" @click="toggleNav"><i class="fas fa-bars"></i>
</div>
  </nav>
</template>

<script>
export default {
  props: [
    'navLinks', 'background', 'hoverBackground', 'imagePath','linkColor'
  ],
  methods:{
    toggleNav(){
      const nav = this.$refs.nav.classList
      nav.contains('active') ? nav.remove('active') : nav.add('active')
    },
    navToggle(){
      const nav = this.$refs.nav.classList
      if(nav.contains('active')){
        nav.remove('active');
      }
    }
  }
}
</script>

<style scoped lang="scss">
$primary: rgb(148,148,148);
$shadowGrey: #54595f;
$secondary: rgb(18,39,68);
.root{
  margin: 0;
}
.content{
  justify-content: none;
}

nav {
  font-weight: 900;
	height: 60px;
	width: 100%;


	ul {
		display: flex;
		height: 100%;
		align-items: center;
		margin-block-start: 0;
		margin-block-end: 0;
		padding-inline-start: 0;
    cursor: pointer;
    justify-content: flex-end;

		figure {
      img{
        width:70px;
      }
      	position: fixed;
				z-index: 1;
				top: 10px;
				left: 5px;
			cursor: pointer;
			margin-right: 10px;
		}
		a {
			text-decoration: none;
			display: flex;
			flex-direction: row-reverse;

			align-items: center;
		}
		i {
			margin-right: 10px;
			font-size: 22px;
		}
		li {
			list-style-type: none;
			padding: 10px 20px;

		}
	}
}
.icon{
  display: none;
}

@media screen and (max-width: 1024px) {

	nav {
    height: 50px;

		ul {
			position: fixed;
			width: 260px;
			flex-direction: column-reverse;
			left: -200px;
			transition: 300ms ease all;
      justify-content: flex-start;
         margin-right: 50px;
			&.active {
				left: 0px;
			}
			figure {
              img{
        width:60px;
      }
				position: fixed;
				z-index: 1;
				top: 10px;
				left: -5px;
			}
			li {
        align-self: flex-end;
				width: 100%;
				padding-left: 0;
				padding-right: 0;
        margin-bottom: .5em;
			}
			a {
				flex-direction: row;
				margin-left: 20px;
				justify-content: space-between;
				margin-right: 5px;
			}

      i{

        font-size: 1.25rem;
      }

		}
	}
  .icon{
    display: block;
    background-color: $secondary;
    color: #fff;
    position: fixed;
    right: 10px;
    bottom:10px;
    padding: .25em .5em;
    border-radius: .5em;

    i{
      font-size: 1.5rem;
    }
  }
}

@media screen and (max-width: 500px) {
  nav {
    height: 50px;
		ul {
			position: fixed;
			width: 175px;
			flex-direction: column-reverse;
			left: -175px;
			transition: 300ms ease all;
    }
  }
}
</style>
