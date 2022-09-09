<template>
  <header>
    <div class="row d-flex justify-content-beetween">
      <div class="col-6">
        <div class="header-logo-desktop">
          <a href="/" class="px-3">
            <img class="hide" src="../imgs/logo-white.png" alt="logo fighissimo" />
          </a>
        </div>
      </div>
      <div class="col-4d-flex justify-content-end pt-3">
        <div class="header-login-button p-3">
          <a href="/admin/home" class="btn-main btn-purple">LOGIN</a>
        </div>
      </div>
    </div>
    
  </header>
</template>

<script>
import ABasicButton from "./ABasicButton.vue";
export default {
  name: "AHeader",
  components: { ABasicButton },
};
</script>

<style lang="scss" scoped>
header {
  .row{
    width: 100%;
  }
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: var(--hgt-item-lg);
  display: flex;
  justify-content: space-between;
  align-items: center;
  z-index: 10;
  img {
    height: var(--hgt-item-lg);
    padding: var(--p-md);
  }
  .show{
    display: none;
  }
}
</style>