<template>
  <div class="payment">
    <div id="#dropin-container" ref="dropin">asd</div>
    <slot name="button" v-bind:submit="submit">
      <button @click="submit" :class="btnClass">{{ btnText }}</button>
    </slot>
  </div>
</template>

<script>
export default {
  props: {
    authorization: {
      required: true,
      type: String,
    },
    locale: {
      type: String,
      default: "it_IT",
    },
    btnText: {
      type: String,
      default: "Procedi al pagamento",
    },
    btnClass: {
      type: String,
      default: "btn-main btn-purple",
    },
    paypal: {
      type: Object,
      default: undefined,
    },
    paypalCredit: {
      type: Object,
      default: undefined,
    },
    venmo: {
      type: Object,
      default: undefined,
    },
    applePay: {
      type: Object,
      default: undefined,
    },
    googlePay: {
      type: Object,
      default: undefined,
    },
    translations: {
      type: Object,
      default: undefined,
    },
    vaultManager: {
      type: Boolean,
      default: false,
    },
    card: {
      type: Object,
      default: undefined,
    },
    threeDSecure: {
      default: false,
      type: Boolean,
    },
    threeDSecureParameters: {
      required: false,
      default: null,
      validator: (value) => {
        return typeof value === "object";
      },
    },
  },
  data() {
    return {
      instance: null, // The DropIn Instance
    };
  },
  mounted() {
    // Create config
    let config = {
      authorization: this.authorization,
      container: this.$refs.dropin,
      locale: this.locale,
      translations: this.translations,
      paypal: this.paypal,
      paypalCredit: this.paypalCredit,
      venmo: this.venmo,
      applePay: this.applePay,
      googlePay: this.googlePay,
      vaultManager: this.vaultManager,
      card: this.card,
      threeDSecure: this.threeDSecure,
    };

    setTimeout(
      () => {
        console.log("fine time");
      },

      5000
    );
  },
  methods: {
    submit(event) {
      if (event) {
        event.preventDefault();
      }
      let requestPaymentConfig = {};
      if (this.threeDSecure === true) {
        requestPaymentConfig.threeDSecure = this.threeDSecureParameters;
      }
      this.instance.requestPaymentMethod(
        requestPaymentConfig,
        (err, payload) => {
          if (err) {
            // No payment method is available.
            // An appropriate error will be shown in the UI.
            this.$emit("error", err);
            return;
          }
          this.$emit("success", payload);
        }
      );
    },
  },
};
</script>