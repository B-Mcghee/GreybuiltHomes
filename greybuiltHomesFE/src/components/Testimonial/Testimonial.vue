<template>
  <div>
    <h1>{{testimonial.Name}}</h1><span>{{testimonial.rating}}</span>
    <p>{{testimonial.description}}</p>
  </div>
</template>

<script>

export default {
  props: ['testimonial']
}
</script>

<style>

</style>
