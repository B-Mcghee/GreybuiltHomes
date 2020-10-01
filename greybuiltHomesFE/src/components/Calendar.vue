<template>
  <div class="container">
    <div class = "day" v-for="i in 31">
    </div>
  </div>
</template>

<script>
export default {

}
</script>

<style scoped>
*{
  box-sizing: border-box;
}
  .container{
    margin:auto auto;
    width: 100vw;
    height: 100vh;
    background: darkgreen;
  }
  .day{

    background-color: darkred;
    width: calc(100% / 7);
    height: calc(100% / 5);
    border: 1px solid black;
    display: inline-block;
  }
</style>
