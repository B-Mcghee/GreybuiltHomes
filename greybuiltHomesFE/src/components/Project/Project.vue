<template>
    <div class="project-page">
        <div class="exit-icon">
            <router-link tag="button" :to="'/projects'" @click.native="exit" mode="flat">Exit</router-link>
        </div>
        <h1 class="project-title">{{project.title}}</h1>
        <slider :direction="direction">
            <slide v-for="(image,index) in project.images" :key="index" :index="index" :currentSlide="currentSlide" :direction="direction">
                <img :src="image" alt="">
            </slide>
        </slider>
        <div class="selection-buttons">
            <base-button @click.native="prev" mode="flat">Prev</base-button>
            <base-button @click.native="next" mode="flat">Next</base-button>
        </div>
        <router-link tag="div" :to="'/projects'" @click="exit" class="overlay"></router-link>
        <!-- <router-link  class="overlay"></router-link> -->
    </div>
</template>

<script>
import Slider from '../Slider/Slider.vue';
import Slide from '../Slider/Slide.vue';

export default {

    props: ['title', 'projectImage', 'show', 'description'],
    data() {
        return {
            project: '',
            image: '',
            currentSlide: 0,
            direction: ''

        }
    },
    components: {
        Slider,
        Slide
    },
    computed: {
        slideLength() {
            return this.project.images.length;
        }
    },
    methods: {
        next() {
            if (this.currentSlide >= this.slideLength - 1) {
                this.currentSlide = 0;
            } else {
                this.currentSlide++;
            }
            this.direction = 'left'
        },
        prev() {
            if (this.currentSlide <= 0) {
                this.currentSlide = this.slideLength - 1;
            } else {
                this.currentSlide--;
            }
            this.direction = 'right'

        },
        exit() {

        }
    },

    created: function() {
        axios.get('/static/projects.json')
            .then((response) => {
                this.project = response.data.projects.filter(p => p.project_id == this.$route.params.id)[0]
                // this.project.image = '/' + this.project.cover_image;
                console.log(this.project);
                // created: function() {
                //     axios.get('/static/projects.json')
                //         .then((response) => {
                //             console.log(response.data[0]);
                //             // this.project = response.data.projects.filter(p => p.project_id == this.$route.params.id)[0]
                //            this.image = "/" +response.data[0].file_path + response.data[0].file_name + response.data[0].extension
                //             // this.project = response.data.projects.filter(

                //             //   data = data.id = this.$route.params.id)[0]
                //             //   this.project.image = '/' + this.project.image;

                //         });
            });
    }
}
</script>

<style lang="scss" scoped>
$primary: rgba(148, 148, 148, .3);
$shadowGrey: #54595f;
$secondary: rgb(18, 39, 68);
.project-page {
    height: 100vh;
    display: grid;
    grid-template-columns: 100%;
    grid-template-rows: 1fr 50% 1fr;
    .exit-icon,
    .selection-buttons,
    .slide,
    .slider,
    .project-title {
        z-index: 3;
    }
}

.project-title {
    text-align: center;
    color: #fff;
    font-size: 40px;
}

.overlay {
    z-index: 2;
    top: 0;
    left: 0;
    right: 0;
    left: 0;
    position: absolute;
    height: 1000px;
    background-color: rgba(0, 0, 0, .9);
}
    .exit-icon {
        position: absolute;
        margin-top: 5%;
        right: 5%;
    }
    .project-page {
        grid-template-rows: 10% 70% 1fr;


    }
    img {

        max-width: 65%;
        border-radius: 1em;
    }
        .selection-buttons {
        margin: 2% auto;
    }
.slider{
  margin: 0% 10% 0% 10%;
}


@media screen and (max-width:1024px) {
    .exit-icon {
        position: absolute;
        margin-top: 5%;
        right: 5%;
    }
    .project-page {
        grid-template-rows: 10% 70% 1fr;
        .slider {
          margin: 0% 5% 0% 20%;

        }
    }

    img {

        max-width: 85%;
        border-radius: 1em;
    }
}

@media screen and (max-width:759px) {
    .project-page {
        grid-template-rows: 15% 60% 1fr;

    }
    img {

        max-width: 90%;
    }
  .selection-buttons{
    padding-left: 5%;
  }
}

@media screen and (max-width: 500px) {
    .project-title {
        margin-top: 15%;
    }
    .project-page {
        grid-template-columns: 100%;
        grid-template-rows: 8% 60% 1fr;
        .slider {
            margin: 20% 5% 0% 5%;
        }
    }
    img {
        max-width: 100%;
    }
}
</style>
