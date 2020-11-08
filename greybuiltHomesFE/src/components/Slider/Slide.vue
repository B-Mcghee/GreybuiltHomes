<template>
    <transition name="left">
        <div v-show="currentSlide === index" class="slide">
            <slot></slot>
        </div>
    </transition>
</template>

<script>
export default {
    props: ['currentSlide', 'index']
}
</script>

<style lang="scss" scoped>
  .left-enter-active{
    animation: leftInAnimation 0.4s ease-in-out;
  }
  .left-leave-active{
    animation: leftOutAnimation 0.4s ease-in-out;

  }

  @keyframes leftInAnimation {
    from {
      transform: translateX(100%);
    }
    to{
      transform: translateX(0);
    }
  }

  @keyframes leftOutAnimation {
    from {
      transform: translateX(0);
    }
    to{
      transform: translateX(-100%);
    }
  }
</style>
