<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class InvoiceDiscountBreakout implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $uid;

    /**
     * @var string|null
     */
    private $eligibleAmount;

    /**
     * @var string|null
     */
    private $discountAmount;

    /**
     * Returns Uid.
     */
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * Sets Uid.
     *
     * @maps uid
     */
    public function setUid(?string $uid): void
    {
        $this->uid = $uid;
    }

    /**
     * Returns Eligible Amount.
     */
    public function getEligibleAmount(): ?string
    {
        return $this->eligibleAmount;
    }

    /**
     * Sets Eligible Amount.
     *
     * @maps eligible_amount
     */
    public function setEligibleAmount(?string $eligibleAmount): void
    {
        $this->eligibleAmount = $eligibleAmount;
    }

    /**
     * Returns Discount Amount.
     */
    public function getDiscountAmount(): ?string
    {
        return $this->discountAmount;
    }

    /**
     * Sets Discount Amount.
     *
     * @maps discount_amount
     */
    public function setDiscountAmount(?string $discountAmount): void
    {
        $this->discountAmount = $discountAmount;
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
        if (isset($this->uid)) {
            $json['uid']             = $this->uid;
        }
        if (isset($this->eligibleAmount)) {
            $json['eligible_amount'] = $this->eligibleAmount;
        }
        if (isset($this->discountAmount)) {
            $json['discount_amount'] = $this->discountAmount;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
