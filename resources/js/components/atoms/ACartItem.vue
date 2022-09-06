<template>
  <div class="cart-item">
    <div class="cart-item-left">
        <div class="cart-item-delete">
            <button class="cart-item-delete-btn"> - </button>
        </div>
        <div class="cart-item-left-info">
            <div class="cart-item-quantity">
                <span class="cart-item-quantity-value">{{quantity}}</span>
            </div>
            <div class="cart-item-name">
                <span class="cart-item-name-value">{{name}}</span>
            </div>
        </div>
    </div>
    <div class="cart-item-right">
        <div class="cart-item-price">
            <span class="cart-item-price-value">{{price}}€</span>
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
    display: flex;
    width: 100%;
    justify-content: space-between;
    overflow: hidden;

    .cart-item-left{
        width: 100%;
    }
    .cart-item-left, .cart-item-right{
        display: flex;
        gap: 10px;
        align-items: center;
        .cart-item-name{
            color: white;
            text-transform: uppercase;
            font-weight: 700;
            font-size: .8125rem;
            word-wrap: wrap;
        }

        .cart-item-quantity{
            width: 30%;
        }
        .card-item-name{
            width: 60%;
        }
        .cart-item-quantity, .cart-item-price{
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: white;
            padding: 0.3125rem 1rem;
            width: 3.75rem;
            position: relative;
            border-radius: 1rem;
        }
        .cart-item-delete{
            margin-left: -2.125rem;
            height: 100%;
            .cart-item-delete-btn{
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
                height: 100%;
                width: 2rem;
                color: white;
                background-color: hsl(0, 100%, 45%);
                &:hover{
                    cursor: pointer;
                }
            }
        }
    }

    .cart-item-left-info{
        width: 100%;
        height: 100%;
        padding: .625rem;
        display: flex;
        gap: .625rem;
        align-items: center;
    }
    .cart-item-right{
        width: 30%;
        background-color: var(--primary-purple);
        padding-left: .3125rem;
        padding-right: .3125rem;
    }
}

.cart-item:hover .cart-item-delete{
    margin-left: 0;
}

@media only screen and (max-width: 890px) {
    .cart-item{
        flex-direction: column;

        .cart-item-right{
            width: 100%;
            padding: .625rem;
            align-items: center;
            justify-content: center;
        }
    }
}

@media only screen and (max-width: 546px) {
    .cart-item-left-info{
        flex-direction: column;

        .card-item-name{
            text-align: center;
        }
    }
}

</style>
