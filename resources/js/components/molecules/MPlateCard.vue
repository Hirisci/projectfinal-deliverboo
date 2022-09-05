<template>
  <div class="plate-card">
    <div class="overlay"></div>
    <div class="plate-card-left">
        <img :src="`/storage/${img}`" alt="Plate">
        <div class="plate-card-left-text">
            <div class="plate-card-left-text-nameAndPrice">
                <div class="title">
                    <AAsideMenuTitle :title="name" /> 
                </div>
                <div class="plate-card-left-text-description-price">
                    <p> {{price}} € </p>
                </div>               
            </div>
            <span class="plate-card-left-text-description"> {{description}} </span>
            <div class="add-to-cart-container"><button class="btn-main"> Add To Cart</button></div>
        </div>
    </div>
  </div>
</template>

<script>
import AAsideMenuTitle from '../atoms/AAsideMenuTitle.vue';
export default {
    name: "MPlateCard",
    props: {
        img: String,
        name: String,
        description: String,
        price: String,
    },
    components: { AAsideMenuTitle }
}
</script>

<style lang="scss" scoped>
.plate-card{
    background-color: var(--secondary-purple);
    border-radius: 20px;
    display: flex;
    position: relative;
    opacity: 0.9;
    min-height: 10.5rem;
    min-width: 47.5rem;
    &:hover{
        opacity: 1;
    }
    &-left{
        display: flex;
        width: 100%;
        img{
            width: 200px;
            aspect-ratio: 16/9;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
        }
        &-text{
            display: flex;
            flex-flow: column;
            width: 100%;
            &-nameAndPrice{
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: space-between;
                .title{
                    min-width: 90%;
                }
            }
            &-description{
                padding: 20px;
            }
            &-description-price{
                align-self: center;
                background-color: white;
                color: var(--primary-purple);
                font-weight: bolder;
                height: 100%;
                min-width: 8%;
                padding: 4px 0px 4px 4px ;
                border-radius: 0 15px 0 0;
            }
            .add-to-cart-container{
                margin-left: auto;
                padding: 5px;
            }
        }
    }
}
</style>