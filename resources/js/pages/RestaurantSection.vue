<template>
  <div class="restaurant-section">
    <div class="restaurant-section-header container-fluid p-0">
      <img :src="`/storage/${restaurant.img}`" alt="/" />
      <div class="row">
        <div class="restaurant-section-header-bottom col col-lg-4 mb-3">
          <ARestaurantCard />
        </div>
      </div>
    </div>
    <div class="restaurant-section-shop container-xl p-3">
      <div class="row">
        <div
          class="
            restaurant-section-shop-menu
            col-9 col-sm-10 col-lg-8
            d-flex
            align-items-center
            flex-column
            gap-4
          "
        >
          <ATitleCard
            :title="'Menù'"
            :error="true"
            :subTitle="!checkRestaurant"
            subText="Puoi ordinare da un solo ristorante alla volta!"
          />
          <div
            class="restaurant-section-shop-menu-plates d-flex flex-column gap-4"
          >
            <MPlateCard
              v-for="plate in plates"
              :key="plate.id"
              :plate="plate"
              @event-addPlate="addPlate"
              :is_currentRestaurant="!checkRestaurant"
            />
          </div>
        </div>
        <div
          class="
            restaurant-section-shop-cart
            col-3 col-sm-2 col-lg-4
            d-flex
            flex-column
            align-items-end
          "
        >
          <MCart
            :cart="this.cart"
            @event-delPlate="delPlate"
            @event-addQty="addQty"
            @event-emptyCart="emptyCart"
            @isOpenCart="isOpenCart"
            :in-checkout-page="false"
          />

          <ACheckoutButton class="px-3" />
          <AGoBackButton class="px-3" v-if="isVisibleHome ? 'invisible' : ''" />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import ARestaurantCard from "../components/atoms/ARestaurantCard.vue";
import ATitleCard from "../components/atoms/ATitleCard.vue";
import MPlateCard from "../components/molecules/MPlateCard.vue";
import MCart from "../components/molecules/MCart.vue";
import AGoBackButton from "../components/atoms/AGoBackButton.vue";
import ACheckoutButton from "../components/atoms/ACheckoutButton.vue";

export default {
  name: "RestaurantSection",
  components: {
    ARestaurantCard,
    ATitleCard,
    MPlateCard,
    MCart,
    AGoBackButton,
    ACheckoutButton,
  },
  data() {
    return {
      isVisibleHome: true,
      plates: [],
      restaurant: [],
      cart: [],
    };
  },
  watch: {
    cart: {
      handler: function () {
        localStorage.setItem("order", JSON.stringify(this.cart));
        //console.log("STO FUNZIONANDO");
      },
      deep: true,
    },
  },
  methods: {
    isOpenCart() {
      this.isVisibleHome = !this.isVisibleHome;
    },
    addQty(arg) {
      let result = this.cart.find((Element) => Element.id === arg.id);
      let idx = this.cart.findIndex((Element) => Element.id === arg.id);
      result.quantity++;
      if (result.quantity < 1) {
        this.cart.splice(idx, 1);
      } else {
        this.$set(this.cart, idx, result);
      }
    },
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
    emptyCart() {
      this.cart = [];
    },
    addPlate(arg, number) {
      let result = this.cart.find((Element) => Element.id === arg.id);
      if (result === undefined) {
        localStorage.setItem("restaurant", JSON.stringify(this.restaurant));
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
  computed: {
    checkRestaurant() {
      if (this.cart.length !== 0) {
        if (this.cart[0].restaurant_id === this.restaurant.id) {
          return true;
        } else {
          return false;
        }
      }

      return true;
    },
  },
};
</script>

<style lang="scss" scoped>
.restaurant-section {
  &-header {
    position: relative;
    img {
      min-height: 40vh;
      height: 40vh;
      width: 100%;
      object-fit: cover;
    }
    &-bottom {
      position: absolute;
      left: 0;
      bottom: 0;
    }
  }
  &-shop {
    position: relative;
  }
  .homeIcon {
    width: 100%;
  }
}
</style>