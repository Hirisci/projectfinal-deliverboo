<template>
  <div class="restaurant-card">
    <div class="restaurant-card-img">
      <img :src="`/storage/${restaurant.logo}`" alt="Restaurant Image">
    </div>
    <div class="restaurant-card-text">
      <div class="restaurant-card-text-name">
         <h4> {{restaurant.name}} </h4>
      </div>
      <div class="restaurant-card-text-stars">
        <!-- TO IMPLEMENT -->
      </div>
      <div class="restaurant-card-text-description">
        <span class="restaurant-card-text-description-span"> {{restaurant.address}} </span>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'ARestaurantCard',
  data() {
    return {
      restaurant: []
    }
  },
  created() {
        axios.get(`/api/restaurant/${this.$route.params.slug}`)
            .then((response) => {
            this.restaurant = response.data;
        })
        .catch((e) => {
          this.$router.push({name: 'page-404'});
        })
  },
}
</script>

<style lang="scss" scoped>
  .restaurant-card{
    display: flex;
    align-items: center;
    background-color: hsla(263, 66%, 64%, .6);
    border-radius: 20px;
    padding: 10px;
    gap: 10px;
    .restaurant-card-img img{
      width: 110px;
      height: 70px;
      border-radius: .625rem;
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