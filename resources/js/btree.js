<script src="https://js.braintreegateway.com/web/dropin/1.13.0/js/dropin.min.js%22%3E"></script>;

var form = document.querySelector("#payment-form");
var client_token = "{{ $token }}";

braintree.dropin.create(
    {
        authorization: client_token,
        selector: "#bt-dropin",
        paypal: {
            flow: "vault",
        },
    },
    function (createErr, instance) {
        if (createErr) {
            console.log("Create Error", createErr);
            return;
        }
        form.addEventListener("submit", function (event) {
            event.preventDefault();

            instance.requestPaymentMethod(function (err, payload) {
                if (err) {
                    console.log("Request Payment Method Error", err);
                    return;
                }

                // Add the nonce to the form and submit
                document.querySelector("#nonce").value = payload.nonce;
                form.submit();
            });
        });
    }
);