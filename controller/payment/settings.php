<?php
     $url = 'https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/';
    
     $ApiKey = '4Vj8eK4rloUd272L48hsrarnUA';
     $merchantId = '508029';
     $accountId = '512321';
     $description = 'product';
     $referenceCode = 'rest123456';
     $amount = '10000';
     $tax = '0';
     $taxReturnBase = '0';
     $currency = 'COP';
     $test = '0';
     $buyerEmail = 'restaurantecrypto@gmail.com';
     $responseUrl = 'https://cryptorestaurant.000webhostapp.com/controller/payment/response.php';
     $confirmationUrl = 'https://cryptorestaurant.000webhostapp.com/controller/payment/confirmacion.php';
     $confirmacionEmail = 'restaurantecrypto@gmail.com';
     $firma = "$ApiKey~$merchantId~$referenceCode~$amount~$currency";
     $firmaMd5 = md5($firma);
