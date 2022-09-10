<template>
  <div class="jumbotron">
    <div class="row">
      <div class="col-md-4 col-sm-0 pt-4">
        <img
          class="sushi"
          src="../imgs/sushi.png"
          alt="immagine sushi del jumbotron"
        />
      </div>
      <div class="col d-flex justify-content-center">
        <img
          class="hamburger"
          src="../imgs/hamburger.png"
          alt="immagine hamburger del jumbotron"
        />
      </div>
      <div class="col d-flex align-items-center">
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
  overflow: hidden;
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: relative;
  .hamburger {
    transform: translateY(-30%);
  }
  .pizza {
    transform: translateX(20%);
    width: 100%;
  }
  .hamburger,
  .sushi {
    width: 80%;
  }
  img {
    position: relative;
  }

  @media screen and (max-width: 576px) {
    .sushi {
      display: none;
    }
    .hamburger {
      transform: rotate(30deg) scale(1.5) translate(-30%, 0);
    }
    .pizza {
      transform: rotate(-30deg) scale(2.7) translate(-20%, 70%);
    }
  }

  @media screen and (max-width: 768px) {
    .sushi {
      display: none;
    }
    .hamburger {
      transform: rotate(30deg) scale(1.2) translate(-30%, 0);
    }
    .pizza {
      transform: rotate(-30deg) scale(2.5) translate(20%, 40%);
    }
  }
  @media screen and (max-width: 992px) {
    .sushi {
      transform: rotate(30deg) scale(1.7) translate(12%, 29%);
    }
    .hamburger {
      transform: rotate(30deg) scale(1.2) translate(-25%, -20%);
    }
    .pizza {
      transform: rotate(-30deg) scale(2.9) translate(0%, 25%);
    }
  }
  @media screen and (max-width: 1400px) {
    .sushi {
      transform: rotate(30deg) scale(1.7) translate(12%, 29%);
    }
    .hamburger {
      transform: rotate(30deg) scale(1.2) translate(-25%, -20%);
    }
    .pizza {
      transform: rotate(-30deg) scale(2.9) translate(0%, 25%);
    }
  }
  @media screen and (max-width: 2400px) {
    .sushi {
      transform: rotate(30deg) scale(1.2) translate(2%, 7%);
    }
    .hamburger {
      transform: rotate(30deg) scale(0.8) translate(-12%, -14%);
    }
    .pizza {
      transform: rotate(-30deg) scale(1.9) translate(0%, 25%);
    }
  }
  @media screen and (max-width: 6000px) {
    .sushi {
      transform: rotate(30deg) scale(1.2) translate(2%, 7%);
    }
    .hamburger {
      transform: rotate(30deg) scale(0.8) translate(-12%, -14%);
    }
    .pizza {
      transform: rotate(-30deg) scale(1.9) translate(0%, 25%);
    }
  }
}
</style>