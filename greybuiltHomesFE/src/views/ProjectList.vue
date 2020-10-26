<template>
    <div class="root">

        <h1>Projects</h1>
        <stored-projects :projects = allProjects></stored-projects>
    </div>
</template>

<script>
import AddProject from '../components/Project/AddProject';
import StoredProjects from '../components/Project/StoredProjects';
import { mapGetters, mapActions } from 'vuex';
export default {
    name: "Projects",

    components: {
        StoredProjects,
        AddProject

    },
    methods: {

  ...mapActions(['fetchProjects']),

    },
    computed: {
        ...mapGetters(['allProjects']),
    },
    created() {
        this.fetchProjects();
    }
}
</script>

<style scoped lang="scss">
$primary: rgb(148,148,148);
$shadowGrey: #54595f;
$secondary: rgb(18,39,68);
html {
    height: 100vh;
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
//       border: 2px solid $secondary;
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

}
</style>
