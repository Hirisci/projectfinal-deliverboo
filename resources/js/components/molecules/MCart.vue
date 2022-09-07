<template>
  <div class="cart">
    <div class="cart-lg d-lg-block container-fluid" :class="{ menuOpen : isOpen, dnone : !isOpen , dflex : isOpen}">
      <ATitleCard :title="'Carrello'" class="cart-title" />
      <div class="cart-items mt-3">
        <ACartItem
          v-for="plate in cart"
          :key="plate.id"
          :plate="plate"
          @event-delPlate="delPlate()"
        />
      </div>
      <div class="cart-total mt-3 d-flex">
        <div class="cart-checkout col-5">
          <button class="btn-main btn-purple">Checkout</button>
        </div>
        <div class="cart-total-price col-7">
          <div class="cart-total-price-title">Totale</div>
          <div class="cart-total-price-value">{{ this.amountCart.toFixed(2) }}€</div>
        </div>
      </div>
    </div>
    <div class="cart-overlay d-lg-none">
      <div class="cart-overlay"></div>
      <button class="cart-overlay-button" @click="showCart()" >
        <img src="../imgs/shopping-cart.png" alt="" :class="{ dnone : isOpen}">
        <div class="cart-overlay-close" :class="{ dnone : !isOpen}">X</div>
      </button>
      <div class="cart-overlay-count" :class="{ dnone : isOpen}">{{amountItem}}</div>
    </div>
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
  data() {
    return {
      isOpen: false,
    }
  },
  computed: {
    amountCart() {
      let somma = 0;
      this.cart.forEach((element) => {
        somma += element.price * element.quantity;
      });
      return somma;
    },
    amountItem(){
      let itemCount = 0;
      this.cart.forEach((element) => {
        itemCount += element.quantity;
      });
      return itemCount;
    }
  },
  methods: {
    addQty(arg) {
      console.log(this.plate);
      console.log(arg, "Componente padre");
      this.$emit("event-addQty", arg);
    },
    delPlate(arg) {
      this.$emit("event-delPlate", arg);
    },
    showCart(){
      this.isOpen = !this.isOpen; 
    }
  },
};
</script>

<style lang="scss" scoped>
.cart {
  display: flex;
  flex-flow: column wrap;
  gap: 1.25rem;
  align-items: center;
  &-overlay-button{
    background-color: var(--primary-purple);
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    img{
      padding: .9375rem;
      aspect-ratio: 1/1;
      width: 100%;
    }
  }
  .cart-title {
    width: 100%;
  }
  .cart-items {
    display: flex;
    flex-flow: column wrap;
    gap: 1.25rem;
    width: 100%;
  }
  .cart-total {
    .cart-total-price {
      background-color: var(--primary-purple);
      border-radius: 1.25rem;
      font-weight: 700;
      padding: .625rem;
      margin-left: auto;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 1.25rem;
      .cart-total-price-title {
        color: white;
        text-transform: uppercase;
      }
      .cart-total-price-value {
        background-color: white;
        border-radius: 1.25rem;
        padding: .3125rem .625rem;
      }
    }
  }
  &-overlay{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    &-close{
      font-weight: bolder;
      color: white;
    }
    &-button{
      width: 3.125rem;
      height: 3.125rem;
      img{
        width: 100%;
      }
    }
    &-count{
      position: absolute;
      top: 30%;
      left: 60%;
      transform: translateY(-50%);
      background-color: red;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      aspect-ratio: 1/1;
      width: 1.5625rem;
      color: white;
    }
  }
  .menuOpen{
    .cart{
      &-title{
        width: 70%;
        margin: auto;
      }
    }
    padding-top: 1.25rem;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background-color: var(--tertiary-purple);
  }
  .dnone{
    display: none;
  }
  .dflex{
    // display: flex;
    flex-flow: column;
  }
}
</style>
