<?php

namespace PayOnline;

/**
 * Сумма
 */
class Amount {

    protected $value;

    public function __construct($value) {
        $this->value = floatval($value);
    }

    public function getFormattedValue() {
        return empty($this->value) ? '0' : number_format($this->value, 2, '.', '');
    }

    public function __toString() {
        return $this->getFormattedValue();
    }
}