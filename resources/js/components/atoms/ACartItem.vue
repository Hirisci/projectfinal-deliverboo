<template>
  <div class="cart-item">
    <div class="cart-item-left">
        <div class="cart-item-quantity">
            <span class="cart-item-quantity-value">{{quantity}}</span>
        </div>
        <div class="cart-item-name">
            <span class="cart-item-name-value">{{name}}</span>
        </div>
    </div>
    <div class="cart-item-right">
        <div class="cart-item-price">
            <span class="cart-item-price-value">{{price}}€</span>
        </div>
        <div class="cart-item-delete">
            <button class="cart-item-delete-btn btn"> - </button>
        </div>
    </div>
  </div>
</template>

<script>
export default {
    name:"ACartItem",
    props: {
        quantity: Number,
        name: String,
        price: Number,
    }
}
</script>

<style lang="scss" scoped>
.cart-item{
    background-color: var(--secondary-purple);
    border-radius: 20px;
    padding: 10px;
    display: flex;
    width: 100%;
    justify-content: space-between;
    .cart-item-left, .cart-item-right{
        display: flex;
        gap: 10px;
        align-items: center;
        .cart-item-name{
            color: white;
            text-transform: uppercase;
            font-weight: 700;
        }
        .cart-item-quantity, .cart-item-price{
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: white;
            width: 40px;
            height: 40px;
            position: relative;
            border-radius: 50%;
        }
        .cart-item-delete{
            .cart-item-delete-btn{
                border-radius: 20px;
                border: 0px;
                width: 40px;
                height: 40px;
                color: white;
                background-color: hsl(0, 100%, 45%);
                &:hover{
                    background-color: hsl(0, 100%, 35%);
                }
            }
        }
    }
    .cart-item-right{
        background-color: var(--primary-purple);
        border-radius: 20px;
    }
}
</style>