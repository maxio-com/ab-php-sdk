<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class MRR implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $amountInCents;

    /**
     * @var string|null
     */
    private $amountFormatted;

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var string|null
     */
    private $currencySymbol;

    /**
     * @var Breakouts|null
     */
    private $breakouts;

    /**
     * @var string|null
     */
    private $atTime;

    /**
     * Returns Amount in Cents.
     */
    public function getAmountInCents(): ?int
    {
        return $this->amountInCents;
    }

    /**
     * Sets Amount in Cents.
     *
     * @maps amount_in_cents
     */
    public function setAmountInCents(?int $amountInCents): void
    {
        $this->amountInCents = $amountInCents;
    }

    /**
     * Returns Amount Formatted.
     */
    public function getAmountFormatted(): ?string
    {
        return $this->amountFormatted;
    }

    /**
     * Sets Amount Formatted.
     *
     * @maps amount_formatted
     */
    public function setAmountFormatted(?string $amountFormatted): void
    {
        $this->amountFormatted = $amountFormatted;
    }

    /**
     * Returns Currency.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Currency Symbol.
     */
    public function getCurrencySymbol(): ?string
    {
        return $this->currencySymbol;
    }

    /**
     * Sets Currency Symbol.
     *
     * @maps currency_symbol
     */
    public function setCurrencySymbol(?string $currencySymbol): void
    {
        $this->currencySymbol = $currencySymbol;
    }

    /**
     * Returns Breakouts.
     */
    public function getBreakouts(): ?Breakouts
    {
        return $this->breakouts;
    }

    /**
     * Sets Breakouts.
     *
     * @maps breakouts
     */
    public function setBreakouts(?Breakouts $breakouts): void
    {
        $this->breakouts = $breakouts;
    }

    /**
     * Returns At Time.
     * ISO8601 timestamp
     */
    public function getAtTime(): ?string
    {
        return $this->atTime;
    }

    /**
     * Sets At Time.
     * ISO8601 timestamp
     *
     * @maps at_time
     */
    public function setAtTime(?string $atTime): void
    {
        $this->atTime = $atTime;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->amountInCents)) {
            $json['amount_in_cents']  = $this->amountInCents;
        }
        if (isset($this->amountFormatted)) {
            $json['amount_formatted'] = $this->amountFormatted;
        }
        if (isset($this->currency)) {
            $json['currency']         = $this->currency;
        }
        if (isset($this->currencySymbol)) {
            $json['currency_symbol']  = $this->currencySymbol;
        }
        if (isset($this->breakouts)) {
            $json['breakouts']        = $this->breakouts;
        }
        if (isset($this->atTime)) {
            $json['at_time']          = $this->atTime;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
