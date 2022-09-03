<template>
  <main>
    <router-view></router-view>
    <OAsideMenu />
  </main>
</template>

<script>
import OAsideMenu from '../organism/OAsideMenu.vue';

export default {
    name: "BaseMain",
    components: {
    OAsideMenu
}
}
</script>

<style>

</style>