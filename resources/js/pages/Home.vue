<template>
  <div class="home">
    <AJumbotron />
    <BaseMain />
  </div>
</template>

<script>
import BaseMain from '../components/macro/BaseMain.vue';
import AJumbotron from '../components/atoms/AJumbotron.vue';

export default {
    name: "Home",
    components: {
    BaseMain,
    AJumbotron
},
}
</script>

<style>

</style>