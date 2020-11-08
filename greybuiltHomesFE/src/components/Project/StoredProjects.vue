<template>
    <div class="project-container">
        <!-- <router-link v-for="project in projects" :key="project.project_id" class="project" tag="div" :to="{name: 'Singleproject', params: {id:project.project_id}}">
            <base-card>
                <div class="project-pic">
                    <img :src="project.cover_image" alt="">
                </div>
                <div class="project-info">
                    <h1>{{project.title}}</h1>
                    <p>{{project.description}}</p>
                </div>
            </base-card>
        </router-link> -->
                <router-link v-for="project in projects" :key="project.project_id" class="project" tag="div" :to="{name: 'SingleProject', params: {id:project.project_id}}">
            <base-card>
                <div class="project-pic">
                    <img :src="project.cover_image" alt="">
                </div>
                <div class="project-info">
                    <h1>{{project.title}}</h1>
                    <p>{{project.description}}</p>
                </div>
            </base-card>
        </router-link>
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

<style lang="scss" scoped>


img {
    margin: 0;
    max-width: 500px;
    background-position: center;
    /* Center the image */
    background-repeat: no-repeat;
    background-size: cover;
}

.project {
    margin: 5% auto;

    .slot-container {
        display: flex;
        flex-direction: row;
        max-width: 60rem;
        margin: 0 10% 0 15%;
    }
    h3 {
        margin: 10% 5%;
    }
    p {
        margin: 2% 5%;
    }
}

@media screen and (max-width: 1024px) {
    img {
        max-width: 100%;
    }
    .project-container {
        .project {
            margin: 5% auto;
        }
        .slot-container {
            display: block;
            margin: 0 20% 0 20%;
            max-width: 40rem;
        }
    }
}

@media screen and (max-width: 759px) {
    .project-container {
        .project {
            margin: 5% auto;
        }
        .slot-container {
            margin: 0 5% 0 15%;
            max-width: 40rem;
        }
    }
}

@media screen and (max-width: 500px) {
    .project-container {
        .project {
            margin: 5% 1em;
        }
        .slot-container {
            margin: 0 auto;
            max-width: 30rem;
        }
    }
}
</style>
