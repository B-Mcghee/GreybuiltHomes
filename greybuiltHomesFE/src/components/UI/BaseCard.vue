<template>
  <div class="slot-container">
    <slot></slot>
  </div>
</template>

<script>
export default {

}
</script>

<style lang = "scss" scoped>
.slot-container{
  border-radius: 12px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.25);
  padding: 1rem;
  margin: 2rem auto;
  max-width: 40rem;


}



</style>
