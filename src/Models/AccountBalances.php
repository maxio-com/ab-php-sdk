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

class AccountBalances implements \JsonSerializable
{
    /**
     * @var AccountBalance|null
     */
    private $openInvoices;

    /**
     * @var AccountBalance|null
     */
    private $pendingInvoices;

    /**
     * @var AccountBalance|null
     */
    private $pendingDiscounts;

    /**
     * @var AccountBalance|null
     */
    private $serviceCredits;

    /**
     * @var AccountBalance|null
     */
    private $prepayments;

    /**
     * Returns Open Invoices.
     * The balance, in cents, of the sum of the subscription's  open, payable invoices.
     */
    public function getOpenInvoices(): ?AccountBalance
    {
        return $this->openInvoices;
    }

    /**
     * Sets Open Invoices.
     * The balance, in cents, of the sum of the subscription's  open, payable invoices.
     *
     * @maps open_invoices
     */
    public function setOpenInvoices(?AccountBalance $openInvoices): void
    {
        $this->openInvoices = $openInvoices;
    }

    /**
     * Returns Pending Invoices.
     * The balance, in cents, of the sum of the subscription's  pending, payable invoices.
     */
    public function getPendingInvoices(): ?AccountBalance
    {
        return $this->pendingInvoices;
    }

    /**
     * Sets Pending Invoices.
     * The balance, in cents, of the sum of the subscription's  pending, payable invoices.
     *
     * @maps pending_invoices
     */
    public function setPendingInvoices(?AccountBalance $pendingInvoices): void
    {
        $this->pendingInvoices = $pendingInvoices;
    }

    /**
     * Returns Pending Discounts.
     * The balance, in cents, of the subscription's Pending Discount account.
     */
    public function getPendingDiscounts(): ?AccountBalance
    {
        return $this->pendingDiscounts;
    }

    /**
     * Sets Pending Discounts.
     * The balance, in cents, of the subscription's Pending Discount account.
     *
     * @maps pending_discounts
     */
    public function setPendingDiscounts(?AccountBalance $pendingDiscounts): void
    {
        $this->pendingDiscounts = $pendingDiscounts;
    }

    /**
     * Returns Service Credits.
     * The balance, in cents, of the subscription's Service Credit account.
     */
    public function getServiceCredits(): ?AccountBalance
    {
        return $this->serviceCredits;
    }

    /**
     * Sets Service Credits.
     * The balance, in cents, of the subscription's Service Credit account.
     *
     * @maps service_credits
     */
    public function setServiceCredits(?AccountBalance $serviceCredits): void
    {
        $this->serviceCredits = $serviceCredits;
    }

    /**
     * Returns Prepayments.
     * The balance, in cents, of the subscription's Prepayment account.
     */
    public function getPrepayments(): ?AccountBalance
    {
        return $this->prepayments;
    }

    /**
     * Sets Prepayments.
     * The balance, in cents, of the subscription's Prepayment account.
     *
     * @maps prepayments
     */
    public function setPrepayments(?AccountBalance $prepayments): void
    {
        $this->prepayments = $prepayments;
    }

    /**
     * Converts the AccountBalances object to a human-readable string representation.
     *
     * @return string The string representation of the AccountBalances object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'AccountBalances',
            [
                'openInvoices' => $this->openInvoices,
                'pendingInvoices' => $this->pendingInvoices,
                'pendingDiscounts' => $this->pendingDiscounts,
                'serviceCredits' => $this->serviceCredits,
                'prepayments' => $this->prepayments,
                'additionalProperties' => $this->additionalProperties
            ]
        );
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
        if (isset($this->openInvoices)) {
            $json['open_invoices']     = $this->openInvoices;
        }
        if (isset($this->pendingInvoices)) {
            $json['pending_invoices']  = $this->pendingInvoices;
        }
        if (isset($this->pendingDiscounts)) {
            $json['pending_discounts'] = $this->pendingDiscounts;
        }
        if (isset($this->serviceCredits)) {
            $json['service_credits']   = $this->serviceCredits;
        }
        if (isset($this->prepayments)) {
            $json['prepayments']       = $this->prepayments;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
