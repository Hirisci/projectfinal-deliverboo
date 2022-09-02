<template>
  <div>
    <h1>Le mucche fanno Mu, Gianluca fa "io al pomeriggio dormo"</h1>
  </div>
</template>

<script>
import Axios from 'axios';

export default {
    name: 'App',
    data() {
      return {
        restaurants: []
      };
    },
    created() {
      axios.get('http://localhost:8000/api/restaurant')
      .then((response) => {
        this.restaurants = response.data;
      })
      .catch((e) => {
        console.log(e);
      })
    },
}
</script>

<style>

</style>