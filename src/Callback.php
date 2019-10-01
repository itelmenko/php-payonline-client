<?php

namespace PayOnline;

/**
 * Работа с извещением Callback
 */
class Callback {

    protected $secretKey;

    public function __construct($secretKey) {
        $this->secretKey = $secretKey;
    }

    /**
     * Проверка корректности подписи
     * @param array $data Переданные данные
     * @return bool
     */
    public function isDataCorrect($data) {
        $signature = strtoupper($data['SecurityKey']);
        return (strtoupper($this->getSignature($data)) == $signature);
    }

    /**
     * Вычисление подписи
     * @param $data
     * @return string
     */
    protected function getSignature($data) {
        $fields = [
            'DateTime',
            'TransactionID',
            'OrderId',
            'Amount',
            'Currency'
        ];
        $string = '';
        foreach ($fields as $fieldName) {
            if(!empty($data[$fieldName])) {
                $string .= "{$fieldName}=".$data[$fieldName].'&';
            }
        }
        return md5($string."PrivateSecurityKey={$this->secretKey}");
    }
}