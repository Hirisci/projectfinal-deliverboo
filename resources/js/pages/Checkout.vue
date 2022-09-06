<template>
  <div class="container-fluid p-0">
    <AJumbotron />
    <div class="form container-lg">
      <div class="row">
        <div class="col-12">
          <h2>CHECKOUT</h2>
        </div>
      </div>
      <div class="row d-flex">
        <div class="col-12 col-lg-8">
          <form>
            <div class="form-group">
              <label for="client_city">Città</label>
              <input type="text" class="form-control" id="client_city" placeholder="Città">
            </div>
            <div class="form-group col-md-4">
            <label for="client_state">Stato</label>
            <select id="client_state" class="form-control">
              <option selected>Scegli</option>
              <option>Italia</option>
              <option>Svizzera</option>
            </select>
            </div>
            <div class="form-group">
              <label for="client_zip">CAP</label>
              <input type="text" class="form-control" id="client_zip" placeholder="CAP">
            </div>
            <div class="form-group">
              <label for="client_address">Indirizzo</label>
              <input type="text" class="form-control" id="client_address" placeholder="Indirizzo">
            </div>
            <div class="form-group">
              <label for="client_name">Nome sul campanello</label>
              <input type="text" class="form-control" id="client_name" placeholder="Nome sul campanello">
            </div>
            <div class="form-group">
              <label for="client_number">Numero di telefono</label>
              <input type="text" class="form-control" id="client_number" placeholder="Cellulare">
            </div>
          </form>
        </div>
        <div class="d-none d-lg-block col-lg-4 cart">
          <MCart :cart="this.cart"/>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import AJumbotron from '../components/atoms/AJumbotron.vue';
import MCart from '../components/molecules/MCart.vue';

export default {
    name: "Checkout",
    components: { AJumbotron, MCart },
}
</script>

<style lang="scss" scoped>
  *{
    background-color: rgba($color: blue, $alpha: .3);
    // min-height: 200px;
  }
  .cart{
    background-color: red;
  }
</style>