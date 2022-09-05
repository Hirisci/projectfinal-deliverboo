<template>
  <header>
    <div class="header-top">
      <div class="header-top-logo">
        <img src="../imgs/logo-white.png" alt="">
      </div>
      <div class="header-top-login-button">
        <a href="/admin/home"><ABasicButton :button-text="'Login'"/></a>
      </div>
    </div>
    <div class="header-bottom">
      <div class="header-bottom-left">
        <img src="../imgs/sushi.png" alt="">
      </div>
      <div class="header-bottom-center">
        <img src="../imgs/hamburger.png" alt="">
      </div>
      <div class="header-bottom-right">
        <img src="../imgs/pizza.png" alt="">
      </div>
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
    height: 20vh;
    
    .header-top{
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 2vh;
      .header-top-logo{
        img{
          width: 128px;
        }
      }
    }
    .header-bottom{
      display: flex;
      justify-content: space-between;
      .header-bottom-center, .header-bottom-right{
        transform: translateX(50%);
      }
      img{
        height: 10vh;
      }
    }
    a {
      text-decoration: none;
    }
  }
</style>