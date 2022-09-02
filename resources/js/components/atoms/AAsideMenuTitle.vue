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

<style>
</style>