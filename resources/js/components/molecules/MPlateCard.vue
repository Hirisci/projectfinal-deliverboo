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
          <input class="quantity" value="1" type="number" v-model="quantity" />
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
  data() {
    return {
      quantity: 1,
    };
  },
  props: {
    plate: Object,
  },
  components: { AAsideMenuTitle },
  methods: {
    add() {
      this.$emit("event-addPlate", this.plate, this.quantity);
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
        display: flex;
        gap: 0.5rem;
        margin-left: auto;
        padding: 0.5rem;
      }
    }
  }
  .quantity {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: white;
    padding: 0.3125rem 1rem;
    width: 4.375rem;
    position: relative;
    border-radius: 1rem;
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