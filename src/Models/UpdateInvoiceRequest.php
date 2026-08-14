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

/**
 * Request payload for updating a draft ad hoc invoice.
 */
class UpdateInvoiceRequest implements \JsonSerializable
{
    /**
     * @var UpdateInvoice
     */
    private $invoice;

    /**
     * @param UpdateInvoice $invoice
     */
    public function __construct(UpdateInvoice $invoice)
    {
        $this->invoice = $invoice;
    }

    /**
     * Returns Invoice.
     * Attributes of a draft ad hoc invoice which can be updated. Only the submitted attributes are changed.
     */
    public function getInvoice(): UpdateInvoice
    {
        return $this->invoice;
    }

    /**
     * Sets Invoice.
     * Attributes of a draft ad hoc invoice which can be updated. Only the submitted attributes are changed.
     *
     * @required
     * @maps invoice
     */
    public function setInvoice(UpdateInvoice $invoice): void
    {
        $this->invoice = $invoice;
    }

    /**
     * Converts the UpdateInvoiceRequest object to a human-readable string representation.
     *
     * @return string The string representation of the UpdateInvoiceRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'UpdateInvoiceRequest',
            ['invoice' => $this->invoice, 'additionalProperties' => $this->additionalProperties]
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
        $json['invoice'] = $this->invoice;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
