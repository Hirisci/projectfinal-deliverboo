<template>
  <div class="app">
    <AHeader />
    <router-view />
    <BaseFooter/>
  </div>
</template>

<script>
import BaseMain from '../components/macro/BaseMain.vue';
import BaseFooter from '../components/macro/BaseFooter.vue';
import AHeader from '../components/atoms/AHeader.vue';

export default {
    name: "App",
    components: { 
      BaseMain, 
      BaseFooter,
      AHeader
    },
}
</script>

<style lang="scss">
@import "../../sass/app";

.app{
  width: 100%;
  overflow: hidden;
}
</style>