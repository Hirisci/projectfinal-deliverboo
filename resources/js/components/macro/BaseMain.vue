<template>
  <main>
    <div class="col-3 home-left py-3">
      <OAsideMenu @updateCheckFilter="updateFilterCheck" />
    </div>
    <div class="col-9 home-right py-3">
      <MRestaurantCard
        class="col-1"
        v-for="restaurant in filterRestaurants"
        :key="restaurant.slug"
        :slug="restaurant.slug"
        :restaurant="restaurant"
      />
    </div>
  </main>
</template>

<script>
import OAsideMenu from "../organism/OAsideMenu.vue";
import MRestaurantCard from "../molecules/MRestaurantCard.vue";

export default {
  name: "BaseMain",
  components: {
    OAsideMenu,
    MRestaurantCard,
  },
  data() {
    return {
      restaurants: [],
      filterCategory: [],
    };
  },
  methods: {
    updateFilterCheck: function (value) {
      this.filterCategory = value;
    },
  },
  computed: {
    filterRestaurants: function () {
      let array = [];
      if (this.filterCategory.length === 0) {
        return this.restaurants;
      } else {
        array = [];
        this.restaurants.forEach((item) => {
          console.log(item.name);
          item.categories.forEach((elem) => {
            console.log(elem.name);
            if (this.filterCategory.includes(elem.name)) {
              console.log(elem.name, "é incluso");
              if (!array.includes(item)) {
                array.push(item);
              }
            } else {
              console.log(elem.name, "é non incluso");
            }
          });
        });
        return array;
      }
    },
  },

  created() {
    axios
      .get("http://localhost:8000/api/restaurant")
      .then((response) => {
        this.restaurants = response.data;
      })
      .catch((e) => {
        console.log(e);
      });
  },
};
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