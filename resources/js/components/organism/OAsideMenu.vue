<template>
  <div class="aside-menu">
    <!-- <div class="aside-menu-search">
      <AAsideMenuTitle class="mb-3" :title="'Nome Ristorante'" />
      <div class="ps-3 aside-menu-search-container">
        <input type="text" v-model="filterName" />
      </div> -->
    <!-- </div> -->
    <div class="aside-menu-categories">
      <AAsideMenuTitle class="mb-3" :title="'Categorie'" />
      <div class="ps-3 aside-menu-categories-list">
          <div class="list-item" v-for="category in categories" :key="category.id">
                <input
                  type="checkbox"
                  :id="category.name"
                  :name="category.name"
                  :value="category.name"
                  v-model="filterCategory"
                  @change="updateCheckFilter()"
                />
                <label :for="category.name"> {{ category.name }} </label>
          </div>
      </div>
    </div>
    <!-- <div class="aside-menu-filters">
        <AAsideMenuTitle class="mb-3" :title="'Filtri'"/>
        <div class="aside-menu-filters-container ">
            <div class="ps-3 aside-menu-filters-price">
                <label for="aside-menu-filters-price-filter">Prezzo</label>
                <select name="aside-menu-filters-price-filter" id="aside-menu-filters-price-filter">
                    <option value="increasing">Crescente</option>
                    <option value="decreasing">Decrescente</option>
                </select>
            </div>
            <div class="ps-3 aside-menu-filters-valutation">
                <label for="aside-menu-filters-valutation-filter">Voto</label>
                <select name="aside-menu-filters-valutation-filter" id="aside-menu-filters-valutation-filter">
                    <option value="increasing">Crescente</option>
                    <option value="decreasing">Decrescente</option>
                </select>
            </div>
        </div>
    </div> -->
  </div>
</template>

<script>
import AAsideMenuTitle from "../atoms/AAsideMenuTitle.vue";
export default {
  name: "OAsideMenu",
  components: { AAsideMenuTitle },
  data() {
    return {
      categories: [],
      filterCategory: [],
      filterName: [],
    };
  },
  methods: {
    updateCheckFilter: function () {
      this.$emit("updateCheckFilter", this.filterCategory);
    },
  },
  created() {
    axios
      .get("http://localhost:8000/api/category")
      .then((response) => {
        this.categories = response.data;
      })
      .catch((e) => {
        console.log(e);
      });
  },
};
</script>

<style lang="scss" scoped>
.aside-menu {
  background-color: var(--secondary-purple);
  border-radius: 1.25rem;
  display: flex;
  flex-flow: column;
  gap: .625rem;
  padding: 1.25rem 0rem;
  .aside-menu-categories {
    .aside-menu-categories-list {
      display: flex;
      flex-flow: row wrap;
      gap: .625rem;
      .list-item{
        width: 40%;
      }
    }
  }
  .aside-menu-filters {
    .aside-menu-filters-container {
      display: flex;
      flex-flow: column;
      gap: .3125rem;
    }
  }
}
</style>