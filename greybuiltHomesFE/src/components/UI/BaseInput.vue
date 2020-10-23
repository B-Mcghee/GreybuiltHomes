<template>
  <input :type="type">
</template>

<script>
export default {
props:['type']
}
</script>

<style lang="scss" scoped>
$container: #B3B6B7;
$shadowGrey: #54595f;
$background: #0C1B33;
  .style-input{

    max-width: 80%;
  }
  input {
    cursor: text;
    display: block;
    width: 100%;
    padding: 0.15rem;
    border-radius: 10px;
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    outline: none;
    padding: 6px 0px 6px 3px;
    margin: 10px 1px 6px 0px;
    border: 1px solid #DDDDDD;
    width: 75%;
}

input:focus {
    box-shadow: 0 0 5px $background;
    padding: 6px 0px 6px 3px;
    margin: 10px 1px 6px 0px;
    border: 1px solid $background;
    background-color: $container;
}
</style>
