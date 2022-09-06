<template>
  <div class="plate-card">
    <div class="overlay"></div>
    <div class="plate-card-left">
      <img :src="`/storage/${plate.img}`" alt="Plate" />
      <div class="plate-card-left-text">
        <div class="plate-card-left-text-nameAndPrice">
          <div class="title">
            <AAsideMenuTitle :title="plate.name" />
          </div>
          <div class="plate-card-left-text-description-price">
            <p class="price-value">{{ plate.price.toFixed(2) }} €</p>
          </div>
        </div>
        <span class="plate-card-left-text-description">
          {{ plate.description }}
        </span>
        <div class="add-to-cart-container">
          <button class="btn-main btn-purple" @click="add">Add To Cart</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import AAsideMenuTitle from "../atoms/AAsideMenuTitle.vue";
export default {
  name: "MPlateCard",
  props: {
    plate: Object,
  },
  components: { AAsideMenuTitle },
  methods: {
    add() {
      this.$emit("event-addPlate", this.plate);
    },
    //function () {
    //console.log("hai premuto il bottone", this.plate);
    //   this.$emit("addPlate", this.plate);
  },
};
</script>

<style lang="scss" scoped>
.plate-card {
  background-color: var(--secondary-purple);
  border-radius: 20px;
  display: flex;
  position: relative;
  min-height: 10.5rem;
  min-width: 47.5rem;
  &:hover {
    background-color: #b285fa;
  }
  &-left {
    display: flex;
    width: 100%;
    img {
      width: 200px;
      aspect-ratio: 16/9;
      border-top-left-radius: 20px;
      border-bottom-left-radius: 20px;
    }
    &-text {
      display: flex;
      flex-flow: column;
      width: 100%;
      &-nameAndPrice {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        .title {
          min-width: 88%;
        }
      }
      &-description {
        padding: 20px;
      }
      &-description-price {
        align-self: center;
        background-color: white;
        color: var(--primary-purple);
        font-weight: bolder;
        height: 100%;
        min-width: 10%;
        padding: 5px;
        border-radius: 0 15px 0 10px;
        .price-value {
          width: fit-content;
          margin: auto;
        }
      }
      .add-to-cart-container {
        margin-left: auto;
        padding: 5px;
      }
    }
  }
}

// Effetto hover della card
.plate-card:hover {
  transform: scale(1.07);
}

// Effetto hover della card
.plate-card:hover {
  transform: scale(1.07);
}
</style>