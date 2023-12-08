<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CustomerChange implements \JsonSerializable
{
    /**
     * @var CustomerPayerChange|null
     */
    private $payer;

    /**
     * @var CustomerShippingAddressChange|null
     */
    private $shippingAddress;

    /**
     * @var CustomerBillingAddressChange|null
     */
    private $billingAddress;

    /**
     * @var CustomerCustomFieldsChange|null
     */
    private $customFields;

    /**
     * Returns Payer.
     */
    public function getPayer(): ?CustomerPayerChange
    {
        return $this->payer;
    }

    /**
     * Sets Payer.
     *
     * @maps payer
     */
    public function setPayer(?CustomerPayerChange $payer): void
    {
        $this->payer = $payer;
    }

    /**
     * Returns Shipping Address.
     */
    public function getShippingAddress(): ?CustomerShippingAddressChange
    {
        return $this->shippingAddress;
    }

    /**
     * Sets Shipping Address.
     *
     * @maps shipping_address
     */
    public function setShippingAddress(?CustomerShippingAddressChange $shippingAddress): void
    {
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * Returns Billing Address.
     */
    public function getBillingAddress(): ?CustomerBillingAddressChange
    {
        return $this->billingAddress;
    }

    /**
     * Sets Billing Address.
     *
     * @maps billing_address
     */
    public function setBillingAddress(?CustomerBillingAddressChange $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * Returns Custom Fields.
     */
    public function getCustomFields(): ?CustomerCustomFieldsChange
    {
        return $this->customFields;
    }

    /**
     * Sets Custom Fields.
     *
     * @maps custom_fields
     */
    public function setCustomFields(?CustomerCustomFieldsChange $customFields): void
    {
        $this->customFields = $customFields;
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
        if (isset($this->payer)) {
            $json['payer']            = $this->payer;
        }
        if (isset($this->shippingAddress)) {
            $json['shipping_address'] = $this->shippingAddress;
        }
        if (isset($this->billingAddress)) {
            $json['billing_address']  = $this->billingAddress;
        }
        if (isset($this->customFields)) {
            $json['custom_fields']    = $this->customFields;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
