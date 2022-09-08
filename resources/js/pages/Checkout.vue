<template>
  <div class="container-fluid p-0">
    <AJumbotron />
    <div class="form container-lg p-3">
      <div class="row d-flex justify-content-between">
        <div class="user-form col-lg-6">
          <div class="col-12 col-lg-4 p-0">
            <AAsideMenuTitle :title="'Checkout'" />
          </div>
          <form class="px-3 mt-2" v-on:submit.prevent="submitForm">
            <div class="row">
              <p class="mb-1">Dettagli Ordine</p>
              <div class="col">
                <input
                  v-model="form.name"
                  type="text"
                  class="form-control"
                  placeholder="Nome"
                  aria-label="Nome"
                />
              </div>
              <div class="col">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Cognome"
                  aria-label="Cognome"
                />
              </div>
            </div>
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                id="client_address"
                placeholder="Indirizzo"
              />
            </div>
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                id="client_city"
                placeholder="Città"
              />
            </div>
            <div class="row">
              <div class="col">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Stato"
                  aria-label="Stato"
                />
              </div>
              <div class="col">
                <input
                  type="text"
                  class="form-control"
                  placeholder="CAP"
                  aria-label="CAP"
                />
              </div>
            </div>
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                id="client_name"
                placeholder="Nome sul campanello"
              />
            </div>
            <div class="form-group mb-4">
              <input
                type="text"
                class="form-control"
                id="client_number"
                placeholder="Cellulare"
              />
            </div>
            <div class="row mb-3">
              <p class="mb-1">Dettagli Pagamento</p>
              <div class="col">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Nome"
                  aria-label="Nome"
                />
              </div>
              <div class="col">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Cognome"
                  aria-label="Cognome"
                />
              </div>
            </div>
            <div class="row">
              <div class="col-10">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Numero Carta"
                  aria-label="numeroCarta"
                />
              </div>
              <div class="col">
                <input
                  type="text"
                  class="form-control"
                  placeholder="CVV"
                  aria-label="cvv"
                />
              </div>
            </div>
            <div class="d-flex justify-content-end mt-3">
              <button class="btn-main btn-purple">Procedi al pagamento</button>
            </div>
          </form>
        </div>
        <div class="d-none d-lg-block col-lg-4 cart">
          <MCart
            :cart="this.cart"
            @event-delPlate="delPlate"
            @event-addQty="addQty"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import AJumbotron from "../components/atoms/AJumbotron.vue";

import AAsideMenuTitle from "../components/atoms/AAsideMenuTitle.vue";
import MCart from "../components/molecules/MCart.vue";

export default {
  name: "Checkout",
  components: { AJumbotron, AAsideMenuTitle, MCart },
  data() {
    return {
      cart: [],
      form: {
        name: "",
      },
    };
  },
  watch: {
    cart: {
      handler: function () {
        localStorage.setItem("order", JSON.stringify(this.cart));
        //console.log("STO FUNZIONANDO");
      },
      deep: true,
    },
  },
  methods: {
    submitForm() {
      const path = "http://127.0.0.1:8000/api/order";
      //const token = this.$cookies.get("XSRF-TOKEN");
      // const headers = {
      //   headers: {
      //     Authorization: `true`,
      //     Accept: "application/json",
      //   },
      // };

      axios
        .post(path, this.form)
        .then((res) => {
          console.log("successo", res);
          //Perform Success Action
        })
        .catch((error) => {
          console.log("successo", error);
          // error.response.status Check status code
        })
        .finally(() => {
          //Perform action in always
          console.log("dunque");
        });
    },
    sendOrder() {
      axios
        .post("api/order", this.form)
        .then((res) => {
          //Perform Success Action
        })
        .catch((error) => {
          // error.response.status Check status code
        })
        .finally(() => {
          //Perform action in always
        });

      axios(options).then((response) => {
        console.log(response.status);
      });
    },
    addQty(arg) {
      let result = this.cart.find((Element) => Element.id === arg.id);
      let isx = this.cart.findIndex((Element) => Element.id === arg.id);
      result.quantity++;
      if (result.quantity < 1) {
        this.cart.splice(isx, 1);
      } else {
        this.$set(this.cart, isx, result);
      }
    },
    delPlate(arg) {
      let result = this.cart.find((Element) => Element.id === arg.id);
      let idx = this.cart.findIndex((Element) => Element.id === arg.id);
      result.quantity--;
      if (result.quantity < 1) {
        this.cart.splice(idx, 1);
      } else {
        this.$set(this.cart, idx, result);
      }
    },
    refreshCart() {
      let listCart = JSON.parse(localStorage.getItem("order"));
      if (listCart === null) {
        this.cart = [];
        console.log("carrello vuoto");
      } else {
        this.cart = listCart;
        console.log("carrello pieno");
      }
    },
  },
  mounted() {
    this.refreshCart();
  },
};
</script>

<style lang="scss" scoped>
.user-form {
  background-color: var(--secondary-purple);
  border-radius: 1.25rem;
  display: flex;
  flex-flow: column;
  gap: 0.625rem;
  padding: 1.25rem 0rem;
}

.form-group {
  margin: 0.9375rem 0;
}
label {
  margin-bottom: 0.3125rem;
}
</style>