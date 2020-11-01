<template>
    <div class="bio-individual">
        <h1>{{bio.FirstName}} {{bio.LastName}}</h1>
        <div>
            <img :src="bio.Image" alt="">

            <h3>{{bio.Position}}</h3>
            <p>{{bio.Description}}</p>
        </div>
    </div>
</template>

<script>
export default {

    data() {
        return {
            bio: '',
            image: ''
        }
    },
    created: function() {
        axios.get('/static/bios.json')
            .then((response) => {
                this.bio = response.data.bios.filter(b => b.Bio_Id == this.$route.params.id)[0]
                this.image = '/' + this.bio.Image;
            });
    }
}
// created: function() {
//     axios.get('http://127.0.0.1:8001/projects')
//         .then((response) => {
//             console.log(response.data[0]);
//             // this.project = response.data.projects.filter(p => p.project_id == this.$route.params.id)[0]
//            this.image = "/" +response.data[0].file_path + response.data[0].file_name + response.data[0].extension
//             // this.project = response.data.projects.filter(

//             //   data = data.id = this.$route.params.id)[0]
//             //   this.project.image = '/' + this.project.image;

//         });
</script>

<style lang="scss" scoped>
// .bio-individual{
//   margin-left: 60px;
//   text-align: center;
// }
img {
    margin: 2em auto .5em auto;
    width: 100%;
    background-position: center;
    /* Center the image */
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
