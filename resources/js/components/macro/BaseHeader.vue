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
      <img class="sushi" src="../imgs/sushi.png" alt="">
      <img class="hamburger" src="../imgs/hamburger.png" alt="">
      <img class="pizza" src="../imgs/pizza.png" alt="">
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
    height: 25rem;
    overflow: hidden;
    .header-top{
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px;
      .header-top-logo{
        img{
          width: 128px;
        }
      }
    }
    .header-bottom{
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: relative;
      .hamburger{
        top: 0;
        transform: translateY(-50%);
      }
      .pizza{
        transform: translateX(50%);
      }
    }
    img{
      position: relative;
      width: 20rem;
    }
    a {
      text-decoration: none;
    }
  }
</style>