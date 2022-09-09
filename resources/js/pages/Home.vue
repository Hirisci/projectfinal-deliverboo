<template>
  <div class="home">
    <AJumbotron />
    <BaseMain />
    <ProcessSection class="mb-3" />
    <WorkWithUsSection class="" />
  </div>
</template>

<script>
import BaseMain from '../components/macro/BaseMain.vue';
import AJumbotron from '../components/atoms/AJumbotron.vue';
import ProcessSection from "../components/sections/ProcessSection.vue"
import WorkWithUsSection from "../components/sections/WorkWithUsSection.vue"

export default {
    name: "Home",
    components: {
    BaseMain,
    AJumbotron,
    ProcessSection,
    WorkWithUsSection
},
}
</script>

<style>

</style>
