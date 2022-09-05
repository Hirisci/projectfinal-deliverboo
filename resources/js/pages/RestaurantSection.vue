<template>
  <div class="restaurant-section">
    <div class="restaurant-section-header">
      <div class="restaurant-section-header-bottom-left">
        <ARestaurantCard />
      </div>
    </div>
    <div class="restaurant-section-shop">
      <div class="restaurant-section-shop-menu col-8">
        <ATitleCard :title="'Menù'" />
        <div class="restaurant-section-shop-menu-plates">
          <MPlateCard
            v-for="plate in plates"
            :key="plate.id"
            :img="plate.img"
            :name="plate.name"
            :description="plate.description"
          />
        </div>
      </div>
      <div class="restaurant-section-shop-cart col-4">
        <MCart />
      </div>
    </div>
  </div>
</template>

<script>
import ARestaurantCard from "../components/atoms/ARestaurantCard.vue";
import ATitleCard from "../components/atoms/ATitleCard.vue";
import MPlateCard from "../components/molecules/MPlateCard.vue";
import MCart from "../components/molecules/MCart.vue";
export default {
  name: "RestaurantSection",
  components: { ARestaurantCard, ATitleCard, MPlateCard, MCart },
  data() {
    return {
      plates: [],
    };
  },
  created() {
    axios
      .get(`http://localhost:8000/api/plate/${this.$route.params.slug}/menu`)
      .then((response) => {
        this.plates = response.data;
      })
      .catch((e) => {
        console.log(e);
      });
  },
};
</script>

<style lang="scss" scoped>
.restaurant-section{
  max-width: 1200px;
  margin: auto;
  .restaurant-section-header{
    background-image: URL(https://salerno.occhionotizie.it/wp-content/uploads/sites/2/2020/10/mcdonalds-fast-food-shutterstock.jpg);
    min-height: 20vh;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    position: relative;
    .restaurant-section-header-bottom-left{
      position: absolute;
      left: 5%;
      bottom: 5%;
    }
  }
  .restaurant-section-shop{
    display: flex;
    .restaurant-section-shop-menu{
      display: flex;
      flex-flow: column nowrap;
      align-items: center;
      padding: 20px;
      gap: 20px;
      .restaurant-section-shop-menu-plates{
        display: flex;
        flex-flow: column;
        gap: 10px;
      }
    }
    .restaurant-section-shop-cart{
      padding: 20px;
    }
  }
}
</style>