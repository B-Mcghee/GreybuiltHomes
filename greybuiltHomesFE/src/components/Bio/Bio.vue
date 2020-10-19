<template>
<div >
  <base-card>

   <img :src="bio.Image" alt="">
    <h1>{{bio.FirstName}} {{bio.LastName}}</h1>
    <h3>{{bio.Position}}</h3>
    <p>{{bio.Description}}</p>


  </base-card>
</div>
</template>

<script>
export default {

props:['bio']
}
</script>

<style lang="scss" scoped>

  img{
    border-radius: 1em;
    max-width: 250px;
    background-position: center; /* Center the image */
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>
