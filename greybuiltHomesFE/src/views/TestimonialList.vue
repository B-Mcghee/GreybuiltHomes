<template>
    <div class="root">

        <h1>Testimonials</h1>
        <stored-testimonials :testimonials = allTestimonials></stored-testimonials>
    </div>
</template>

<script>
import StoredTestimonials from '../components/Testimonial/StoredTestimonials';
import { mapGetters, mapActions } from 'vuex';
export default {
    name: "Testimonials",

    components: {
        StoredTestimonials,


    },
    methods: {

  ...mapActions(['fetchTestimonials']),

    },
    computed: {
        ...mapGetters(['allTestimonials']),
    },
    created() {
        this.fetchTestimonials();
    }
}
</script>

<style scoped lang="scss">
$container: #B3B6B7;
$shadowGrey: #54595f;
$background: #0C1B33;
html {
    height: 100vh;
}

.testimonial-root {
    margin-bottom: 100px;
}

// @media screen and (max-width: 500px) {
//     .testimonial-container {
//         display: grid;
//         grid-template-columns: 1fr 1fr;
//         grid-auto-rows: 140px;
//       height: 100%;
//       width: 100vw;
//       gap: 1%;
//     }
//     h1{
//       margin: 20px auto;
//       text-align: center;
//       grid-column: 1 / -1;
//       height: 50px;
//     }
//     .testimonial {
//       position: relative;
//       border: 2px solid $background;
//     }
//          img{
//         position: absolute;
//         display: block;
//         margin: auto auto;
//         z-index: -1;
//         height: 80%;
//         width: 100%;
//       }
// }
main {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(40%, 1fr));
    column-gap: 1em;
    row-gap: 1em;
    .card {
        img {
            max-height: 300px;
            max-width: 100%;
            border-radius: 1.5em;
        }
    }
}

@media screen and (max-width: 759px) {
    .root {
        margin-bottom: 100px;
        text-align: center;
    }
    .testimonials {}
    // .testimonial {
    //     background-color: gray;
    //     height: 100px;
    //     border-radius: 1.5em;
    //     padding: 10px 5px;
    // }
}
</style>
