<template>
  <div class="restaurant-card">
    <router-link :to="{ name: 'restaurant', params: { slug: slug } }">
      <img :src="`storage/${restaurant.img}`" alt="" />
      <div class="overlay"></div>
      <div class="restaurant-card-right-bottom">
        <div class="restaurant-card-right-bottom-description">{{ restaurant.description }}</div>
        <div class="restaurant-card-right-bottom-name">{{ restaurant.name }}</div>
      </div>
    </router-link>
  </div>
</template>

<script>
export default {
  name: "MRestaurantCard",
  props: {
    restaurant: Object,
    slug: String,
  },
};
</script>

<style lang="scss" scoped>
  .restaurant-card{
    width: 100%;
    height: 12.5rem;
    position: relative;
    overflow: hidden;
    border-radius: 1.25rem;
    img{
      width: 100%;
      height: 100%;
    }
    .overlay {
      width: 100%;
      height: 100%;
      position: absolute;
      right: 0;
      bottom: 0;
      background-color: hsla(263, 66%, 64%, 0.6);
      transform: skewX(-30deg) translateX(40%);
    }
    .restaurant-card-right-bottom {
      color: white;
      position: absolute;
      right: 5%;
      bottom: 10%;
      .restaurant-card-right-bottom-description {
        font-size: 0.7rem;
        color: red;
      }
      .restaurant-card-right-bottom-name {
        text-transform: uppercase;
        font-weight: 700;
      }
    }
}
</style>