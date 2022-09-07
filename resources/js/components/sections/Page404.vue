<template>
    <div class="container">
        <h3>Page not found</h3>
        <img src="../imgs/c404.png" alt="404">
        <div>
            <router-link :to="{ name: 'home' }">Return to Home</router-link>
        </div>
    </div>
</template>

<script>
export default {
    name:'Page404',
}
</script>

<style lang="scss" scoped>
.container {
    text-align: center;
    padding: 3.125rem;
}
img {
    width: 31.25rem;
}
</style>