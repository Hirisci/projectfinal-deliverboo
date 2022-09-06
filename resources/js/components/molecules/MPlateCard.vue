<template>
  <div class="plate-card container-fluid">
    <div class="row">
      <div class="plate-card-img col-4 p-0">
        <img :src="`/storage/${plate.img}`" alt="Plate" />
      </div>
      <div class="plate-card-info col-8 p-0">
        <div class="row plate-card-info-top ms-0">
          <AAsideMenuTitle :title="plate.name" class="col-10 ps-0"/>
            <span class="price-value col-2 d-flex align-items-center">{{ plate.price.toFixed(2) }} €</span>
        </div>
        <div class="row plate-card-info-bottom d-flex flex-column p-3 gap-5">
          <span class="plate-card-left-text-description">{{ plate.description }}</span>
          <div class="add-to-cart-container d-flex justify-content-end mt-auto">
            <input class="quantity" value="1" type="number" v-model="quantity" min="0"/>
            <button class="btn-main btn-purple" @click="add">Add To Cart</button>
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
  .plate-card{
    background-color: var(--secondary-purple);
    border-radius: 20px;
    border: 2px solid var(--primary-purple);
    overflow: hidden;
    img{
      border-top-left-radius: 20px;
      border-bottom-left-radius: 20px;
      height: 100%;
      width: 100%;
    }
    &-info-top{
      background-color: white;
      color: var(--primary-purple);
      font-weight: bolder;
      border-top-right-radius: 20px;
      border-bottom: 2px solid var(--primary-purple);
    }
    &-info-bottom{
      .quantity {
        background-color: white;
        padding: 0.3125rem 1rem;
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
  input{
    border:1px solid var(--primary-purple);
  }
</style>