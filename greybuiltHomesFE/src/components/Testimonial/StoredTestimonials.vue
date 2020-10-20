<template>
  <div>
            <div class="testimonials" v-for="testimonial in testimonials" :key="testimonial.testimonial_id">
            <base-card>
                <testimonial :testimonial = testimonial>

                </testimonial>

            </base-card>
        </div>
  </div>
</template>

<script>
export default {

}
</script>

<style>

</style>
