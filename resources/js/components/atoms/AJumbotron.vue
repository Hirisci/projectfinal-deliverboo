<template>
  <div class="jumbotron">
      <img class="sushi" src="../imgs/sushi.png" alt="">
      <img class="hamburger" src="../imgs/hamburger.png" alt="">
      <img class="pizza" src="../imgs/pizza.png" alt="">
  </div>
</template>

<script>
export default {
    name: "AJumbotron"
}
</script>

<style lang="scss" scoped>
.jumbotron{
    background: radial-gradient(circle, rgba(255,255,255,1) 0%, rgba(150,103,224,1) 50%);
    height: 25rem;
    overflow: hidden;
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
    img{
        position: relative;
        width: 20rem;
    }
}
</style>