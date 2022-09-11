<template>
  <div class="plate-card row d-flex overflow-hidden">
    <div class="col-12 col-md-4 p-0 overflow-hidden">
      <div class="row">
        <div class="col-12 d-flex align-items-center plate-card-title">
          <AAsideMenuTitle :title="plate.name" class="col-10 ps-2 d-md-none"/>
          <div class="price-value col-2 d-md-none">{{ plate.price.toFixed(2) }} €</div>
        </div>
      </div>
      <img :src="`/storage/${plate.img}`" alt="Plate" />
    </div>
    <div class="col-12 col-md-8 d-flex flex-column">
      <div class="row">
        <div class="col-12 p-0 d-flex align-items-center plate-card-title">
          <AAsideMenuTitle :title="plate.name" class="col-10 ps-2 d-none d-md-block"/>
          <div class="price-value col-2 d-none d-md-block">{{ plate.price.toFixed(2) }} €</div>
        </div>
      </div>
      <div class="plate-card-description row d-flex">
        <div class="col-12">{{ plate.description }}</div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="add-to-cart-container d-flex justify-content-end py-2 gap-2">
            <input class="quantity" value="1" type="number" v-model="quantity" min="0"/>
            <button class="btn-main btn-purple d-none d-md-block" @click="add" :disabled="isActiveRestaurant == true">Add To Cart</button>
            <button class="btn-main btn-purple d-md-none" @click="add" :disabled="isActiveRestaurant == true">+</button>
          </div>
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
    isActiveRestaurant: Boolean,
  },
  components: { AAsideMenuTitle },
  methods: {
    add() {
      this.$emit("event-addPlate", this.plate, this.quantity);
    },
  },
};
</script>

<style lang="scss" scoped>
.plate-card{
  .overflow-hidden{
    overflow: hidden;
  }
  border-radius: 20px;
  border: 2px solid var(--primary-purple);
  background-color: var(--secondary-purple);
  transition: transform ease-in-out .3s;
  img{
    width: 100%;
    height: 100%;
    aspect-ratio: 1/1;
    object-fit: cover;
  }
  &-title{
    background-color: var(--tertiary-purple);
    border-bottom: 2px solid var(--primary-purple);
  }
  &-description{
    flex-grow: 1;
  }
  .price-value{
    color: var(--primary-purple);
    font-weight: bolder;
  }
  input {
    border: 0.0625rem solid var(--primary-purple);
  }
  &:hover {
    transform: scale(1.05);
  }
  .quantity {
    background-color: white;
    padding: 0.3125rem 1rem;
    width: 4.375rem;
    position: relative;
    border-radius: 1rem;
  }
}

// .plate-card {
//   .plate-card-desktop {
//     background-color: var(--secondary-purple);
//     border-radius: 1.25rem;
//     border: 0.125rem solid var(--primary-purple);
//     overflow: hidden;
//     img {
//       border-top-left-radius: 1.25rem;
//       border-bottom-left-radius: 1.25rem;
//       height: 100%;
//       width: 100%;
//     }
//     &-info{
//       &-top {
//         background-color: white;
//         color: var(--primary-purple);
//         font-weight: bolder;
//         border-top-right-radius: 1.25rem;
//         border-bottom: 0.125rem solid var(--primary-purple);
//       }
//       &-bottom {
//         .quantity {
//           background-color: white;
//           padding: 0.3125rem 1rem;
//           width: 4.375rem;
//           position: relative;
//           border-radius: 1rem;
//         }
//       }
//     }
//     transition: transform 0.3s ease-in-out;

//     // Effetto hover della card
//     &:hover {
//       transform: scale(1.05);
//     }
//   }
//   .plate-card-mobile {
//     background-color: var(--secondary-purple);
//     border-radius: 1.25rem;
//     border: 0.125rem solid var(--primary-purple);
//     overflow: hidden;
//     &-title {
//       background-color: white;
//       border-bottom: 0.125rem solid var(--primary-purple);
//       color: var(--primary-purple);
//       font-weight: bolder;
//     }
//     .quantity {
//       background-color: white;
//       padding: 0.3125rem 1rem;
//       width: 4.375rem;
//       position: relative;
//       border-radius: 1rem;
//     }
//     .circle {
//       color: var(--tertiary-purple);
//       background-color: var(--primary-purple);
//       border-radius: 50%;
//       width: 2rem;
//       height: 2rem;
//     }
//   }
//   input {
//     border: 0.0625rem solid var(--primary-purple);
//   }
// }
</style>