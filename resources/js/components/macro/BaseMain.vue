<template>
  <main>
    <router-view></router-view>
    <AAsideMenuTitle :title="'Test'"/>
  </main>
</template>

<script>
import AAsideMenuTitle from '../atoms/AAsideMenuTitle.vue';

export default {
    name: "BaseMain",
    components: {
    AAsideMenuTitle
}
}
</script>

<style>

</style>