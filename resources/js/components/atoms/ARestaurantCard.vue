<template>
  <div class="restaurant-card">
    <div class="restaurant-card-img">
      <img :src="img" alt="Restaurant Image">
    </div>
    <div class="restaurant-card-text">
      <div class="restaurant-card-text-title">
         <h4> {{title}} </h4>
      </div>
      <div class="restaurant-card-text-stars">
        <!-- TO IMPLEMENT -->
      </div>
      <div class="restaurant-card-text-description">
        <span class="restaurant-card-text-description-span"> {{description}} </span>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'ARestaurantCard',
  props: {
    img: Image,
    title: String,
    description: String,
  }
}
</script>

<style lang="scss" scoped>
  .restaurant-card{
    display: flex;
    align-items: center;
    background-color: (var(--primary-purple), 0.5);
    border-radius: 20px;
    padding: 10px;
    .restaurant-card-img img{
      width: 100px;
      height: 70px;
    }
    .restaurant-card-text{
      color: white;
      .restaurant-card-text-description{
        .restaurant-card-text-description-span{
          font-size: 0.7rem;
        }
      }
    }
  }
</style>