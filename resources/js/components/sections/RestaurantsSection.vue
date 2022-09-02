<template>
  <section>
    <ul>
      <li v-for="restaurant in restaurants" :key="restaurant.slug">
        {{restaurant.name}}
      </li>
    </ul>
  </section>
</template>

<script>
export default {
    name:'RestaurantSection',
    data() {
        return {
            restaurants: []
        };
    },
    created() {
        axios.get("http://localhost:8000/api/restaurant")
            .then((response) => {
            this.restaurants = response.data;
        })
            .catch((e) => {
            console.log(e);
        });
    },
}
</script>

<style>

</style>