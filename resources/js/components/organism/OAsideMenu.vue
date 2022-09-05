<template>
  <div class="aside-menu">
    <div class="aside-menu-search">
      <AAsideMenuTitle class="mb-3" :title="'Nome Ristorante'" />
      <div class="ps-3 aside-menu-search-container">
        <input type="text" v-model="filterName" />
      </div>
    </div>
    <div class="aside-menu-categories">
      <AAsideMenuTitle class="mb-3" :title="'Categorie'" />
      <ul class="ps-3 aside-menu-categories-list">
        <li v-for="category in categories" :key="category.id">
          <input
            type="checkbox"
            :id="category.name"
            :name="category.name"
            :value="category.name"
            v-model="filterCategory"
          />
          <label :for="category.name"> {{ category.name }} </label>
        </li>
      </ul>
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
  border-radius: 20px;
  display: flex;
  flex-flow: column;
  gap: 10px;
  padding: 20px 0px;
  .aside-menu-categories {
    .aside-menu-categories-list {
      display: flex;
      flex-flow: row wrap;
      gap: 10px;
    }
  }
  .aside-menu-filters {
    .aside-menu-filters-container {
      display: flex;
      flex-flow: column;
      gap: 5px;
    }
  }
}
</style>