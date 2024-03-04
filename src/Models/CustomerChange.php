<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use stdClass;

class CustomerChange implements \JsonSerializable
{
    /**
     * @var array
     */
    private $payer = [];

    /**
     * @var array
     */
    private $shippingAddress = [];

    /**
     * @var array
     */
    private $billingAddress = [];

    /**
     * @var array
     */
    private $customFields = [];

    /**
     * Returns Payer.
     */
    public function getPayer(): ?CustomerPayerChange
    {
        if (count($this->payer) == 0) {
            return null;
        }
        return $this->payer['value'];
    }

    /**
     * Sets Payer.
     *
     * @maps payer
     * @mapsBy anyOf(oneOf(CustomerPayerChange),null)
     */
    public function setPayer(?CustomerPayerChange $payer): void
    {
        $this->payer['value'] = $payer;
    }

    /**
     * Unsets Payer.
     */
    public function unsetPayer(): void
    {
        $this->payer = [];
    }

    /**
     * Returns Shipping Address.
     */
    public function getShippingAddress(): ?AddressChange
    {
        if (count($this->shippingAddress) == 0) {
            return null;
        }
        return $this->shippingAddress['value'];
    }

    /**
     * Sets Shipping Address.
     *
     * @maps shipping_address
     * @mapsBy anyOf(oneOf(AddressChange),null)
     */
    public function setShippingAddress(?AddressChange $shippingAddress): void
    {
        $this->shippingAddress['value'] = $shippingAddress;
    }

    /**
     * Unsets Shipping Address.
     */
    public function unsetShippingAddress(): void
    {
        $this->shippingAddress = [];
    }

    /**
     * Returns Billing Address.
     */
    public function getBillingAddress(): ?AddressChange
    {
        if (count($this->billingAddress) == 0) {
            return null;
        }
        return $this->billingAddress['value'];
    }

    /**
     * Sets Billing Address.
     *
     * @maps billing_address
     * @mapsBy anyOf(oneOf(AddressChange),null)
     */
    public function setBillingAddress(?AddressChange $billingAddress): void
    {
        $this->billingAddress['value'] = $billingAddress;
    }

    /**
     * Unsets Billing Address.
     */
    public function unsetBillingAddress(): void
    {
        $this->billingAddress = [];
    }

    /**
     * Returns Custom Fields.
     */
    public function getCustomFields(): ?CustomerCustomFieldsChange
    {
        if (count($this->customFields) == 0) {
            return null;
        }
        return $this->customFields['value'];
    }

    /**
     * Sets Custom Fields.
     *
     * @maps custom_fields
     * @mapsBy anyOf(oneOf(CustomerCustomFieldsChange),null)
     */
    public function setCustomFields(?CustomerCustomFieldsChange $customFields): void
    {
        $this->customFields['value'] = $customFields;
    }

    /**
     * Unsets Custom Fields.
     */
    public function unsetCustomFields(): void
    {
        $this->customFields = [];
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
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
        if (!empty($this->payer)) {
            $json['payer']            =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->payer['value'],
                    'anyOf(oneOf(CustomerPayerChange),null)'
                );
        }
        if (!empty($this->shippingAddress)) {
            $json['shipping_address'] =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->shippingAddress['value'],
                    'anyOf(oneOf(AddressChange),null)'
                );
        }
        if (!empty($this->billingAddress)) {
            $json['billing_address']  =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->billingAddress['value'],
                    'anyOf(oneOf(AddressChange),null)'
                );
        }
        if (!empty($this->customFields)) {
            $json['custom_fields']    =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->customFields['value'],
                    'anyOf(oneOf(CustomerCustomFieldsChange),null)'
                );
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
