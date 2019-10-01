<?php


namespace PayOnline;


class Language {

    /**
     * Возможные варианты
     */
    const LANG_RUSSIAN = 'ru';
    const LANG_ENGLISH = 'en';
    const LANG_DEUTSCH = 'de';
    const LANG_SPANISH = 'es';
    const LANG_FRENCH = 'fr';
    const LANG_CHINESE = 'zh-cn';

    protected $value;

    public function __construct(string $value) {
        $this->value = $value;
    }

    public function __toString() {
        return $this->value ?? '';
    }
}