<template>
  <div class="app">
    <AHeader />
    <router-view class="main" />
    <BaseFooter />
  </div>
</template>

<script>
import BaseFooter from "../components/macro/BaseFooter.vue";
import AHeader from "../components/atoms/AHeader.vue";

export default {
  name: "App",
  components: {
    BaseFooter,
    AHeader,
  },
};
</script>

<style lang="scss">
@import "../../sass/app";

.app {
  width: 100%;

  overflow: hidden;
  .main {
    min-height: 74vh;
  }
}
</style>