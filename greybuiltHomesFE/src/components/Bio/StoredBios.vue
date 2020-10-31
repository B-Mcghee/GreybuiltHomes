<template>
    <div>
        <div  class="bios-container" >
            <div class="bio-control" v-for="bio in bios" :key="bio.BioId">
                <Bio :bio = bio />
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
