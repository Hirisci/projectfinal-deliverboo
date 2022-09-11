<template>
  <div class="jumbotron">
    <div class="rows">
        <img
          class="sushi"
          src="../imgs/sushi.png"
          alt="immagine sushi del jumbotron"
        />
        <img
          class="hamburger"
          src="../imgs/hamburger.png"
          alt="immagine hamburger del jumbotron"
        />
     
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
  .rows {
    position: relative;
    height: 100%;
  }

  img {
    position: absolute;
  }
  .img-box {
    display: grid;
    place-items: center;
  }

  .sushi {
    top: 60%;
    width: 350px;
    aspect-ratio: 3/2;
    transform: translate(25rem, -10rem) rotate(15deg) scale(4);
  }
  .hamburger {
    right: 50%;
    width: 350px;
    aspect-ratio: 4/3;
    transform: translate(0%, -50%) rotate(30deg) scale(7);
  }
  .pizza {
    bottom: 0;
    right: 0;
    width: 350px;
    aspect-ratio: 2/1;
    transform: rotate(-15deg) scale(9);
  }

  @media only screen and (max-width: 4800px) {
    .sushi {
      transform: translate(15rem, -13rem) rotate(15deg) scale(3);
    }
    .hamburger {
      transform: translate(0%, -50%) rotate(30deg) scale(4);
    }
    .pizza {
      transform: rotate(-15deg) scale(6);
    }
  }
  @media only screen and (max-width: 3500px) {
    .sushi {
      transform: translate(15rem, -13rem) rotate(15deg) scale(2.5);
    }
    .hamburger {
      transform: translate(0%, -50%) rotate(30deg) scale(3);
    }
    .pizza {
      transform: rotate(-15deg) scale(6);
    }
  }
  @media only screen and (max-width: 3250px) {
    .sushi {
      transform: translate(0rem, -5rem) rotate(15deg) scale(2);
    }
    .hamburger {
      left: 35%;
      top: 10rem;
      transform: translate(0%, -50%) rotate(30deg) scale(2.5);
    }
    .pizza {
      transform: rotate(-15deg) scale(6);
    }
  }
  @media only screen and (max-width: 2560px) {
    .sushi {
      transform: translate(0rem, -5rem) rotate(15deg) scale(1.5);
    }
    .hamburger {
      left: 35%;
      top: 10rem;
      transform: translate(0%, -50%) rotate(30deg) scale(2);
    }
    .pizza {
      transform: rotate(-15deg) scale(5);
    }
  }
  @media only screen and (max-width: 1980px) {
    .sushi {
      transform: translate(0rem, 0rem) rotate(15deg) scale(1.5);
    }
    .hamburger {
      left: 25%;
      top: 10rem;
      transform: translate(0%, -50%) rotate(30deg) scale(1.5);
    }
    .pizza {
      transform: rotate(-15deg) scale(4.5);
    }
    .pizza {
      background-color: transparent;
    }
  }
  @media only screen and (max-width: 1440px) {
    .sushi {
      transform: translate(0rem, 0rem) rotate(15deg) scale(1.5);
    }
    .hamburger {
      left: 25%;
      top: 10rem;
      transform: translate(0%, -50%) rotate(30deg) scale(1);
    }
    .pizza {
      transform: rotate(-15deg) scale(4);
    }
    .pizza {
      background-color: transparent;
    }
  }
  @media only screen and (max-width: 1200px) {
    /*Tablets [601px -> 1200px]*/
    .sushi {
      transform: translate(-5rem, 0rem) rotate(15deg) scale(1);
    }
    .hamburger {
      left: 15%;
      top: 10rem;
      transform: translate(0%, -50%) rotate(30deg) scale(1);
    }
    .pizza {
      transform: rotate(-15deg) scale(4);
    }
  }
  @media only screen and (max-width: 1000px) {
    /*Tablets [601px -> 1200px]*/
    .sushi {
      display: none;
    }
    .hamburger {
      left: -5rem;
      top: 15rem;
      transform: translate(0%, -50%) rotate(30deg) scale(1);
    }
    .pizza {
      transform: rotate(-15deg) scale(4);
    }
  }
  @media only screen and (max-width: 1000px) {
    /*Tablets [601px -> 1200px]*/
    .sushi {
      display: none;
    }
    .hamburger {
      left: -5rem;
      top: 15rem;
      transform: translate(0%, -50%) rotate(30deg) scale(1);
    }
    .pizza {
      transform: rotate(-15deg) scale(3);
    }
  }
  @media only screen and (max-width: 750px) {
    .sushi {
      display: none;
    }
    .hamburger {
      left: -8rem;
      top: 15rem;
      transform: translate(0%, -50%) rotate(30deg) scale(0.8);
    }
    .pizza {
      transform: rotate(-15deg) scale(2.5);
    }
  }
  @media only screen and (max-width: 600px) {
    /*Big smartphones [426px -> 600px]*/
    .hamburger {
      left: -8rem;
      top: 12rem;
      transform: translate(0%, -50%) rotate(30deg) scale(0.8);
    }
  }
  @media only screen and (max-width: 425px) {
    /*Small smartphones [325px -> 425px]*/
    .hamburger {
      left: -8rem;
      top: 15rem;
      transform: translate(0%, -50%) rotate(30deg) scale(0.6);
    }
    .pizza {
      transform: translate(10rem, 0) rotate(-15deg) scale(1.5);
    }
  }
}
</style>