<template>
  <div class="restaurant-card">
    <router-link :to="{ name: 'restaurant', params: { slug: slug } }">
      <img :src="`storage/${restaurant.img}`" alt="" @click="send" />
      <div class="overlay"></div>
      <div class="overlay-text">
        <div class="restaurant-card-right">
          <div class="restaurant-card-right-top"></div>
          <div class="restaurant-card-right-bottom">
            <span class="restaurant-card-right-bottom-description">
              {{ restaurant.description }}
            </span>
            <span class="restaurant-card-right-bottom-name">
              {{ restaurant.name }}
            </span>
          </div>
        </div>
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
  methods: {
    send() {
      this.$emit("event-name", this.plate);
    },
  },
};
</script>

<style lang="scss" scoped>
img {
  width: 250px;
  height: 135px;
  object-fit: cover;
}
.restaurant-card {
  border-radius: 20px;
  width: 250px;
  height: 135px;
  position: relative;
  overflow: hidden;
  .overlay {
    width: 100%;
    height: 100%;
    position: absolute;
    right: 0;
    bottom: 0;
    background-color: hsla(263, 66%, 64%, 0.6);
    transform: skewX(-30deg) translateX(50%);
  }
  .overlay-text {
    position: absolute;
    right: 5%;
    bottom: 10%;
    .restaurant-card-right-bottom {
      color: white;
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
}
</style>