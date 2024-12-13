<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SubscriptionGroupBalances implements \JsonSerializable
{
    /**
     * @var AccountBalance|null
     */
    private $prepayments;

    /**
     * @var AccountBalance|null
     */
    private $serviceCredits;

    /**
     * @var AccountBalance|null
     */
    private $openInvoices;

    /**
     * @var AccountBalance|null
     */
    private $pendingDiscounts;

    /**
     * Returns Prepayments.
     */
    public function getPrepayments(): ?AccountBalance
    {
        return $this->prepayments;
    }

    /**
     * Sets Prepayments.
     *
     * @maps prepayments
     */
    public function setPrepayments(?AccountBalance $prepayments): void
    {
        $this->prepayments = $prepayments;
    }

    /**
     * Returns Service Credits.
     */
    public function getServiceCredits(): ?AccountBalance
    {
        return $this->serviceCredits;
    }

    /**
     * Sets Service Credits.
     *
     * @maps service_credits
     */
    public function setServiceCredits(?AccountBalance $serviceCredits): void
    {
        $this->serviceCredits = $serviceCredits;
    }

    /**
     * Returns Open Invoices.
     */
    public function getOpenInvoices(): ?AccountBalance
    {
        return $this->openInvoices;
    }

    /**
     * Sets Open Invoices.
     *
     * @maps open_invoices
     */
    public function setOpenInvoices(?AccountBalance $openInvoices): void
    {
        $this->openInvoices = $openInvoices;
    }

    /**
     * Returns Pending Discounts.
     */
    public function getPendingDiscounts(): ?AccountBalance
    {
        return $this->pendingDiscounts;
    }

    /**
     * Sets Pending Discounts.
     *
     * @maps pending_discounts
     */
    public function setPendingDiscounts(?AccountBalance $pendingDiscounts): void
    {
        $this->pendingDiscounts = $pendingDiscounts;
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
        if (isset($this->prepayments)) {
            $json['prepayments']       = $this->prepayments;
        }
        if (isset($this->serviceCredits)) {
            $json['service_credits']   = $this->serviceCredits;
        }
        if (isset($this->openInvoices)) {
            $json['open_invoices']     = $this->openInvoices;
        }
        if (isset($this->pendingDiscounts)) {
            $json['pending_discounts'] = $this->pendingDiscounts;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
