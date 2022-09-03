<template>
  <div class="app">
    <BaseHeader/>
    <router-view />
    <BaseFooter/>
  </div>
</template>

<script>
import BaseHeader from '../components/macro/BaseHeader.vue';
import BaseMain from '../components/macro/BaseMain.vue';
import BaseFooter from '../components/macro/BaseFooter.vue';

export default {
    name: "App",
    components: { 
      BaseHeader, 
      BaseMain, 
      BaseFooter 
    },
}
</script>

<style lang="scss">
@import "../../sass/app";

.app{
  width: 100vw;
  overflow: hidden;
}

</style>