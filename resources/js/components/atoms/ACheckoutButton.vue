<template>
  <div class="d-flex justify-content-center align-items-center mt-3">
    <a href="/checkout" class="d-none d-lg-block btn-main btn-purple">Checkout</a>
    <a href="/checkout" class="d-lg-none btn-main btn-purple checkout-button d-flex justify-content-center align-items-center"><img src="../imgs/checkout-icon.png" alt="Checkout"></a>
  </div>
</template>

<script>
export default {
    name: "ACheckoutButton"
}
</script>

<style lang="scss" scoped>
.checkout-button{
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    img{
      width: 100%;
    }
  }
</style>