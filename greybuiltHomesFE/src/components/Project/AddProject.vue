<template>
  <div>
    <h3>add project</h3>
    <div class="add">
      <form action="">

        <input v-model="title" type="text" placeholder="Add Project Title"/>
        <input type="submit">
      </form>
    </div>
  </div>
</template>

<script>
export default {
  data(){
    return {
      title: ''
    }
  }
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
