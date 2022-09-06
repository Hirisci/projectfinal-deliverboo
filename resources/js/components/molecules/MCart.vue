<template>
  <div class="cart">
    <ATitleCard :title="'Carrello'" class="cart-title" />
    <div class="cart-items">
      <ACartItem
        v-for="plate in cart"
        :key="plate.id"
        :plate="plate"
        @event-delPlate="delPlate()"
      />
    </div>
    <div class="cart-total">
      <div class="cart-total-price">
        <span class="cart-total-price-title">Totale</span>
        <span class="cart-total-price-value"
          >{{ this.amountCart.toFixed(2) }}€</span
        >
      </div>
    </div>
    <button class="btn-purple btn-main">CHECKOUT</button>
  </div>
</template>

<script>
import ATitleCard from "../atoms/ATitleCard.vue";
import ACartItem from "../atoms/ACartItem.vue";
export default {
  name: "MCart",
  components: { ATitleCard, ACartItem },
  props: {
    cart: Array,
  },
  computed: {
    amountCart() {
      let somma = 0;
      this.cart.forEach((element) => {
        somma += element.price * element.quantity;
      });
      return somma;
    },
  },
  methods: {
    delPlate(arg) {
      console.log(this.plate);
      console.log(arg, "Componente padre");
      this.$emit("event-delPlate", arg);
    },
  },
};
</script>

<style lang="scss" scoped>
.cart {
  display: flex;
  flex-flow: column wrap;
  gap: 20px;
  align-items: center;
  .cart-title {
    width: 100%;
  }
  .cart-items {
    display: flex;
    flex-flow: column wrap;
    gap: 20px;
    width: 100%;
  }
  .cart-total {
    align-self: flex-end;
    width: 100%;
    background-color: var(--primary-purple);
    border-radius: 20px;
    font-weight: 700;
    padding: 10px;
    .cart-total-price {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 20px;
      .cart-total-price-title {
        color: white;
        text-transform: uppercase;
      }
      .cart-total-price-value {
        background-color: white;
        border-radius: 20px;
        padding: 5px 10px;
      }
    }
  }
}
</style>
