<template>
  <button  :type = 'type' :class = mode>
    <slot></slot>
  </button>
</template>

<script>
export default {
props:['type', 'mode'],

}
</script>

<style lang="scss" scoped>
$container: #B3B6B7;
$shadowGrey: #54595f;
$background: #0C1B33;
$backgroundHover: #1d3e72;

  button{
    border-radius: 1.0rem;
    padding: 0.75rem 1.5rem;
    font-family: inherit;
    background-color: $background;
    border: 1px solid $background;
    color: white;
    cursor: pointer;


  }

      button:hover,
    button:active {
     background-color: $backgroundHover ;
     border-color: $backgroundHover;
    }

    .flat {
  background-color: transparent;
  color: $background;
  border: none;
}

.flat:hover,
.flat:active {
  background-color: $backgroundHover;
}
</style>
