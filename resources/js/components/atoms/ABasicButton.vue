 <template>
  <button class="basic-button btn-main btn-purple">
    {{ confirmButton ? this.conferma : this.ordine }}
  </button>
</template>
 <script>
export default {
  name: "ABasicButton",
  data() {
    return {
      conferma: "Conferma metodo di pagamento",
      ordine: "Invia Ordine",
    };
  },
  props: {
    confirmButton: Boolean,
  },
};
</script>
 
 <style lang="scss" scoped>
</style>