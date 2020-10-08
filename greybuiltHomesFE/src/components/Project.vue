<template>
    <div class="project-root">

        <app-header></app-header>
        <h1>Projects</h1>
        <div class="project-container">

            <div class="project" v-for="project in projects" v-if="project.showProject">
                <img :src="project.images" alt="">
            </div>

        </div>
        <app-mobile></app-mobile>
    </div>
</template>

<script>
import Header from './Header'
import MobileMenu from './MobileMenu'
export default {
    components: {
        'app-header': Header,
        'app-mobile': MobileMenu
    },
    data() {
        return {
            projects: {},

        }
    },
    computed: {
        sortedProjects() {
            if (this.projects.length > 0) {

            };;
        }
    }


    ,
    created: function() {
        axios.get('/static/projects.json').then(response => {
            this.projects = response.data.projects;
            console.log(this.projects);
        });
    }
}
</script>

<style scoped lang="scss">
$container: #B3B6B7;
$shadowGrey: #54595f;
$background: #0C1B33;
.project-root{

  height: 100vh;
}
@media screen and (max-width: 500px) {
    .project-container {

        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-auto-rows: 140px;
      height: 100%;
      width: 100vw;
      gap: 1%;
    }
    h1{
      margin: 20px auto;
      text-align: center;
      grid-column: 1 / -1;
      height: 50px;
    }
    .project {
      position: relative;
      border: 2px solid $background;


    }
         img{
        position: absolute;
        display: block;
        margin: auto auto;
      z-index: -1;
        height: 80%;
        width: 100%;


      }

}
</style>
