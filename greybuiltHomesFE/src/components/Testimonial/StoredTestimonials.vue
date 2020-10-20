<template>
  <div>
            <div class="testimonials" v-for="testimonial in testimonials" :key="testimonial.testimonial_id">
            <base-card>
                <testimonial :testimonial = "testimonial">

                </testimonial>

            </base-card>
        </div>
  </div>
</template>

<script>
import Testimonial from './Testimonial'

export default {
props:['testimonials'],
components:{
  Testimonial
}
}
</script>

<style>

</style>
