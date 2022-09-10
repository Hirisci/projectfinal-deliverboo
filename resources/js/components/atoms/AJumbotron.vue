<template>
  <div class="jumbotron">
    <div class="row">
      <div class="img-box">
        <img
          class="sushi"
          src="../imgs/sushi.png"
          alt="immagine sushi del jumbotron"
        />
      </div>
      <div class="img-box">
        <img
          class="hamburger"
          src="../imgs/hamburger.png"
          alt="immagine hamburger del jumbotron"
        />
      </div>
      <div class="img-box">
        <img
          class="pizza"
          src="../imgs/pizza.png"
          alt="immagine pizza del jumbotron"
        />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "AJumbotron",
};
</script>

<style lang="scss" scoped>
.jumbotron {
  background: radial-gradient(
    circle,
    rgba(255, 255, 255, 1) 0%,
    rgba(150, 103, 224, 1) 50%
  );
  height: 35rem;
  width: 100%;
  overflow: hidden;
  .row {
    position: relative;
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 100%;
  }
  .img-box {
    display: grid;
    place-items: center;
  }

  .sushi {
    width: 350px;
    aspect-ratio: 3/2;
  }
  .hamburger {
    width: 350px;
    aspect-ratio: 4/3;
    //transform: translate(-40%, 15%) rotate(30deg) scale(0.9);
  }
  .pizza {
    width: 350px;
    aspect-ratio: 2/1;
    transform: translate(50%, 25%) rotate(-15deg) scale(2.2);
  }

  @media screen and (min-width: 768px) {
    // .sushi {
    //   transform: rotate(30deg) scale(1.7) translate(12%, 29%);
    // }
    // .hamburger {
    //   transform: rotate(30deg) scale(1) translate(-65%, 75%);
    // }
    // .pizza {
    //   transform: rotate(-30deg) scale(2.9) translate(0%, 25%);
    // }
  }
  @media screen and (min-width: 1024px) {
    // .sushi {
    //   display: block;
    //   transform: rotate(30deg) scale(1.7) translate(12%, 29%);
    // }
    // .hamburger {
    //   transform: rotate(30deg) scale(1) translate(0%, 0%);
    // }
    // .pizza {
    //   transform: rotate(-15deg) scale(2.9) translate(50%, 25%);
    // }
  }
}
</style>