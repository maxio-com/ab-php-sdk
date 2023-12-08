<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreditCardAttributes implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $fullNumber;

    /**
     * @var string|null
     */
    private $expirationMonth;

    /**
     * @var string|null
     */
    private $expirationYear;

    /**
     * Returns Full Number.
     */
    public function getFullNumber(): ?string
    {
        return $this->fullNumber;
    }

    /**
     * Sets Full Number.
     *
     * @maps full_number
     */
    public function setFullNumber(?string $fullNumber): void
    {
        $this->fullNumber = $fullNumber;
    }

    /**
     * Returns Expiration Month.
     */
    public function getExpirationMonth(): ?string
    {
        return $this->expirationMonth;
    }

    /**
     * Sets Expiration Month.
     *
     * @maps expiration_month
     */
    public function setExpirationMonth(?string $expirationMonth): void
    {
        $this->expirationMonth = $expirationMonth;
    }

    /**
     * Returns Expiration Year.
     */
    public function getExpirationYear(): ?string
    {
        return $this->expirationYear;
    }

    /**
     * Sets Expiration Year.
     *
     * @maps expiration_year
     */
    public function setExpirationYear(?string $expirationYear): void
    {
        $this->expirationYear = $expirationYear;
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
        if (isset($this->fullNumber)) {
            $json['full_number']      = $this->fullNumber;
        }
        if (isset($this->expirationMonth)) {
            $json['expiration_month'] = $this->expirationMonth;
        }
        if (isset($this->expirationYear)) {
            $json['expiration_year']  = $this->expirationYear;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
