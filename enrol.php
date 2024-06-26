<div align="center">

    <p><?php print_string("paymentrequired") ?></p>
    <p><b><?php echo $instancename; ?></b></p>
    <p><b><?php echo get_string("cost").": {$instance->currency} {$localisedcost}"; ?></b></p>
    <p><img alt="<?php print_string('accepted', 'enrol_mercadopago') ?>"
            src="<?php echo " $CFG->wwwroot/enrol/mercadopago/pix/mercadopago.png"?>" /></p>
    <p><?php print_string("paymentinstant") ?></p>

    <div class="cho-container">
    </div>

    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <script>
        // Add the SDK credentials
        const mp = new MercadoPago('<?php echo $public_key; ?>');

        // Initialize the checkout
        mp.checkout({
            preference : {
                id : '<?php echo $preference->id; ?>'
            },
            render     : {
                container : '.cho-container',
                label     : 'Pagar',
            }
        });
    </script>

</div>
