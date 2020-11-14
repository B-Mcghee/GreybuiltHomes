<template>
    <div class="slider">
        <slot></slot>
        <!-- <button @click="next" class="next">Next</button>
            <button @click="prev" class="prev">Prev</button> -->
    </div>
</template>

<script>
export default {



}
</script>

<style lang="scss" scoped>
.slider {
    position: relative;
    overflow: hidden;
    .slide {
        margin: 0 auto;
    }
}



.next {
    right: 0;
}

.prev {
    left: 0;
}
</style>
