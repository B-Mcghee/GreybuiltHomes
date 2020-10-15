<template>
  <div class="project" :class="{project__active: project.active, project__selected: selected}" >

    <project-front :project ="project"
    @click.native = "toggleCard({ project })"
    />
  </div>
</template>

<script>
export default {

  }

</script>

<style>

</style>
