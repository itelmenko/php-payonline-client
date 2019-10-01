<?php

namespace PayOnline;

/**
 * Валюта
 */
class Currency {

    protected $code;

    public function __construct($iso3AlphaCode) {
        $this->code = strtoupper($iso3AlphaCode);
    }

    public function __toString() {
        return $this->code;
    }
}