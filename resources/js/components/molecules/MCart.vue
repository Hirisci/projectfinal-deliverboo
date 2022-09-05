<template>
  <div class="cart">
    <ATitleCard :title="'Carrello'" class="cart-title" />
    <div class="cart-items">
      <ACartItem
        v-for="plate in cart"
        :key="plate.id"
        :quantity="plate.quantity"
        :name="plate.name"
        :price="plate.price"
      />
    </div>
    <div class="cart-total">
      <div class="cart-total-price">
        <span class="cart-total-price-title">Totale</span>
        <span class="cart-total-price-value">{{ price }}20 €</span>
      </div>
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
    width: 50%;
    background-color: var(--primary-purple);
    border-radius: 20px;
    font-weight: 700;
    padding: 10px;
    .cart-total-price {
      display: flex;
      align-items: center;
      justify-content: space-around;
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