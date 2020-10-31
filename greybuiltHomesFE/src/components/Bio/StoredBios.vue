<template>
    <div>
        <div class="bios-container">
            <div class="bio-control" v-for="bio in bios" :key="bio.BioId">
                <div class="bio-individual">
                    <base-card>
                        <img :src="bio.Image" alt="">
                        <h1>{{bio.FirstName}} {{bio.LastName}}</h1>
                        <h3>{{bio.Position}}</h3>
                        <p>{{bio.Description}}</p>
                    </base-card>
                </div>
                <!-- <Bio :bio = bio /> -->
            </div>

        </div>
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

<style>

</style>
