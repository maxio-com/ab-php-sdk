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

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
