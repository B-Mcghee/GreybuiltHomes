<template>
<h2>Add Project</h2>
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>
$container: #B3B6B7;
$shadowGrey: #54595f;
$background: #0C1B33;

  .add{
    margin: 25px 0px;

    form{
    display: flex;


    input[type="text"]{
    flex:10;
    padding: 10px;
    border: 1px solid $background;
    outline: 0;
    }

    input[type="submit"]{
      background: $background;
      color: #fff;
      border: 1px solid $background;
      cursor: pointer;
    }
    }
  }
</style>
