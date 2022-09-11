<template>
  <div class="thank-you container-lg px-5">
    <div class="thank-you-title row py-5">
        <div class="d-flex justify-content-center align-items-center col-12 col-lg-12">
            Grazie per il tuo ordine, {{nome}}!
        </div>
    </div>
    <div class="thank-you-subtitle row py-3">
        <div class="d-flex justify-content-center align-items-center col-12 col-lg-12">
            Un nostro corriere è appena partito dalla tana per andare a ritirare il tuo ordine e portarlo alla tua porta!
        </div>
    </div>
    <div class="thank-you-summary row py-3 mb-3">
        <div class="d-flex justify-content-center col-lg-2">
            Riepilogo Ordine:
        </div>
        <div class="d-flex col-12 col-lg-4 d-flex flex-column gap-3">
            <div class="thank-you-summary-total">Totale Ordine: {{total}}€</div>
            <div class="thank-you-summary-address">Indirizzo di consegna: {{address}}</div>
            <div class="thank-you-summary-number">Numero di riferimento: {{phoneNumber}}</div>
            <div class="thank-you-summary-ring">Nome sul campanello: {{ring}}</div>
            <div class="thank-you-summary-plates">Lista piatti: {{plate}}</div>
            <AGoBackButton />
        </div>
        <div class="d-flex justify-content-center align-items-center col-12 col-lg-6 py-2">
            <img src="../imgs/Thank-You-Bara.png" alt="Thank-You!">
        </div>
    </div>
  </div>
</template>

<script>
import AGoBackButton from './AGoBackButton.vue';

export default {
    name: "AOrderSuccess",
    props: {
        nome: String,
        total: String,
        address: String,
        phoneNumber: String,
        ring: String,
        cart: Array,
    },
    components: { AGoBackButton }
}
</script>

<style lang="scss" scoped>
.thank-you{
    background-color: var(--primary-purple);
    color: var(--tertiary-purple);
    font-weight: 700;
    &-title{
        font-size: 3rem;
    }
    &-subtitle{
        font-size: 1.2rem;
    }
    &-summary{
        border: 2px solid var(--secondary-purple);
        border-radius: 20px;
    }
}
</style>