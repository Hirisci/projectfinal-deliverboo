<template>
  <main>
    <div class="col-3 home-left py-3">
      <OAsideMenu />
    </div>
    <div class="col-9 home-right">
      
    </div>
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