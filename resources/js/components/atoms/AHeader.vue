<template>
    <header>
        <div class="header-logo">
        <a href="">
            <img src="../imgs/logo-white.png" alt="">
        </a>
      </div>
      <div class="header-login-button">
        <a href="/admin/home" class="btn-main">LOGIN</a>
      </div>
    </header>
</template>

<script>
import ABasicButton from './ABasicButton.vue';
export default {
    name: "AHeader",
    components: { ABasicButton }
}
</script>

<style lang="scss" scoped>
header{
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: var(--hgt-item-lg);
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 999;
    img{
        height: var(--hgt-item-lg);
        padding: var(--p-md);
    }
    
}
</style>