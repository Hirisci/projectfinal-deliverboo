<template>
  <div class="container-fluid p-0">
    <AJumbotron />
    <div class="form container-lg p-3">
      <div class="row d-flex justify-content-around">
        <div class="user-form col-lg-6">
          <div class="col-12 col-lg-4 p-0">
            <AAsideMenuTitle :title="'Checkout'" />
          </div>
          <form
            id="paymentForm"
            class="px-3 mt-2"
            method="POST"
            action="http://127.0.0.1:8000/api/payment"
          >
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
            <div class="form-group">
              <input
                v-model="form.client.phone"
                type="text"
                class="form-control"
                id="client_number"
                placeholder="Cellulare"
              />
            </div>

            <div id="dropin-container"></div>
            <input type="hidden" id="nonce" name="payment_method_nonce" />
            <input type="hidden" id="device" name="deviceDataFromTheClient" />
            <div class="d-flex justify-content-end mt-3">
              <button
                id="btnToken"
                type="submit"
                class="btn-main btn-purple btn-disabled"
                disabled
              >
                Verifica Pagamento
              </button>

              <button
                id="btnSubmit"
                type="submit"
                class="btn-main btn-purple d-none"
                @click="submitForm"
              >
                Conferma Ordine
              </button>
            </div>
          </form>
        </div>
        <div class="d-lg-block col-lg-5 mt-2">
          <MCart
            :cart="this.cart"
            :inCheckoutPage="true"
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
import BtnPayment from "../components/atoms/BtnPayment.vue";
import ABasicButton from "../components/atoms/ABasicButton.vue";

export default {
  name: "Checkout",
  components: { AJumbotron, AAsideMenuTitle, MCart, BtnPayment, ABasicButton },
  data() {
    return {
      cart: [],
      form: {
        client: {
          name: "Alan",
          lastName: "Bruno",
          phone: "123 4564456",
        },
        address: {
          street: "Via Po 123",
          city: "Milano",
          state: "Italia",
          zip: "20030",
          ring: "Bruno",
        },
        payment: {
          fullName: "Alan Bruno",
          email: "email@mail.com",
          expire: "11/25",
          cardNumber: "4111111111111111",
          cvv: "111",
        },
      },
      // inCheckoutPage: true,
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
      //Submit payload.nonce to your server
      const path = "http://127.0.0.1:8000/api/payment";
      const data = {
        cart: this.cart,
        form: this.form,
        // token: "fake-valid-nonce",
        token: document.querySelector("#nonce").value,
      };

      console.log(data);
      axios
        .post(path, data)
        .then((res) => {
          console.log("invio form riuscito", res);
          // svuoto carello
          // pagina conferma ordine -> carello e somma pagata
        })
        .catch((error) => {
          console.log("errore", error);
          // error.response.status Check status code
        })
        .finally(() => {
          //Perform action in always
          console.log("in fine");
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
    //* EVENTI COMPONENTE V-DROP
    onSuccess(payload) {
      let nonce = payload.nonce;
      // Do something great with the nonce...
    },
    onError(error) {
      let message = error.message;
      // Whoops, an error has occured while trying to get the nonce
    },
    onLoad() {
      console.log(instance);
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
        device: this.device(),
      };
      return order;
    },
  },
  mounted() {
    this.refreshCart();
  },
  created() {
    const path = "http://127.0.0.1:8000/api/token";

    axios
      .get(path)
      .then((res) => {
        console.log("successo", res);
        //Perform Success Action
        this.token = res.data.token;
        const BTNtoken = document.querySelector("#btnToken");

        console.log("creo dropIn");
        let form = document.querySelector("#paymentForm");

        const dropIn = require("braintree-web-drop-in");
        dropIn.create(
          {
            authorization: this.token,
            selector: "#dropin-container",
            locale: "it_IT",
          },
          (createErr, instance) => {
            if (createErr) {
              // An error in the create call is likely due to
              // incorrect configuration values or network issues.
              // An appropriate error will be shown in the UI.

              return;
            }
            BTNtoken.removeAttribute("disabled");
            BTNtoken.classList.remove("btn-disabled");

            const BTNSubmit = document.querySelector("#btnSubmit");

            form.addEventListener("submit", (event) => {
              event.preventDefault();

              instance.requestPaymentMethod(function (err, payload) {
                if (err) {
                  console.log("Request Payment Method Error", err);
                  return;
                }

                // Add the nonce to the form and submit
                document.querySelector("#nonce").value = payload.nonce;
                BTNtoken.classList.add("d-none");
                BTNSubmit.classList.remove("d-none");
              });
            });
          }
        );
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
  .form-group:last-child {
    padding-bottom: 0;
  }
}
.form-group {
  margin: 0.9375rem 0;
}

// #dropin-container {
//   margin-top: -1rem;
// }

label {
  margin-bottom: 0.3125rem;
}
.form {
  position: relative;
}
</style>



