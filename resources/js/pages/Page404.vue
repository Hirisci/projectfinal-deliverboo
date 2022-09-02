<template>
  <div class="container">
    <h1>Page not found</h1>
    <img src="../components/imgs/purple-logo.jpeg" alt="logo">
    <p>
        <router-link :to="{name: 'home'}">Torna alla Home</router-link>
    </p>
  </div>
</template>

<script>
export default {
    name:'Page404'
}
</script>

<style lang="scss" scoped>
img {
  width: 500px;
}
</style>