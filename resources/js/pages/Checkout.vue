<template>
  <div class="container-fluid p-0">
    <AJumbotron />
    <div class="form container-lg p-3">
      <div class="row d-flex justify-content-between">
          <div class="user-form p-3 col-lg-6">
            <div class="col-12 col-lg-4 p-0">
              <AAsideMenuTitle :title="'Checkout'"/>
            </div>
            <form>
              <div class="form-group col-sm-12 col-5">
                <div class="username">
                  <label for="client_name">Nome</label>
                  <input type="text" class="form-control" id="client_name" placeholder="Nome">
                </div>
              </div>
              <div class="form-group col-sm-12 col-5">
                <div class="userSurname">
                  <label for="client_surname">Cognome</label>
                  <input type="text" class="form-control" id="client_surname" placeholder="Cognome">
                </div>
              </div>
              <div class="form-group">
                <label for="client_city">Città</label>
                <input type="text" class="form-control" id="client_city" placeholder="Città">
              </div>
              <div class="form-group col-md-6">
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
          carrellooo
          dai cazzo Gianluca
          <MCart :cart="this.cart"/>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import AJumbotron from '../components/atoms/AJumbotron.vue';
import MCart from '../components/molecules/MCart.vue';
import AAsideMenuTitle from '../components/atoms/AAsideMenuTitle.vue';

export default {
    name: "Checkout",
    components: { AJumbotron, MCart, AAsideMenuTitle },
}
</script>

<style lang="scss" scoped>
.user-form {
  background-color: var(--secondary-purple);
  border-radius: 20px;
  display: flex;
  flex-flow: column;
  gap: 10px;
  padding: 20px 0px;
}  
.cart{
    background-color: red;
}
.form-group {
  margin: 15px 0;
}
label {
  margin-bottom: 5px;
}
</style>