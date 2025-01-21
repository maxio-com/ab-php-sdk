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

class InvoicePaymentApplication implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $invoiceUid;

    /**
     * @var string|null
     */
    private $applicationUid;

    /**
     * @var string|null
     */
    private $appliedAmount;

    /**
     * Returns Invoice Uid.
     * Unique identifier for the paid invoice. It has the prefix "inv_" followed by alphanumeric characters.
     */
    public function getInvoiceUid(): ?string
    {
        return $this->invoiceUid;
    }

    /**
     * Sets Invoice Uid.
     * Unique identifier for the paid invoice. It has the prefix "inv_" followed by alphanumeric characters.
     *
     * @maps invoice_uid
     */
    public function setInvoiceUid(?string $invoiceUid): void
    {
        $this->invoiceUid = $invoiceUid;
    }

    /**
     * Returns Application Uid.
     * Unique identifier for the payment. It has the prefix "pmt_" followed by alphanumeric characters.
     */
    public function getApplicationUid(): ?string
    {
        return $this->applicationUid;
    }

    /**
     * Sets Application Uid.
     * Unique identifier for the payment. It has the prefix "pmt_" followed by alphanumeric characters.
     *
     * @maps application_uid
     */
    public function setApplicationUid(?string $applicationUid): void
    {
        $this->applicationUid = $applicationUid;
    }

    /**
     * Returns Applied Amount.
     * Dollar amount of the paid invoice.
     */
    public function getAppliedAmount(): ?string
    {
        return $this->appliedAmount;
    }

    /**
     * Sets Applied Amount.
     * Dollar amount of the paid invoice.
     *
     * @maps applied_amount
     */
    public function setAppliedAmount(?string $appliedAmount): void
    {
        $this->appliedAmount = $appliedAmount;
    }

    /**
     * Converts the InvoicePaymentApplication object to a human-readable string representation.
     *
     * @return string The string representation of the InvoicePaymentApplication object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'InvoicePaymentApplication',
            [
                'invoiceUid' => $this->invoiceUid,
                'applicationUid' => $this->applicationUid,
                'appliedAmount' => $this->appliedAmount,
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
        if (isset($this->invoiceUid)) {
            $json['invoice_uid']     = $this->invoiceUid;
        }
        if (isset($this->applicationUid)) {
            $json['application_uid'] = $this->applicationUid;
        }
        if (isset($this->appliedAmount)) {
            $json['applied_amount']  = $this->appliedAmount;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
