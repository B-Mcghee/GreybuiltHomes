<template>
  <div class="project" v-if="show">
    <h2>{{title}}</h2>
    <img :src="projectImage" alt="">
  </div>
</template>

<script>
export default {

  props:['title', 'projectImage', 'show']
  }

</script>

<style lang="scss" scoped>
  .project{

  }
  img{
    max-width: 200px;
  }
</style>
