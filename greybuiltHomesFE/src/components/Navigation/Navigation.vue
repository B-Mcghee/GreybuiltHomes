<template>
<nav :style = "{background: [background, '#0C1B33'] }"  >
    <ul :style = "{background: [background, '#0C1B33'] }" ref="nav">
      <figure class="image-logo" @click="toggleNav">
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
      :to="link.path">{{link.text}}<i :class="link.icon"/></router-link>
      </li>
    </ul>
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
    }
  }
}
</script>

<style scoped lang="scss">
$container: #B3B6B7;
$shadowGrey: #54595f;
$background: #0C1B33;
nav {

	height: 60px;
	width: 100%;
	box-shadow: 2px 2px 2px #CCC;
	ul {
		display: flex;
		height: 100%;
		align-items: center;
		margin-block-start: 0;
		margin-block-end: 0;
		padding-inline-start: 0;
    top:60px;
		box-shadow: 2px 2px 2px #CCC;
    cursor: pointer;
		figure {
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
@media screen and (max-width: 759px) {
	nav {

		ul {
			position: fixed;
			width: 300px;
			flex-direction: column-reverse;
			left: -240px;
			transition: 300ms ease all;

			&.active {
				left: 0px;
			}
			figure {
				position: fixed;
				z-index: 1;
				top: 10px;
				left: 2px;
        background-color: $background;
			}
			li {

				width: 100%;
				padding-left: 0;
				padding-right: 0;
			}
			a {
				flex-direction: row;
				margin-left: 20px;
				justify-content: space-between;
				margin-right: 13px;
			}
		}
	}
}
</style>
