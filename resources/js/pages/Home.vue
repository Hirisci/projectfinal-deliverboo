<template>
  <div class="home">
    <AJumbotron />
    <BaseMain />
    <ProcessSection class="mb-3" />
  </div>
</template>

<script>
import BaseMain from '../components/macro/BaseMain.vue';
import AJumbotron from '../components/atoms/AJumbotron.vue';
import ProcessSection from "../components/sections/ProcessSection.vue"

export default {
    name: "Home",
    components: {
    BaseMain,
    AJumbotron,
    ProcessSection,
},
}
</script>

<style>

</style>