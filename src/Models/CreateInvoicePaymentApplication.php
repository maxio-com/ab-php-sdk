<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreateInvoicePaymentApplication implements \JsonSerializable
{
    /**
     * @var string
     */
    private $invoiceUid;

    /**
     * @var string
     */
    private $amount;

    /**
     * @param string $invoiceUid
     * @param string $amount
     */
    public function __construct(string $invoiceUid, string $amount)
    {
        $this->invoiceUid = $invoiceUid;
        $this->amount = $amount;
    }

    /**
     * Returns Invoice Uid.
     * Unique identifier for the invoice. It has the prefix "inv_" followed by alphanumeric characters.
     */
    public function getInvoiceUid(): string
    {
        return $this->invoiceUid;
    }

    /**
     * Sets Invoice Uid.
     * Unique identifier for the invoice. It has the prefix "inv_" followed by alphanumeric characters.
     *
     * @required
     * @maps invoice_uid
     */
    public function setInvoiceUid(string $invoiceUid): void
    {
        $this->invoiceUid = $invoiceUid;
    }

    /**
     * Returns Amount.
     * Dollar amount of the invoice payment (eg. "10.50" => $10.50).
     */
    public function getAmount(): string
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * Dollar amount of the invoice payment (eg. "10.50" => $10.50).
     *
     * @required
     * @maps amount
     */
    public function setAmount(string $amount): void
    {
        $this->amount = $amount;
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
        $json['invoice_uid'] = $this->invoiceUid;
        $json['amount']      = $this->amount;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
