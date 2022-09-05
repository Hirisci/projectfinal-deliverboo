<template>
  <div class="plate-card">
    <div class="overlay"></div>
    <div class="plate-card-left">
        <img :src="`/storage/${img}`" alt="Plate">
        <div class="plate-card-left-text">
            <div class="plate-card-left-text-nameAndPrice">
                <AAsideMenuTitle :title="name" class="title"/>
                <span class="plate-card-left-text-description-price"> {{price}} € </span>
            </div>
            <span class="plate-card-left-text-description"> {{description}} </span>
            <button class="btn-main"> Add To Cart</button>
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
    &:hover{
        background-color: red;
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
                    width: 100%;
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
                width: 15%;
            }
        }
    }
}
</style>