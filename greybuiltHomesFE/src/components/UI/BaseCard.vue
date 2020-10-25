<template>
  <div class="slot-container">
    <slot></slot>
  </div>
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>

$primary: rgb(148,148,148);
$secondary: rgba(18,39,68, 0.55);


.slot-container{
  border-radius: 12px;
  box-shadow: 0 2px 8px $secondary;
  padding: 1rem;
  margin: 2rem auto;
  max-width: 40rem;


}



</style>
