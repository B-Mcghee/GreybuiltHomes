<template>
<div>
  <h2>Add Project</h2>
<p>{{projects}}</p>
</div>

</template>

<script>
export default {
inject: ['projects']
}
</script>

<style lang="scss" scoped>
$primary: rgb(148,148,148);
$shadowGrey: #54595f;
$secondary: rgb(18,39,68);

  .add{
    margin: 25px 0px;

    form{
    display: flex;


    input[type="text"]{
    flex:10;
    padding: 10px;
    border: 1px solid $secondary;
    outline: 0;
    }

    input[type="submit"]{
      background: $secondary;
      color: #fff;
      border: 1px solid $secondary;
      cursor: pointer;
    }
    }
  }
</style>
