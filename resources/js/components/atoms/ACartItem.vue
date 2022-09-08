<template>
  <div class="cart-item row d-flex justify-content-center align-items-center">
    <div class="col-1 d-flex flex-column p-0">
      <button class="add-btn" @click="addQty">+</button>
      <button class="delete-btn" @click="del">-</button>
    </div>
    <div class="col-2 p-0">
      <div class="cart-item-quantity">{{ plate.quantity }}</div>
    </div>
    <div class="cart-item-name col-6 p-0">
      <div class="cart-item-name-value">{{plate.name}}</div>
    </div>
    <div class="cart-item-price col-3 p-0 py-3">
      <div class="cart-item-price-value">{{ (plate.quantity * plate.price).toFixed(2) }}€</div>
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
    }
};
</script>

<style lang="scss" scoped>
  .cart-item{
    background-color: var(--secondary-purple);
    border-radius: 20px;
    overflow: hidden;
    button{
      background-color: var(--primary-purple);
      border-bottom: .0625rem solid var(--secondary-purple);
      border-top: .0625rem solid var(--secondary-purple);
      padding: .1875rem 0rem;
      color: var(--tertiary-purple);
    }
    &-quantity{
      color: black;
      font-weight: bold;
      text-align: center;
      border-right: .125rem solid var(--primary-purple);
    }
    &-name{
      &-value{
        color: var(--tertiary-purple);
        font-weight: bold;
        text-align: center;
      }
    }
    &-price{
      background-color: var(--primary-purple);
      height: 100%;
      &-value{
        color: var(--tertiary-purple);
        font-weight: bold;
        text-align: center;
      }
    }
  }
// .cart-item {
//   background-color: var(--secondary-purple);
//   border-radius: 1.25rem;
//   display: flex;
//   width: 100%;
//   justify-content: space-between;
//   overflow: hidden;

//   .cart-item-left {
//     width: 100%;
//   }
//   .cart-item-left,
//   .cart-item-right {
//     display: flex;
//     gap: .625rem;
//     align-items: center;
//     .cart-item-name {
//       color: white;
//       text-transform: uppercase;
//       font-weight: 700;
//       font-size: 13px;
//       word-wrap: wrap;
//     }

//     .cart-item-quantity {
//       width: 30%;
//     }
//     .card-item-name {
//       width: 60%;
//     }
//     .cart-item-quantity,
//     .cart-item-price {
//       display: flex;
//       justify-content: center;
//       align-items: center;
//       background-color: white;
//       padding: 5px 16px;
//       width: 70px;
//       position: relative;
//       border-radius: 16px;
//     }
//     .cart-item-delete {
//       height: 100%;
//       .cart-item {
//         height: 50%;
//         width: 32px;
//         color: white;
//         &:hover {
//           cursor: pointer;
//         }
//       }
//       .add-btn {
//         border-top-left-radius: 0;
//         border-top-right-radius: 0;
//         border-bottom-left-radius: 0;
//         border-bottom-right-radius: 0;
//         background-color: var(--primary-purple);
//         border-bottom: .125rem solid var(--secondary-purple);
//         display: flex;
//         align-items: center;
//         justify-content: center;
//       }
//       .delete-btn {
//         border-top-left-radius: 0;
//         border-top-right-radius: 0;
//         border-bottom-left-radius: 0;
//         border-bottom-right-radius: 0;
//         background-color: var(--primary-purple);
//         display: flex;
//         align-items: center;
//         justify-content: center;
//       }
//     }
//   }

//   .cart-item-left-info {
//     width: 100%;
//     height: 100%;
//     padding: 10px;
//     display: flex;
//     gap: 10px;
//     align-items: center;
//   }
//   .cart-item-right {
//     width: 30%;
//     background-color: var(--primary-purple);
//     padding-left: 5px;
//     padding-right: 5px;
//   }
// }
</style>
