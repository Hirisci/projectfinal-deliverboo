<template>
  <div class="section-title">
    <div class="section-title-container">
      <h6>{{title}}</h6>
    </div>
  </div>
</template>

<script>
export default {
  name: 'AAsideMenuTitle',
  props: {
    title: String,
  }
}
</script>

<style lang="scss" scoped>
.section-title{
  padding: 4px;
  padding-left: 16px;
  overflow: hidden;
  position: relative;
  color: var(--tertiary-purple);
  &-container{
    max-width: 80%;
    h6{
      position: relative;
    }
  }
  &::before{
    content: "";
    display: block;
    position: absolute;
    top: 0;
    left: -25px;
    width: 100%;
    height: 100%;
    transform: skewX(45deg);
    background-color: var(--primary-purple);
  }
}
</style>