<template>
  <div class="plate-card">
    <div class="plate-card-desktop container-fluid d-none d-md-block">
      <div class="row d-flex">
        <div class="plate-card-desktop-img col-4 p-0">
          <img :src="`/storage/${plate.img}`" alt="Plate" />
        </div>
        <div class="plate-card-desktop-info col-8 p-0">
          <div class="row plate-card-desktop-info-top ms-0">
            <AAsideMenuTitle :title="plate.name" class="col-10 ps-2"/>
            <div class="price-value col-2 d-flex align-items-center">{{ plate.price.toFixed(2) }} €</div>
          </div>
          <div class="row plate-card-desktop-info-bottom d-flex flex-column p-1 gap-5">
            <div class="plate-card-desktop-left-text-description">{{ plate.description }}</div>
            <div class="add-to-cart-container d-flex justify-content-end">
              <input class="quantity" value="1" type="number" :v-model="quantity" min="0"/>
              <button class="btn-main btn-purple" @click="add">Add To Cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="plate-card-mobile container-fluid d-md-none">
      <div class="row plate-card-mobile-title">
        <AAsideMenuTitle :title="plate.name" class="col-9 ps-3"/>
        <div class="price-value col-3 d-flex align-items-center justify-content-center">{{ plate.price.toFixed(2) }} €</div>
      </div>
      <div class="row plate-card-mobile-img">
        <img :src="`/storage/${plate.img}`" alt="Plate" />
      </div>
      <div class="row plate-card-mobile-description mb-2">
        <div class="plate-card-desktop-left-text-description">{{ plate.description }}</div>
      </div>
      <div class="row plate-card-mobile-price d-flex justify-content-end gap-2 p-2">
        <input class="quantity col-3" value="1" type="number" :v-model="quantity" min="0"/>
        <button class="circle col-3 p-0" @click="add">+</button>
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
  },
};
</script>

<style lang="scss" scoped>
.plate-card{
  .plate-card-desktop{
    background-color: var(--secondary-purple);
    border-radius: 1.25rem;
    border: .125rem solid var(--primary-purple);
    overflow: hidden;
    img{
      border-top-left-radius: 1.25rem;
      border-bottom-left-radius: 1.25rem;
      height: 100%;
      width: 100%;
    }
    &-info-top{
      background-color: white;
      color: var(--primary-purple);
      font-weight: bolder;
      border-top-right-radius: 1.25rem;
      border-bottom: .125rem solid var(--primary-purple);
    }
    &-info-bottom{
      .quantity {
        background-color: white;
        padding: .3125rem 1rem;
        width: 4.375rem;
        position: relative;
        border-radius: 1rem;
      }
    }
    transition: transform .3s ease-in-out;
    
    // Effetto hover della card
    &:hover {
      transform: scale(1.05);
    }
  }
  .plate-card-mobile{
    background-color: var(--secondary-purple);
    border-radius: 1.25rem;
    border: .125rem solid var(--primary-purple);
    overflow: hidden;
    &-title{
      background-color: white;
      border-bottom: .125rem solid var(--primary-purple);
      color: var(--primary-purple);
      font-weight: bolder;
    }
    .quantity{
      background-color: white;
      padding: .3125rem 1rem;
      width: 4.375rem;
      position: relative;
      border-radius: 1rem;
    }
    .circle{
      color: var(--tertiary-purple);
      background-color: var(--primary-purple);
      border-radius: 50%;
      width: 2rem;
      height: 2rem;
    }
  }
  input{
    border: .0625rem solid var(--primary-purple);
  }
}
</style>