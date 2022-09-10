<template>
  <div class="GoBackButton d-flex justify-content-center align-items-center">
    <a href="/" class="d-none d-lg-block btn-main btn-purple mt-3">Torna alla home</a>
    <a href="/" class="d-lg-none btn-main btn-purple mt-3 mobile"> <img src="../imgs/home-icon.png" alt="Home" class="HomeIcon"> </a>
  </div>
</template>

<script>
export default {
    name: "AGoBackButton"
}
</script>

<style lang="scss" scoped>
.GoBackButton{
    .mobile{
        border-radius: 50%;
        max-width: 50px;
        max-height: 50px;
        img{
            object-fit: contain;
            max-width: 20px;
            filter: invert(100%);
        }
    }
}
</style>