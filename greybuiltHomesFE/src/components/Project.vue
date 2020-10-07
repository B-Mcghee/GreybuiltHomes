<template>
  <div>
    <app-header></app-header>
    <h1>Projects</h1>
    <div class="project-container">
      <div class="project" v-for="project in sortedProjects">
        <img  :src="project.images" alt="">
      </div>
    </div>
  </div>
</template>

<script>
import Header from './Header'
export default {
  components: {'app-header': Header},
  data(){
    return{
      projects: {},

    }
  },
 computed: {
   sortedProjects(){
     if(this.projects.length > 0){
       this.projects.forEach(p => {
         if(!p.showProject)
         {
           let pos = this.projects.indexOf(p);
           this.projects.splice(pos,1);
         }
         return this.projects;
       });;
     }
   }
 }

  , created: function() {
    axios.get('/static/projects.json').then(response => {
      this.projects= response.data.projects;
      console.log(this.projects);
    });
  }
}
</script>

<style scoped lang="scss">
$container: #B3B6B7;
$shadowGrey: #54595f;
$background: #0C1B33;

@media screen and (max-width: 500px)
{
  .project-container{
    display: grid;
    grid-template-columns: auto auto;
    grid-template-rows: 25% 25%;
    height: 100vh;
    max-width: 100vw;
    background-color: $container;

      .project {



        img{

          height:auto;
          max-width: 50vw;
        }

    }
  }

}
</style>
