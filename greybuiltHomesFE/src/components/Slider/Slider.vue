<template>
    <div class="slider">
        <slot></slot>
        <button @click="next" class="next">Next</button>
        <button @click="prev" class="prev">Prev</button>
    </div>
</template>

<script>
export default {
    methods:{
  next(){
    this.$emit('next');
  },
  prev(){
    this.$emit('prev');
  }
},

}
</script>

<style lang="scss" scoped>
.slider{
  position: relative;
  overflow: hidden;
  width: 90%;
  margin: 0 auto;

}
button{
  position: absolute;
  width: 40px;
  height: 30px;
  top: calc(50%);
}
.next{
  right: 0;
}

.prev{
  left: 0;
}
</style>
