<template>
  <header>
    <div class="header-top">
      <div class="header-top-logo">
        <img src="../imgs/logo-white.png" alt="">
      </div>
      <div class="header-top-login-button">
        <router-link class="spacing" to="/login"><ABasicButton :button-text="'Login'"/></router-link>
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
    background: radial-gradient(circle, rgba(255,255,255,1) 0%, rgba(150,103,224,1) 50%);
    padding-bottom: 3.125rem;
    
    .header-top{
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1.25rem;
      .header-top-logo{
        img{
          width: 8rem;
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