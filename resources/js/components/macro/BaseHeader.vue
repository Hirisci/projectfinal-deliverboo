<template>
  <header>
    <div class="header-top">
      <div class="header-top-logo">
        <img src="../imgs/logo white.png" alt="">
      </div>
      <div class="header-top-login-button">
        <ABasicButton :button-text="'Login'"/>
      </div>
    </div>
    <div class="header-bottom">
      <img src="../imgs/sushi.png" alt="">
      <img src="../imgs/hamburger.png" alt="">
      <img src="../imgs/pizza.png" alt="">
    </div>
  </header>
</template>

<script>
import ABasicButton from '../atoms/ABasicButton.vue';
export default {
    name: "BaseHeader",
    components: { ABasicButton }
}
</script>

<style lang="scss" scoped>
  header{
    background-color: var(--primary-purple);
    padding-bottom: 3.125rem;
    
    .header-top{
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1.25rem;
      .header-top-logo{
        img{
          width: 6.25rem;
        }
      }
    }
    .header-bottom{
      display: flex;
      img{
        width: 40%;
      }
    }
  }
</style>