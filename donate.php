
    <script>
            paypal.Button.render({

                env: 'sandbox', // sandbox | production

                // PayPal Client IDs - replace with your own
                // Create a PayPal app: https://developer.paypal.com/developer/applications/create
                client: {
                    sandbox:    'AZyL00YwX05wkQcHOWedtzU_YSBZZ00hJMF9Sv4bV2SwVkfgpDNcpitFO3QmUzneNYMa27Oxl0L0V_Vg\n',
                    production: 'Act9irbVtuUjROJR9FhB6BKG-SKi101_KwUnb2ddMPSP6SrPLdLBmMKEF39KcbLFA14dYWf4hJJ-XDxL\n'
                },

                // Show the buyer a 'Pay Now' button in the checkout flow
                commit: true,

                // payment() is called when the button is clicked
                payment: function(data, actions) {

                    // Make a call to the REST api to create the payment
                    return actions.payment.create({
                        payment: {
                            transactions: [
                                {
                                    amount: { total: '0.01', currency: 'USD' }
                                }
                            ]
                        }
                    });
                },

                // onAuthorize() is called when the buyer approves the payment
                onAuthorize: function(data, actions) {

                    // Make a call to the REST api to execute the payment
                    return actions.payment.execute().then(function() {
                        window.alert('Payment Complete!');
                    });
                }

            }, '#donate');

        </script>