<template>
  <div class="aside-menu-title-container section-title-container">
    <div class="section-title px-3"><h6>{{title}}</h6></div>
    <div class="triangle-element"></div>
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
.section-title-container{
  display: flex;
  .section-title{
    background-color: var(--primary-purple);
    color: white;
    padding: 5px;
    width: 85%;
    z-index: 1;
    h6{
      text-transform: uppercase;
    }
  }
  .triangle-element{
    width: 70px;
    background-color: var(--primary-purple);
    transform: skewX(45deg);
    margin-left: -40px;
  }
}
</style>