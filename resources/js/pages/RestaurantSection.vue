<template>
  <div class="restaurant-section">
    <div class="restaurant-section-header">
      <img :src="`/storage/${restaurant.img}`" alt="/" />
      <div class="container">
        <div class="restaurant-section-header-bottom-left">
          <ARestaurantCard />
        </div>
      </div>
    </div>
    <div class="restaurant-section-shop">
      <div class="restaurant-section-shop-menu col-8">
        <ATitleCard :title="'Menù'" />
        <div class="restaurant-section-shop-menu-plates">
          <MPlateCard
            v-for="plate in plates"
            :key="plate.id"
            :plate="plate"
            @event-addPlate="addPlate"
          />
        </div>
      </div>
      <div class="restaurant-section-shop-cart col-4">
        <MCart :cart="this.cart" @event-delPlate="delPlate" />
      </div>
    </div>
  </div>
</template>

<script>
import ARestaurantCard from "../components/atoms/ARestaurantCard.vue";
import ATitleCard from "../components/atoms/ATitleCard.vue";
import MPlateCard from "../components/molecules/MPlateCard.vue";
import MCart from "../components/molecules/MCart.vue";

export default {
  name: "RestaurantSection",
  components: { ARestaurantCard, ATitleCard, MPlateCard, MCart },
  data() {
    return {
      plates: [],
      restaurant: [],
      cart: [],
    };
  },
  watch: {
    cart: {
      handler: function () {
        localStorage.setItem("order", JSON.stringify(this.cart));
        console.log("STO FUNZIONANDO");
      },
      deep: true,
    },
  },
  methods: {
    delPlate(arg) {
      let result = this.cart.find((Element) => Element.id === arg.id);
      let idx = this.cart.findIndex((Element) => Element.id === arg.id);
      result.quantity--;
      if (result.quantity < 1) {
        this.cart.splice(idx, 1);
      } else {
        this.$set(this.cart, idx, result);
      }
    },
    addPlate(arg, number) {
      let result = this.cart.find((Element) => Element.id === arg.id);
      if (result === undefined) {
        arg.quantity = parseInt(number);
        this.cart.push(arg);
        this.$nextTick(function () {
          this.refreshCart();
        });
      }

      if (result !== undefined) {
        let idx = this.cart.findIndex((Element) => Element.id === arg.id);
        result.quantity += parseInt(number);
        this.$set(this.cart, idx, result);
      }
    },
    refreshCart() {
      let listCart = JSON.parse(localStorage.getItem("order"));
      if (listCart === null) {
        this.cart = [];
        console.log("carrello vuoto");
      } else {
        this.cart = listCart;
        console.log("carrello pieno");
      }
    },
  },
  created() {
    axios
      .get(`http://localhost:8000/api/plate/${this.$route.params.slug}/menu`)
      .then((response) => {
        this.plates = response.data;
      })
      .catch((e) => {
        console.log(e);
      });

    axios
      .get(`/api/restaurant/${this.$route.params.slug}`)
      .then((response) => {
        this.restaurant = response.data;
      })
      .catch((e) => {
        console.log(e);
      });
  },
  mounted() {
    this.refreshCart();
  },
};
</script>

<style lang="scss" scoped>
.restaurant-section {
  margin: auto;
  .restaurant-section-header {
    position: relative;
    img {
      min-height: 30vh;
      height: 30vh;
      width: 100%;
      object-fit: cover;
    }
    .restaurant-section-header-bottom-left {
      position: absolute;
      bottom: 5%;
      width: 20rem;
      margin: auto;
    }
  }
  .restaurant-section-shop {
    display: flex;
    max-width: 1200px;
    margin: auto;
    .restaurant-section-shop-menu {
      display: flex;
      flex-flow: column nowrap;
      align-items: center;
      padding: 20px;
      gap: 20px;
      .restaurant-section-shop-menu-plates {
        display: flex;
        flex-flow: column;
        gap: 10px;
      }
    }
    .restaurant-section-shop-cart {
      padding: 20px;
    }
  }
}
</style>