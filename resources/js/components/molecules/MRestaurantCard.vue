<template>
  <div class="restaurant-card">
    <div class="overlay">
      <div class="restaurant-card-right">
        <div class="restaurant-card-right-top"></div>
        <div class="restaurant-card-right-bottom">
          
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
    name:'MRestaurantCard',
    props: {
      name: String,
      category: String,
      image: String,
    }
}
</script>

<style lang="scss" scoped>
  .restaurant-card{
    background-image: image;
    object-fit: cover;
  }
</style>