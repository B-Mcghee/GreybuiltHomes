<template>
    <div class="project-page">
        <!-- <div class="project-individual">
            <base-card>
                <h1>{{project.title}}</h1>
            </base-card> -->
            <slider
            @next="next"
            @prev="prev">
              <slide
              v-for="(image,index) in project.images"
              :key="index"
              :index="index"
              :currentSlide = "currentSlide">
              <img :src="image" alt="">
              </slide>
            </slider>


            <!-- <div class="project-flex">

                <div class="project-images" v-for="(image, index) in project.images" :key="index">
                    <base-card class="individual-image">
                        <img :src="image" alt="">
                    </base-card>
                </div>
            </div> -->
        <!-- </div> -->
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
            currentSlide:0
        }
    },
    components:{
      Slider,
      Slide
    },
    computed:{
      slideLength() {
        return this.project.images.length;
      }
    },
    methods:{
      next(){
        if(this.currentSlide >= this.slideLength - 1 )
        {
          this.currentSlide = 0;
        }else{
          this.currentSlide++;
        }
      },
      prev(){
        if(this.currentSlide <= 0)
        {
          this.currentSlide >= this.slideLength - 1;
        }else{
          this.currentSlide--;
        }
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
}

.project {
    display: flex;
    flex-direction: row;
}

.project-image {
    flex-grow: 1;
    max-height: 125px;
    img {
        display: block;
        max-height: 100%;
        min-height: 90px;
        max-width: 120px;
    }
}

.project-title {
    display: block;
    flex-grow: 8;
    text-align: left;
    background-color: $primary;
    h3 {
        margin-left: 2%;
        font-size: 1em;
    }
    p {
        margin-block-start: 0em;
        margin-block-end: 0em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        margin-left: 2%;
        font-size: .5em;
    }
}

@media screen and (max-width: 500px){
  .project-images{
    display: flex;
    flex-direction: row;
    margin: 0 auto;

    img{

      max-width: 100%;
    }

  }
}
</style>
