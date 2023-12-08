<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

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
        if (isset($this->pendingDiscounts)) {
            $json['pending_discounts'] = $this->pendingDiscounts;
        }
        if (isset($this->serviceCredits)) {
            $json['service_credits']   = $this->serviceCredits;
        }
        if (isset($this->prepayments)) {
            $json['prepayments']       = $this->prepayments;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
