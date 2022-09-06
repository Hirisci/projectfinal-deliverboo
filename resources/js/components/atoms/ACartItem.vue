<template>
  <div class="cart-item">
    <div class="cart-item-left">
      <div class="cart-item-delete">
        <button class="cart-item add-btn" @click="addQty">+</button>
        <button class="cart-item delete-btn" @click="del">-</button>
      </div>
      <div class="cart-item-left-info">
        <div class="cart-item-quantity">
          <span class="cart-item-quantity-value">{{ plate.quantity }}</span>
        </div>
        <div class="cart-item-name">
          <span class="cart-item-name-value">{{ plate.name }}</span>
        </div>
      </div>
    </div>
    <div class="cart-item-right">
      <div class="cart-item-price">
        <span class="cart-item-price-value"
          >{{ (plate.quantity * plate.price).toFixed(2) }}€</span
        >
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "ACartItem",
  props: {
    plate: Object,
  },
  methods: {
    addQty() {
      console.log(this.plate, "Primo bottone");
      this.$parent.$emit("event-addQty", this.plate);
    },
    del() {
      console.log(this.plate, "Secondo bottone");
      this.$parent.$emit("event-delPlate", this.plate);
    },
  },
};
</script>

<style lang="scss" scoped>
.cart-item {
  background-color: var(--secondary-purple);
  border-radius: 20px;
  display: flex;
  width: 100%;
  justify-content: space-between;
  overflow: hidden;

  .cart-item-left {
    width: 100%;
  }
  .cart-item-left,
  .cart-item-right {
    display: flex;
    gap: 10px;
    align-items: center;
    .cart-item-name {
      color: white;
      text-transform: uppercase;
      font-weight: 700;
      font-size: 0.8125rem;
      word-wrap: wrap;
    }

    .cart-item-quantity {
      width: 30%;
    }
    .card-item-name {
      width: 60%;
    }
    .cart-item-quantity,
    .cart-item-price {
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: white;
      padding: 0.3125rem 1rem;
      width: 4.375rem;
      position: relative;
      border-radius: 1rem;
    }
    .cart-item-delete {
      margin-left: -2.125rem;
      height: 100%;
      .cart-item {
        height: 50%;
        width: 2rem;
        color: white;
        background-color: green;
        &:hover {
          cursor: pointer;
        }
      }
      .add-btn {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
        background-color: green;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .delete-btn {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
        background-color: hsl(0, 100%, 45%);
        display: flex;
        align-items: center;
        justify-content: center;
      }
    }
  }

  .cart-item-left-info {
    width: 100%;
    height: 100%;
    padding: 0.625rem;
    display: flex;
    gap: 0.625rem;
    align-items: center;
  }
  .cart-item-right {
    width: 30%;
    background-color: var(--primary-purple);
    padding-left: 0.3125rem;
    padding-right: 0.3125rem;
  }
}

.cart-item:hover .cart-item-delete {
  margin-left: 0;
}

@media only screen and (max-width: 890px) {
  .cart-item {
    flex-direction: column;

    .cart-item-right {
      width: 100%;
      padding: 0.625rem;
      align-items: center;
      justify-content: center;
    }
  }
}

@media only screen and (max-width: 546px) {
  .cart-item-left-info {
    flex-direction: column;

    .card-item-name {
      text-align: center;
    }
  }
}
</style>
