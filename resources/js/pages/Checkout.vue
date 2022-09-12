<template>
  <div class="container-fluid p-0 position-relative">
    <AJumbotron />
    <div class="form container-lg p-3" v-if="!orderSuccess">
      <div class="row d-flex px-5 mt-5 justify-content-around">
        <div class="user-form col-lg-5 mb-4 order-1 order-lg-0">
          <div class="col-12 col-lg-4 p-0">
            <AAsideMenuTitle :title="'Checkout'" class="px-2" />
          </div>
          <form
            id="paymentForm"
            v-if="this.cart.length !== 0"
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
                  required
                  pattern="[a-zA-Z]+"
                />
              </div>
              <div class="col">
                <input
                  v-model="form.client.lastName"
                  type="text"
                  class="form-control"
                  placeholder="Cognome"
                  aria-label="Cognome"
                  required
                  pattern="[a-zA-Z]+"
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
                required
                pattern="[a-zA-Z0-9 ]+"
              />
            </div>
            <div class="form-group">
              <input
                v-model="form.address.city"
                type="text"
                class="form-control"
                id="client_city"
                placeholder="Città"
                required
                pattern="[a-zA-Z]+"
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
                  required
                  pattern="[a-zA-Z]+"
                />
              </div>
              <div class="col">
                <input
                  v-model="form.address.zip"
                  type="text"
                  class="form-control"
                  placeholder="CAP"
                  aria-label="CAP"
                  required
                  pattern="[0-9]+"
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
                required
                pattern="[a-zA-Z]+"
              />
            </div>
            <div class="form-group">
              <input
                v-model="form.client.phone"
                type="text"
                class="form-control"
                id="client_number"
                placeholder="Cellulare"
                required
                pattern="[0-9]+"
                min-length="11"
                max-length="11"
              />
            </div>

            <div
              id="dropin-container"
              :class="isOpenDrop ? 'd-none' : ''"
            ></div>
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
          <div class="empty-menu" v-else>
            <div class="row empty-menu-card">
              <div class="col-12 col-md">
                <img src="../components/imgs/c404.png" alt="404" />
              </div>
              <div class="col-8 col-md-5 empty-menu-dx py-3">
                <h4 class="mb-4">Ops, Errore con il pagamento</h4>
                <p class="mb-2">
                  Per procedere al pagamento devi aver selezionato almeno un
                  piatto in un ristorante
                </p>
                <a href="/" class="btn-main btn-purple align-self-end">
                  Torna alla home
                </a>
              </div>
            </div>
          </div>
        </div>
        <div
          class="d-lg-block col-lg-7 pb-5 order-0 order-lg-1"
          v-if="this.cart.length !== 0"
        >
          <MCart
            :cart="this.cart"
            :inCheckoutPage="true"
            @event-delPlate="delPlate"
            @event-addQty="addQty"
            @isOpenCart="isOpenCart"
          />
          <AGoBackButton />
        </div>
      </div>
    </div>
    <div class="row" v-else>
      <AOrderSuccess :cart="this.orderCompleted[0]" />
    </div>
  </div>
</template>

<script>
import AJumbotron from "../components/atoms/AJumbotron.vue";
import AAsideMenuTitle from "../components/atoms/AAsideMenuTitle.vue";
import MCart from "../components/molecules/MCart.vue";
import BtnPayment from "../components/atoms/BtnPayment.vue";
import ABasicButton from "../components/atoms/ABasicButton.vue";
import AGoBackButton from "../components/atoms/AGoBackButton.vue";
import ACheckoutButton from "../components/atoms/ACheckoutButton.vue";
import AOrderSuccess from "../components/atoms/AOrderSuccess.vue";

export default {
  name: "Checkout",
  components: {
    AJumbotron,
    AAsideMenuTitle,
    MCart,
    BtnPayment,
    ABasicButton,
    AGoBackButton,
    ACheckoutButton,
    AOrderSuccess,
  },
  data() {
    return {
      isOpenDrop: false,
      orderSuccess: false,
      orderCompleted: null,
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
      const BTNSubmit = document.querySelector("#btnSubmit");
      BTNSubmit.disabled = true;
      //Submit payload.nonce to your server
      const path = "http://127.0.0.1:8000/api/payment";
      // const data = {
      //   cart: this.cart,
      //   form: this.form,
      //   token: document.querySelector("#nonce").value,
      //   // token: "fake-valid-nonce",
      // };
      let cart = this.cart;
      let form = this.form;
      let token = document.querySelector("#nonce").value;

      let data = new FormData();
      data.append("token", token);

      //Just stringify carts array
      data.append("cart", JSON.stringify(cart));
      data.append("form", JSON.stringify(form));

      const config = {
        headers: {
          "Content-Type": "application/json",
          Accept: "application/json",
        },
      };
      // console.log(data.cart[0]);
      // console.log(data.cart[1]);
      // console.log(data.form);
      // console.log(data.token);
      // console.log(data);
      axios
        .post(path, data, config)
        .then((res) => {
          console.log("invio form riuscito", res);
          this.cart = [];
          this.orderSuccess = true;
          this.orderCompleted = res.data;
          // svuoto carello
          // pagina conferma ordine -> carello e somma pagata
          this.form.name = "";
          this.form.lastName = "";
          this.form.phone = "";
          this.address.street = "";
          this.address.city = "";
          this.address.state = "";
          this.address.zip = "";
          this.address.ring = "";
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
    isOpenCart() {
      this.isOpenDrop = !this.isOpenDrop;
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
.empty-menu {
  padding: 0 1rem;

  img {
    width: 100%;
    aspect-ratio: 1;
    margin-bottom: 1rem;
  }
  h4 {
    color: var(--primary-purple);
  }
  a {
    cursor: pointer;
  }
  p {
    text-align: center;
  }
  &-card {
    display: flex;
    justify-content: space-around;
    align-items: center;
    gap: 1;
    border-radius: 1rem;
    padding: 2rem;
  }
  &-dx {
    border-radius: 1rem;
    display: flex;
    flex-direction: column;
    background-color: var(--tertiary-purple-opacity);
  }
}
.form-group {
  margin: 0.9375rem 0;
}

label {
  margin-bottom: 0.3125rem;
}
.form {
  position: relative;
}

.order-success {
  padding: 5rem;
}
</style>



