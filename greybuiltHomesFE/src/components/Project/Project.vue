<template>
    <div class="project-page">

        <h1> This is the id {{ $route.params.id}}</h1>
        <div >
            <div class="project-image">
                <div v-for="image in project.images">
                    <img class="project" :src="image">
                </div>
            </div>
            <!-- <div >
                <h1>{{project.title}}</h1>
                <p v-html="project.description"></p>
                <p class="price">
                    {{project.price }}
                </p>
            </div> -->
        </div>
    </div>
    <!-- <div class="project" v-if="show">
            <div class="project-image">
                <img :src="projectImage" alt="">
            </div>
            <div class="project-title">
                <h3>{{title}}</h3>
                <p>{{description}}</p>
            </div>
            <div>


            </div>
        </div> -->
</template>

<script>
export default {

    props: ['title', 'projectImage', 'show', 'description'],
    data() {
        return {
            project: ''
        }
    },
    created: function() {
        axios.get('/static/projects.json')
            .then((response) => {
                this.project = response.data.projects.filter(p => p.project_id == this.$route.params.id)[0]
                this.project.image = '/' + this.project.image;

                // this.project = response.data.projects.filter(

                //   data = data.id = this.$route.params.id)[0]
                //   this.project.image = '/' + this.project.image;

            });

    }
}
</script>

<style lang="scss" scoped>
$primary: rgba(148, 148, 148, .3);
$shadowGrey: #54595f;
$secondary: rgb(18, 39, 68);

.project-page{
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
</style>
