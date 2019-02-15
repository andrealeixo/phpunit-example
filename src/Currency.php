<?php
declare(strict_types=1);

final class Currency
{
    private $currencies = [
	'EUR'
    ];

    private $code = null;

    private function __construct(string $currencyCode)
    {
        $this->ensureIsValidCode($currencyCode);

        $this->code = $code;
    }

    public function __toString(): string
    {
        return $this->code;
    }

    private function ensureIsValidCode(string $code): void
    {
        if (!isset(self::$currencies[strtoupper($code)])) {
            throw new InvalidArgumentException(
                sprintf(
                    '"%s" is not a valid currency code',
                    $code
                )
            );
        }
    }
}