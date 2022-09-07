<template>
  <main class="container">
    <div class="row d-flex">
      <div class="col-12 col-lg-3 home-left p-3">
        <OAsideMenu @updateCheckFilter="updateFilterCheck" />
      </div>
      <div class="col-12 col-lg-9 home-right p-3">
        <MRestaurantCard
          v-for="restaurant in filterRestaurants"
          :key="restaurant.slug"
          :slug="restaurant.slug"
          :restaurant="restaurant"
        />
      </div>
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
          item.categories.forEach((elem) => {
            if (this.filterCategory.includes(elem.name)) {
              if (!array.includes(item)) {
                array.push(item);
              }
            } else {
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
.home-right {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(15.625rem, 1fr));
  gap: 1rem;
}
</style>
