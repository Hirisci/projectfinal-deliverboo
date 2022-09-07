<template>
  <div class="cart">
    <div class="cart-lg d-none d-lg-block">
      <ATitleCard :title="'Carrello'" class="cart-title" />
      <div class="cart-items mt-3">
        <ACartItem
          v-for="plate in cart"
          :key="plate.id"
          :plate="plate"
          @event-delPlate="delPlate()"
        />
      </div>
      <div class="cart-total mt-3">
        <div class="cart-total-price">
          <span class="cart-total-price-title">Totale</span>
          <span class="cart-total-price-value"
            >{{ this.amountCart.toFixed(2) }}€</span
          >
        </div>
      </div>
    </div>
    <div class="cart-overlay d-lg-none">
      <button class="cart-overlay-button" @click="showCart()"><img src="../imgs/shopping-cart.png" alt=""></button>
      <div class="cart-overlay-count">{{amountItem}}</div>
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
  &-overlay-button{
    background-color: var(--primary-purple);
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    img{
      padding: 15px;
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
  &-overlay{
    position: relative;
    &-button{
      width: 100%;
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
      width: 25px;
      color: white;
    }
  }
}
</style>
