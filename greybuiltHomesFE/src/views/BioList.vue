<template>
    <div class="root">
      <h1>Meet The Team</h1>
    <div v-for="bio in allBios" :key="bio.BioId">
      <Bio :bio = bio />
    </div>
  </div>
</template>

<script>
import Bio from '../components/Bio/Bio'
import { mapGetters, mapActions } from 'vuex';

export default {
  components:{
    Bio
  },
  methods: {
    ...mapActions(['fetchBios'])
  },
  computed: {
    ...mapGetters(['allBios'])
  },
  created(){
    this.fetchBios();
  }
}
</script>

<style scoped>
  .root{
    text-align: center;
  }
</style>
