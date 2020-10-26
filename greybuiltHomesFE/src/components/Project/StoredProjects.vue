<template>
    <div>

        <div class="projects" v-for="project in projects" :key="project.project_id">
            <div class="project-item">
                <div class="project" v-if="project.showProject">
                    <div class="project-image">
                        <img :src="project.image" alt="">
                    </div>
                    <div class="project-title">
                        <router-link tag="h3" :to="{name: 'Id', params: {id: project.project_id}}">{{project.title}}</router-link>
                        <p>{{project.description}}</p>
                    </div>
                    <div>
                        <!-- <project
                        :projectImage="project.image"
                        :title="project.title"
                        :show="project.showProject"
                        :description="project.description">

                        </project> -->
                    </div>
                </div>


            </div>
        </div>
    </div>
</template>

<script>
import Project from './Project'
export default {

    props: ['projects'],
    components: {
        Project
    }
}
</script>

<style lang="scss">
div {
    box-sizing: border-box;
}

.project-item {
    margin: 2.5% auto;
    max-width: 96%;
    border: 1px solid rgba(148, 148, 148, 0.5);
}
$primary: rgba(148,148,148, .3);
$shadowGrey: #54595f;
$secondary: rgb(18,39,68);
.project {

    display: flex;
    flex-direction: row;

}

.project-image {
    flex-grow: 1;
    max-height: 125px;
    img {
      display:block;
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

  h3{
    margin-left: 2%;
    font-size: 1em;
  }
  p{

    margin-block-start: 0em;
    margin-block-end: 0em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
      margin-left: 2%;
      font-size: .5em;
  }
}
</style>
