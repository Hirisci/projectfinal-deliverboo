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
                  v-model="form.client.name"
                  type="text"
                  class="form-control"
                  placeholder="Nome"
                  aria-label="Nome"
                />
              </div>
              <div class="col">
                <input
                  v-model="form.client.lastName"
                  type="text"
                  class="form-control"
                  placeholder="Cognome"
                  aria-label="Cognome"
                />
              </div>
            </div>
            <div class="form-group">
              <input
                v-model="form.address.street"
                type="text"
                class="form-control"
                id="client_address"
                placeholder="Indirizzo"
              />
            </div>
            <div class="form-group">
              <input
                v-model="form.address.city"
                type="text"
                class="form-control"
                id="client_city"
                placeholder="Città"
              />
            </div>
            <div class="row">
              <div class="col">
                <input
                  v-model="form.address.state"
                  type="text"
                  class="form-control"
                  placeholder="Stato"
                  aria-label="Stato"
                />
              </div>
              <div class="col">
                <input
                  v-model="form.address.zip"
                  type="text"
                  class="form-control"
                  placeholder="CAP"
                  aria-label="CAP"
                />
              </div>
            </div>
            <div class="form-group">
              <input
                v-model="form.address.ring"
                type="text"
                class="form-control"
                id="client_name"
                placeholder="Nome sul campanello"
              />
            </div>
            <div class="form-group mb-4">
              <input
                v-model="form.client.phone"
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
                  v-model="form.payment.name"
                  type="text"
                  class="form-control"
                  placeholder="Nome"
                  aria-label="Nome"
                />
              </div>
              <div class="col">
                <input
                  v-model="form.payment.lastName"
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
                  v-model="form.payment.cardNumber"
                  type="text"
                  class="form-control"
                  placeholder="Numero Carta"
                  aria-label="numeroCarta"
                />
              </div>
              <div class="col">
                <input
                  v-model="form.payment.cvv"
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
        client: {
          name: "",
          lastName: "",
          phone: "",
        },
        address: {
          street: "",
          city: "",
          state: "",
          zip: "",
          ring: "",
        },
        payment: {
          name: "",
          lastName: "",
          cardNumber: "",
          cvv: "",
        },
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
      axios
        .post(path, { form: this.sendClient, cart: this.sendCart })
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
    amountCart() {
      let somma = 0;
      this.cart.forEach((element) => {
        somma += element.price * element.quantity;
      });
      return somma.toFixed(2);
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
      console.log(this.sendCart);
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
  computed: {
    sendCart() {
      let order = {};
      order.amount = this.amountCart();
      order.list = [];

      this.cart.forEach((el) => {
        let { id, quantity } = el;
        let item = { id: id, quantity: quantity };
        order.list.push(item);
      });
      return order;
    },
    sendClient() {
      let order = {
        name: `${this.form.client.name} ${this.form.client.lastName}`,
        number: this.form.client.phone,
        address: `${this.form.address.street}, ${this.form.address.city}, ${this.form.address.state}, ${this.form.address.zip}`,
        ring: this.form.client.ring,
        payment: this.form.payment,
      };
      return order;
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