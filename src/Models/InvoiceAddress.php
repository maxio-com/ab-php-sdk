<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class InvoiceAddress implements \JsonSerializable
{
    /**
     * @var array
     */
    private $street = [];

    /**
     * @var array
     */
    private $line2 = [];

    /**
     * @var array
     */
    private $city = [];

    /**
     * @var array
     */
    private $state = [];

    /**
     * @var array
     */
    private $zip = [];

    /**
     * @var array
     */
    private $country = [];

    /**
     * Returns Street.
     */
    public function getStreet(): ?string
    {
        if (count($this->street) == 0) {
            return null;
        }
        return $this->street['value'];
    }

    /**
     * Sets Street.
     *
     * @maps street
     */
    public function setStreet(?string $street): void
    {
        $this->street['value'] = $street;
    }

    /**
     * Unsets Street.
     */
    public function unsetStreet(): void
    {
        $this->street = [];
    }

    /**
     * Returns Line 2.
     */
    public function getLine2(): ?string
    {
        if (count($this->line2) == 0) {
            return null;
        }
        return $this->line2['value'];
    }

    /**
     * Sets Line 2.
     *
     * @maps line2
     */
    public function setLine2(?string $line2): void
    {
        $this->line2['value'] = $line2;
    }

    /**
     * Unsets Line 2.
     */
    public function unsetLine2(): void
    {
        $this->line2 = [];
    }

    /**
     * Returns City.
     */
    public function getCity(): ?string
    {
        if (count($this->city) == 0) {
            return null;
        }
        return $this->city['value'];
    }

    /**
     * Sets City.
     *
     * @maps city
     */
    public function setCity(?string $city): void
    {
        $this->city['value'] = $city;
    }

    /**
     * Unsets City.
     */
    public function unsetCity(): void
    {
        $this->city = [];
    }

    /**
     * Returns State.
     */
    public function getState(): ?string
    {
        if (count($this->state) == 0) {
            return null;
        }
        return $this->state['value'];
    }

    /**
     * Sets State.
     *
     * @maps state
     */
    public function setState(?string $state): void
    {
        $this->state['value'] = $state;
    }

    /**
     * Unsets State.
     */
    public function unsetState(): void
    {
        $this->state = [];
    }

    /**
     * Returns Zip.
     */
    public function getZip(): ?string
    {
        if (count($this->zip) == 0) {
            return null;
        }
        return $this->zip['value'];
    }

    /**
     * Sets Zip.
     *
     * @maps zip
     */
    public function setZip(?string $zip): void
    {
        $this->zip['value'] = $zip;
    }

    /**
     * Unsets Zip.
     */
    public function unsetZip(): void
    {
        $this->zip = [];
    }

    /**
     * Returns Country.
     */
    public function getCountry(): ?string
    {
        if (count($this->country) == 0) {
            return null;
        }
        return $this->country['value'];
    }

    /**
     * Sets Country.
     *
     * @maps country
     */
    public function setCountry(?string $country): void
    {
        $this->country['value'] = $country;
    }

    /**
     * Unsets Country.
     */
    public function unsetCountry(): void
    {
        $this->country = [];
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
        if (!empty($this->street)) {
            $json['street']  = $this->street['value'];
        }
        if (!empty($this->line2)) {
            $json['line2']   = $this->line2['value'];
        }
        if (!empty($this->city)) {
            $json['city']    = $this->city['value'];
        }
        if (!empty($this->state)) {
            $json['state']   = $this->state['value'];
        }
        if (!empty($this->zip)) {
            $json['zip']     = $this->zip['value'];
        }
        if (!empty($this->country)) {
            $json['country'] = $this->country['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
