<template>
  <main>
        <div class="row">
            <div class="col-3 home-left p-3">
                <OAsideMenu @updateCheckFilter="updateFilterCheck" />
                </div>
                <div class="col-9 home-right p-3">
                <MRestaurantCard
                    class="col-1"
                    v-for="restaurant in filterRestaurants"
                    :key="restaurant.slug"
                    :slug="restaurant.slug"
                    :restaurant="restaurant"
                />
            </div>
        </div>
        <div class="row">
            <div class="mb-3">
                <ProcessSection/>
            </div>
        </div>
        <div class="row">
            <div class="">
                <GetInspiredSection/>
            </div>
        </div>
  </main>
</template>

<script>
import OAsideMenu from "../organism/OAsideMenu.vue";
import MRestaurantCard from "../molecules/MRestaurantCard.vue";
import ProcessSection from "../sections/ProcessSection.vue"
import GetInspiredSection from "../sections/GetInspiredSection.vue"

export default {
  name: "BaseMain",
  components: {
    OAsideMenu,
    MRestaurantCard,
    ProcessSection,
    GetInspiredSection,
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
main {
  margin: auto;
  max-width: 1800px;
  gap: 20px;
  .home-right {
    display: flex;
    flex-flow: row wrap;
    gap: 10px;
  }

  .row{
    width: 100%;
    margin-right: 0;
  }
}
</style>
