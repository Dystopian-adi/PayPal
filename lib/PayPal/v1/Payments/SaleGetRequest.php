<?php

// This class was generated on Mon, 16 Apr 2018 19:30:07 UTC by version 0.1.0-dev+560365 of Braintree SDK Generator
// SaleGetRequest.php
// @version 0.1.0-dev+560365
// @type request
// @data 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
// DO NOT EDIT

namespace PayPal\v1\Payments;

use BraintreeHttp\HttpRequest;

class SaleGetRequest extends HttpRequest
{
    function __construct($saleId)
    {
        parent::__construct("/v1/payments/sale/{sale_id}?", "GET");
        
        $this->path = str_replace("{sale_id}", urlencode($saleId), $this->path);
        $this->headers["Content-Type"] = "application/json";
    }

    
}
