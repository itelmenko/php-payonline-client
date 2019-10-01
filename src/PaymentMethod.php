<?php

namespace PayOnline;

/**
 * Способ оплаты
 */
class PaymentMethod {

    /**
     * Возможные варианты
     */
    const PAYMENT_METHOD_CARD = 'card';
    const PAYMENT_METHOD_QIWI = 'qiwi';
    const PAYMENT_METHOD_WEBMONEY = 'webmoney';
    const PAYMENT_METHOD_YANDEX = 'yandexmoney';
    const PAYMENT_METHOD_IDEAL = 'ideal';

    protected $value;

    public function __construct(string $value) {
        $this->value = $value;
    }

    public function __toString() {
        return $this->value ?? '';
    }

    /**
     * Поучение сегмента URL платежной формы, зависящего от способа оплаты
     * @return string
     */
    public function getPaymentUrlSegment() {
        if(empty($this->value)) {
            return 'select';
        }
        if($this->value == self::PAYMENT_METHOD_CARD) {
            return '';
        }
        return "select/{$this->value}";
    }
}