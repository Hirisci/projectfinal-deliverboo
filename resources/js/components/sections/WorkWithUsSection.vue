<template>
  <section
    class="section-work container-fluid m-0 d-flex justify-content-center"
  >
    <div class="row d-flex p-0 container-lg py-5">
      <div
        class="
          col-12 col-md-4
          d-flex
          flex-column
          justify-content-between
          align-items-center
          mb-3
          text-center
        "
      >
        <div class="img-container">
          <img src="../imgs/rider.jpg" alt="Rider" />
        </div>

        <h3 class="mt-3 mb-4">DIVENTA UN RIDER</h3>

        <p class="mb-3">
          Diventa il capo di te stesso! Goditi flessibilità, libertà e guadagni
          competitivi effettuando consegne con Deliveboo.
        </p>

        <button class="btn-join-us mb-3">Unisciti a noi!</button>
      </div>
      <div
        class="
          col-12 col-md-4
          d-flex
          flex-column
          justify-content-between
          align-items-center
          mb-3
          text-center
        "
      >
        <div class="img-container">
          <img src="../imgs/chef.jpg" alt="Chef" />
        </div>

        <h3 class="mt-3 mb-4">DIVENTA UN PARTNER</h3>

        <p class="mb-3">
          Cresci con Deliveboo! La nostra tecnologia e la nostra base di utenti
          possono aiutarti a incrementare le vendite e aprire nuove opportunità!
        </p>

        <button class="btn-join-us mb-3">Unisciti a noi!</button>
      </div>
      <div
        class="
          col-12 col-md-4
          d-flex
          flex-column
          justify-content-between
          align-items-center
          mb-3
          text-center
        "
      >
        <div class="img-container">
          <img src="../imgs/work.jpg" alt="Lavoro" />
        </div>

        <h3 class="mt-3 mb-4">COLLABORA CON NOI</h3>

        <p class="mb-3">
          Pronto per una nuova ed entusiasmante sfida? Se sei ambizioso, umile e
          ami lavorare con gli altri, mettiti in contatto con noi!
        </p>

        <button class="btn-join-us mb-3">Unisciti a noi!</button>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "WorkWithUsSection",
};
</script>

<style lang="scss" scoped>
.section-work {
  background-color: var(--tertiary-purple);

  .img-container {
    display: flex;
    justify-content: center;

    img {
      border-radius: 1.25rem;
      border: 0.125rem solid var(--primary-purple);
      width: 70%;
      min-width: 15rem;
    }
  }

  h3 {
    color: var(--primary-purple);
  }

  p {
    width: 80%;
  }

  .btn-join-us {
    border: 0.1875rem solid var(--primary-purple);
    color: var(--primary-purple);
    border-radius: 1.25rem;
    font-weight: bold;
    padding: 0.625rem;
  }

  .btn-join-us:hover {
    background-color: var(--primary-purple);
    color: white;
  }
}
</style>
