<template>
  <main>
    <div class="col-3 home-left py-3">
      <OAsideMenu />
    </div>
    <div class="col-9 home-right py-3">
      <MRestaurantCard class="col-1" v-for="restaurant in restaurants" :key="restaurant.slug" :slug="restaurant.slug" :restaurant="restaurant"/>
    </div>
    <router-link :to="{ name: 'checkout'}"> Test pagina di checkout</router-link>
  </main>
</template>

<script>
import OAsideMenu from '../organism/OAsideMenu.vue';
import MRestaurantCard from '../molecules/MRestaurantCard.vue';

export default {
    name: "BaseMain",
    components: {
      OAsideMenu,
      MRestaurantCard
    },
    data() {
        return {
            restaurants: []
        };
    },
    created() {
        axios.get("http://localhost:8000/api/restaurant")
            .then((response) => {
            this.restaurants = response.data;
        })
            .catch((e) => {
            console.log(e);
        });
    },
}
</script>

<style lang="scss" scoped>
  main{
    display: flex;
    margin: auto;
    max-width: 1200px;
    gap: 20px;
    .home-right{
      display: flex;
      flex-flow: row wrap;
      gap: 10px;
    }
  }
</style>