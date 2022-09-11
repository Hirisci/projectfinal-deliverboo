<template>
  <div class="thank-you container-lg">
    <div class="thank-you-title row">
      <div
        class="
          d-flex
          justify-content-center
          align-items-center
          col-12 col-lg-12
          fs-1
          p-5
        "
      >
        Grazie per il tuo ordine, {{ this.cart.costumer_name }}!
      </div>
    </div>
    <div class="thank-you-subtitle row py-3">
      <div
        class="
          d-flex
          justify-content-center
          align-items-center
          col-12 col-lg-12
          mb-2
        "
      >
        Un nostro corriere è appena partito dalla tana per andare a ritirare il
        tuo ordine e portarlo alla tua porta!
      </div>
    </div>
    <div class="thank-you-summary row py-3 mb-3">
      <!-- Riepilogo -->
      <div class="d-flex col-12 col-lg-6 p-5">
        <div class="d-flex flex-column w-100 p-3 content">
          <div class="d-flex mb-5 content-tab">
            <div class="sx content-color">
              <div class="d-none d-xxl-block">dati:</div>
            </div>
            <div class="dx">
              <div class="d-flex flex-column justify-content-between w100 py-1">
                <div class="sx w-100 text-uppercase">ID ordine</div>
                <div class="dx w-100 text-end">{{ this.cart.id }}</div>
              </div>
              <div
                class="
                  d-flex
                  flex-column
                  justify-content-between
                  w100
                  py-1
                  dark
                "
              >
                <div class="sx w-100 text-uppercase">totale</div>
                <div class="dx w-100 text-end">
                  {{ this.cart.price.toFixed(2) }} €
                </div>
              </div>
              <div class="d-flex flex-column justify-content-between w100 py-1">
                <div class="sx w-100 text-uppercase">nome</div>
                <div class="dx w-100 text-end">
                  {{ this.cart.costumer_name }}
                </div>
              </div>
              <div
                class="
                  d-flex
                  flex-column
                  justify-content-between
                  w100
                  py-1
                  dark
                "
              >
                <div class="sx w-100 text-uppercase">numero</div>
                <div class="dx w-100 text-end">
                  (+39) {{ this.cart.costumer_number }}
                </div>
              </div>
              <div class="d-flex flex-column justify-content-between w100 py-1">
                <div class="sx w-100 text-uppercase">indirizzo</div>
                <div class="dx w-100 text-end">
                  {{ this.cart.costumer_address }}
                </div>
              </div>
              <div
                class="
                  d-flex
                  flex-column
                  justify-content-between
                  w100
                  py-1
                  dark
                "
              >
                <div class="sx w-100 text-uppercase">citofono</div>
                <div class="dx w-100 text-end">
                  {{ this.cart.costumer_ring }}
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex flex-grow-1 content-tab">
            <div class="sx content-color">
              <div class="d-none d-xxl-block">Piatti:</div>
            </div>
            <div class="dx">
              <div
                class="
                  d-flex d-column
                  flex-column
                  justify-content-between
                  w100
                  py-1
                "
                v-for="(plate, index) in this.cart.plate"
                :key="plate.id"
                :class="index % 2 == 0 ? '' : 'dark'"
              >
                <div class="sx w-100">Pezzi: {{ plate.pivot.quantity }}</div>
                <div class="dx w-100 text-end">{{ plate.name }}</div>
              </div>
            </div>
          </div>
          <div>
            <AGoBackButton />
          </div>
        </div>
      </div>
      <!-- img -->
      <div
        class="
          d-flex
          justify-content-center
          align-items-center
          col-12 col-lg-6
          py-2
        "
      >
        <img src="../imgs/Thank-You-Bara.png" alt="Thank-You!" />
      </div>
    </div>
  </div>
</template>

<script>
import AGoBackButton from "./AGoBackButton.vue";

export default {
  name: "AOrderSuccess",
  props: {
    cart: Array,
  },
  components: { AGoBackButton },
};
</script>

<style lang="scss" scoped>
.thank-you {
  width: 80%;
  font-size: 1.2rem;
  font-weight: bold;
  margin-bottom: 2rem;

  &-summary {
    background-color: var(--secondary-purple);
    border-radius: 20px;
  }
  .sx {
    width: 20%;
  }
  .dx {
    width: 66%;
  }
  .content {
    font-weight: 500;
    background-color: var(--tertiary-purple-opacity);
    border-radius: 1rem;
    &-color {
      padding: 1rem;
      font-weight: 700;
      text-transform: uppercase;
      background-color: var(--primary-purple);
      color: white;
    }
    &-tab {
      border-radius: 30px 0px 0 30px;
      overflow: hidden;
    }
    .dark {
      background-color: var(--tertiary-purple-opacity);
    }
  }
}
</style>