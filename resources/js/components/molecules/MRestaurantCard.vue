<template>
    <div class="restaurant-card">
      <div class="overlay"></div>
      <div class="overlay-text">
        <div class="restaurant-card-right">
            <div class="restaurant-card-right-top"></div>
            <div class="restaurant-card-right-bottom">
              <span class="restaurant-card-right-bottom-description"> {{description}} </span>
              <span class="restaurant-card-right-bottom-name"> {{name}} </span>
              <router-link :to="{ name: 'restaurant', params: { slug: slug } }">Here</router-link>
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
      description: String,
      category: String,
      image: String,
      id: String,
      slug: String,
    }
}
</script>

<style lang="scss" scoped>
  .restaurant-card{
    background-image: URL(https://salerno.occhionotizie.it/wp-content/uploads/sites/2/2020/10/mcdonalds-fast-food-shutterstock.jpg);
    background-size: cover;
    border-radius: 20px;
    min-width: 300px;
    min-height: 130px;
    position: relative;
    overflow: hidden;
    .overlay{
      width: 100%;
      height: 100%;
      position: absolute;
      right: 0;
      bottom: 0;
      background-color: hsla(263, 66%, 64%, .6);
      transform: skewX(-30deg) translateX(50%);
    }
    .overlay-text{
      position: absolute;
      right: 5%;
      bottom: 10%;
      .restaurant-card-right-bottom{
        color: white;
        .restaurant-card-right-bottom-description{
          font-size: .7rem;
        }
        .restaurant-card-right-bottom-name{
          text-transform: uppercase;
          font-weight: 700;
        }
      }
    }
  }
</style>