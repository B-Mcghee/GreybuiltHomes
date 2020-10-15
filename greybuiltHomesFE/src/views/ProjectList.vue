<template>
    <div class="root">

        <!-- <app-header></app-header> -->
        <h1>Projects</h1>
        <div class="projects">
          <div class="project" v-for="project in allProjects" :key="project.id">
            {{project.title}}
          </div>
        </div>
        <!-- <main>
          <div class="card" v-for="project in projects" v-if="project.showProject">
            <div class="info" >
              <strong>Title</strong>
            </div>
            <img :src="project.images">

          </div>
        </main> -->
        <!-- <div class="project-container">

          <div class="project" v-for="project in projects" v-if="project.showProject">
                <img :src="project.images" alt="">
            </div>

        </div> -->
    </div>
</template>

<script>
// import Header from './Header'
// import MobileMenu from './MobileMenu'
import Project from '../components/Project.vue';
import { mapGetters } from 'vuex';
export default {

    data() {
        return {
            projects: {},

        }
    },
    components: {
      Project
    },
    computed: mapGetters(['allProjects'])
        // sortedProjects() {
        //     if (this.projects.length > 0) {

        //     };;
        // }


    ,
    created: function() {
        // axios.get('/static/projects.json').then(response => {
        //     this.projects = response.data.projects;
        //     console.log(this.projects);
        // });
    }
}
</script>

<style scoped lang="scss">
$container: #B3B6B7;
$shadowGrey: #54595f;
$background: #0C1B33;
html{

  height: 100vh;
}
.project-root{
  margin-bottom: 100px;
}
// @media screen and (max-width: 500px) {
//     .project-container {

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
//     .project {
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
main{
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(40%, 1fr));
  column-gap: 1em;
  row-gap: 1em;

  .card{
    img{
      max-height: 300px;
      max-width: 100%;
      border-radius: 1.5em;

    }
  }
  }

@media screen and (max-width: 759px){
  .root{
    text-align: center;

  }
  .project-list{
    margin:30px;
    height: 496px;
    transform:scaleX(1);
    transition: all 0.6s ease;

    ul{
      display: flex;
      height: 100%;
    }
    li{
      flex: 1;
      transition: all 0.6s ease;
    }
  }

  .project-list_selected{
    transform: scaleX(1.1);
  }
}
</style>
