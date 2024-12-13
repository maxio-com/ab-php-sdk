<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\Utils\DateTimeHelper;
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
     * @var \DateTime|null
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
    public function getAtTime(): ?\DateTime
    {
        return $this->atTime;
    }

    /**
     * Sets At Time.
     * ISO8601 timestamp
     *
     * @maps at_time
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setAtTime(?\DateTime $atTime): void
    {
        $this->atTime = $atTime;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
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
            $json['at_time']          = DateTimeHelper::toRfc3339DateTime($this->atTime);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
