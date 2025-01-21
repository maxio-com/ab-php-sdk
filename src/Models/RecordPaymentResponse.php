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

class RecordPaymentResponse implements \JsonSerializable
{
    /**
     * @var PaidInvoice[]|null
     */
    private $paidInvoices;

    /**
     * @var array
     */
    private $prepayment = [];

    /**
     * Returns Paid Invoices.
     *
     * @return PaidInvoice[]|null
     */
    public function getPaidInvoices(): ?array
    {
        return $this->paidInvoices;
    }

    /**
     * Sets Paid Invoices.
     *
     * @maps paid_invoices
     *
     * @param PaidInvoice[]|null $paidInvoices
     */
    public function setPaidInvoices(?array $paidInvoices): void
    {
        $this->paidInvoices = $paidInvoices;
    }

    /**
     * Returns Prepayment.
     */
    public function getPrepayment(): ?InvoicePrePayment
    {
        if (count($this->prepayment) == 0) {
            return null;
        }
        return $this->prepayment['value'];
    }

    /**
     * Sets Prepayment.
     *
     * @maps prepayment
     */
    public function setPrepayment(?InvoicePrePayment $prepayment): void
    {
        $this->prepayment['value'] = $prepayment;
    }

    /**
     * Unsets Prepayment.
     */
    public function unsetPrepayment(): void
    {
        $this->prepayment = [];
    }

    /**
     * Converts the RecordPaymentResponse object to a human-readable string representation.
     *
     * @return string The string representation of the RecordPaymentResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'RecordPaymentResponse',
            [
                'paidInvoices' => $this->paidInvoices,
                'prepayment' => $this->getPrepayment(),
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
        if (isset($this->paidInvoices)) {
            $json['paid_invoices'] = $this->paidInvoices;
        }
        if (!empty($this->prepayment)) {
            $json['prepayment']    = $this->prepayment['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
