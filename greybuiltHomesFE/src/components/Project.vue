<template>
    <div>
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
@media screen and (max-width: 500px) {
    .project-container {
        position: relative;
        height: 80%;
        max-width: 100vw;
        overflow: scroll;
        overflow-x: auto;
        top: 15%;
        img {
            border-radius: 12px;
            height: 200px;
            width: 250px;
        }
    }
    .project {}
}
</style>
