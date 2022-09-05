<template>
  <div class="home">
    <BaseMain />
      <router-link :to="{ name: 'checkout'}"> Test pagina di checkout</router-link>
  </div>
</template>

<script>
import BaseMain from '../components/macro/BaseMain.vue';

export default {
    name: "Home",
    components: {
    BaseMain
},
}
</script>

<style>

</style>