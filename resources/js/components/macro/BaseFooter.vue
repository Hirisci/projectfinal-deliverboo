<template>
  <footer class="footer">
    <div class="footer-top">
      <div class="footer-top-card">
        <h4>CHI SIAMO</h4>

        <ul class="footer-top-card-list">
          <li class="footer-top-card-list-element">
            <a href="#">Su di Noi</a>
          </li>
          <li class="footer-top-card-list-element">
            <a href="#">Newsletter</a>
          </li>
          <li class="footer-top-card-list-element">
            <a href="#">Diventa un rider</a>
          </li>
          <li class="footer-top-card-list-element">
            <a href="#">Unisciti a noi</a>
          </li>
        </ul>
      </div>

      <div class="footer-top-card">
        <h4>LEGAL</h4>

        <ul class="footer-top-card-list">
          <li class="footer-top-card-list-element">
            <a href="#">Termini e condizioni</a>
          </li>
          <li class="footer-top-card-list-element"><a href="#">Privacy</a></li>
          <li class="footer-top-card-list-element"><a href="#">Cookies</a></li>
        </ul>
      </div>

      <div class="footer-top-card">
        <h4>AIUTO</h4>

        <ul class="footer-top-card-list">
          <li class="footer-top-card-list-element"><a href="#">Contatti</a></li>
          <li class="footer-top-card-list-element"><a href="#">FAQs</a></li>
          <li class="footer-top-card-list-element">
            <a href="#">I nostri partner</a>
          </li>
        </ul>
      </div>

      <div class="footer-top-card">
        <h4>APP DELIVEBOO</h4>

        <div class="app-container">
          <img class="app" src="../imgs/app-store.png" alt="Apple Store" />
          <img class="app" src="../imgs/google-play.png" alt="Google Play" />
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <p>Copyright &copy; 2022 Team2Boolean. All Rights Reserved</p>
    </div>
  </footer>
</template>

<script>
export default {
  name: "BaseFooter",
};
</script>

<style lang="scss" scoped>
@media screen and (min-width: 300px) {
  .footer {
    &-top {
      padding: 1.25rem;
      min-height: 20vh;
      background-color: #d4bbfc;

      display: flex;
      flex-wrap: wrap;
      gap: 0.625rem;

      &-card {
        padding: 20px;
        background-color: var(--tertiary-purple-opacity);
        width: 100%;
        border-radius: 1.25rem;
        min-height: 15.625rem;

        .app-container {
          width: 70%;

          img {
            aspect-ratio: 16/9;
            height: 10rem;
          }
        }

        h4 {
          color: var(--primary-purple);
          margin-bottom: 1.25rem;
        }

        &-list {
          display: flex;
          flex-direction: column;
          gap: 0.625rem;
          color: black;

          a {
            text-decoration: none;
          }
        }
      }
    }
    &-bottom {
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: var(--primary-purple);
      color: white;
      height: 6.25rem;
    }
  }

  .app:hover {
    cursor: pointer;
    opacity: 0.8;
  }
}

@media screen and (min-width: 600px) {
  .footer {
    &-top {
      &-card {
        width: calc(50% - 5px);

        .app-container {
          width: 70%;

          img {
            width: 60%;
          }
        }
      }
    }
  }
}

@media screen and (min-width: 800px) {
  .footer {
    &-top {
      &-card {
        width: calc(25% - 10px);

        .app-container {
          width: 70%;

          img {
            width: 80%;
          }
        }
      }
    }
  }
}
</style>
