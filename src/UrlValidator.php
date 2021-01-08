<?php

namespace Yvv\UrlValidator;

/**
 * Class UrlValidator
 */
class UrlValidator
{
    private const PATTERN = '/^http:\/\/(([a-zA-Z0-9а-яА-ЯёЁ][a-zA-Z0-9а-яА-ЯёЁ_-]*)(\.[a-zA-Z0-9а-яА-ЯёЁ][a-zA-Z0-9а-яА-ЯёЁ_-]*)+)(\/[a-zA-Z0-9а-яА-ЯёЁ_-]*)*$/u';

    /**
     * Method is used for checking url addrass with regular expression.
     *
     * @param string $url
     * @return boolean
     */
    public function checkUrl(string $url): bool
    {
        $url = preg_replace('/^https/', 'http', $url);

        if (preg_match(self::PATTERN, $url, $matches)) {
            return true;
        } else {
            return false;
        }
    }
}
