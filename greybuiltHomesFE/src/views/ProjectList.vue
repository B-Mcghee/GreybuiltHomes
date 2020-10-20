<template>
    <div class="root">

        <!-- <app-header></app-header> -->
        <h1>Projects</h1>
      <!-- <base-card>
        <base-button @click="setTab('stored-projects')">Projects</base-button>
        <base-button @click="setTab('add-project')">Add Project</base-button>
      </base-card> -->
      <component :is="selectedTab"></component>
        <!-- <stored-projects :projects = "allProjects"></stored-projects> -->
    </div>
</template>

<script>
import AddProject from '../components/Project/AddProject';
import StoredProjects from '../components/Project/StoredProjects';
import { mapGetters, mapActions } from 'vuex';
export default {

    data() {
        return {
            selectedTab: 'stored-projects',
            storedProjects:[]
        };
    },
    components: {
        StoredProjects,
        AddProject

    },
    methods: {
        ...mapActions(['fetchProjects']),
        setTab(tab) {
            this.selectedTab = tab;
        }
    },
    computed: {
      ...mapGetters(['allProjects']),

       },
    created() {
        this.fetchProjects();
    },
    provide()
    {
      return{
        projects: this.allProjects
      }
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

.project-root {
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
        text-align: center;
    }
    .projects {}
    // .project {
    //     background-color: gray;
    //     height: 100px;
    //     border-radius: 1.5em;
    //     padding: 10px 5px;
    // }
}
</style>
