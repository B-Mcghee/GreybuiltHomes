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
$primary: rgb(148,148,148);
$shadowGrey: #54595f;
$secondary: rgb(18,39,68);
$secondaryHover: #1d3e72;

  button{
    border-radius: 1.0rem;
    padding: 0.75rem 1.5rem;
    font-family: inherit;
    background-color: $secondary;
    border: 1px solid $secondary;
    color: white;
    cursor: pointer;


  }

      button:hover,
    button:active {
     background-color: $secondaryHover ;
     border-color: $secondaryHover;
    }

    .flat {
  background-color: transparent;
  color: $secondary;
  border: none;
}

.flat:hover,
.flat:active {
  background-color: $secondaryHover;
}
</style>
