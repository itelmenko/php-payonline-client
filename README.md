# Payonline PHP Client

Работа с Payonline для приема платежей через платежную страницу на стороне https://payonline.ru

## Пример

```php
$page = new PaymentPage($settings['merchant_id'], $settings['private_key']);
$page->setPaymentMethod(new PaymentMethod(PaymentMethod::PAYMENT_METHOD_CARD));
$page->setPrice(new Amount(10.95), new Currency(Currency::CURRENCY_USD));
$page->setOrderId(232424);
$page->setFailUrl('https://custom-domain.ru/payment/fail');
$page->setReturnUrl('https://custom-domain.ru/payment/return');
$page->setLanguage(new Language(Language::LANG_RUSSIAN));
$url = $page->getPaymentUrl();
header("Location: {$url}"); 
```