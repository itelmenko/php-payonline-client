<?php

namespace PayOnline;

/**
 * Валюта
 */
class Currency {

    const CURRENCY_USD = 'USD';
    const CURRENCY_RUB = 'RUB';
    const CURRENCY_EUR = 'EUR';

    protected $code;

    public function __construct($iso3AlphaCode) {
        $this->code = strtoupper($iso3AlphaCode);
    }

    public function __toString() {
        return $this->code;
    }
}