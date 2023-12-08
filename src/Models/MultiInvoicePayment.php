<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class MultiInvoicePayment implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $transactionId;

    /**
     * @var string|null
     */
    private $totalAmount;

    /**
     * @var string|null
     */
    private $currencyCode;

    /**
     * @var InvoicePaymentApplication[]|null
     */
    private $applications;

    /**
     * Returns Transaction Id.
     * The numeric ID of the transaction.
     */
    public function getTransactionId(): ?int
    {
        return $this->transactionId;
    }

    /**
     * Sets Transaction Id.
     * The numeric ID of the transaction.
     *
     * @maps transaction_id
     */
    public function setTransactionId(?int $transactionId): void
    {
        $this->transactionId = $transactionId;
    }

    /**
     * Returns Total Amount.
     * Dollar amount of the sum of the paid invoices.
     */
    public function getTotalAmount(): ?string
    {
        return $this->totalAmount;
    }

    /**
     * Sets Total Amount.
     * Dollar amount of the sum of the paid invoices.
     *
     * @maps total_amount
     */
    public function setTotalAmount(?string $totalAmount): void
    {
        $this->totalAmount = $totalAmount;
    }

    /**
     * Returns Currency Code.
     * The ISO 4217 currency code (3 character string) representing the currency of invoice transaction.
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * Sets Currency Code.
     * The ISO 4217 currency code (3 character string) representing the currency of invoice transaction.
     *
     * @maps currency_code
     */
    public function setCurrencyCode(?string $currencyCode): void
    {
        $this->currencyCode = $currencyCode;
    }

    /**
     * Returns Applications.
     *
     * @return InvoicePaymentApplication[]|null
     */
    public function getApplications(): ?array
    {
        return $this->applications;
    }

    /**
     * Sets Applications.
     *
     * @maps applications
     *
     * @param InvoicePaymentApplication[]|null $applications
     */
    public function setApplications(?array $applications): void
    {
        $this->applications = $applications;
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
        if (isset($this->transactionId)) {
            $json['transaction_id'] = $this->transactionId;
        }
        if (isset($this->totalAmount)) {
            $json['total_amount']   = $this->totalAmount;
        }
        if (isset($this->currencyCode)) {
            $json['currency_code']  = $this->currencyCode;
        }
        if (isset($this->applications)) {
            $json['applications']   = $this->applications;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
