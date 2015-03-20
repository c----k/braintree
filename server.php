<?php

using Braintree;

Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantId('jbkhksyb9bvwxfzz');
Braintree_Configuration::publicKey('cmkw32nwqrcqq5bq');
Braintree_Configuration::privateKey('ca043900d537ca6b0fe0b2358eaee322');



$clientToken = Braintree_ClientToken::generate(array(
    "customerId" => $aCustomerId
));