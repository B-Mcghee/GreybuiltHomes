<template>
    <div>

        <div class="projects" v-for="project in projects" :key="project.project_id">
            <base-card>
                <project :projectImage="project.image" :title="project.title" :show="project.showProject">

                </project>

            </base-card>
        </div>
    </div>
</template>

<script>
import Project from './Project'
export default {

    inject: ['projects'],
    components:{
      Project
    }
}
</script>

<style>

</style>
