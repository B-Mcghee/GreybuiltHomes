<template>

    <div class="bio-container">
        <router-link
        v-for="bio in bios" :key="bio.Bio_Id" tag="div"
        :to="{name: 'SingleBio', params: {id:bio.Bio_Id}}"
        class="bio-individual">
            <base-card>
                <img :src="bio.Image" alt="">
                <h1>{{bio.FirstName}} {{bio.LastName}}</h1>
                <h3>{{bio.Position}}</h3>
                <p>{{bio.Description}}</p>
            </base-card>
        </router-link>
        <!-- <Bio :bio = bio /> -->
    </div>


</template>

<script>
import Bio from './Bio'
export default {
    props: ['bios'],
    components: {
        Bio
    }
}
</script>

<style lang="scss" scoped>
img {
    margin: 2em auto .5em auto;
    border-radius: 1em;
    max-width: 300px;
    max-height: 200px;
    background-position: center;
    /* Center the image */
    background-repeat: no-repeat;
    background-size: cover;
}
@media screen and (max-width: 1024px) {

}

@media screen and (max-width: 759px) {

        .bio-container {
            margin: 0 5% 0 15%;

        }


}

@media screen and (max-width: 500px) {
    .bio-container {
        margin: 0 auto;

    }
}
</style>
