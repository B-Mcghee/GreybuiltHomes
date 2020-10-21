<template>
  <div>
    <h1>{{testimonial.Name}}</h1><span>{{testimonial.Rating}}</span>
    <p>{{testimonial.Description}}</p>
  </div>
</template>

<script>

export default {
  props: ['testimonial']
}
</script>

<style>

</style>
