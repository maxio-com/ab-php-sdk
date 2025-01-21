<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use AdvancedBillingLib\Utils\DateTimeHelper;
use stdClass;

class InvoicePreviousBalance implements \JsonSerializable
{
    /**
     * @var \DateTime|null
     */
    private $capturedAt;

    /**
     * @var InvoiceBalanceItem[]|null
     */
    private $invoices;

    /**
     * Returns Captured At.
     */
    public function getCapturedAt(): ?\DateTime
    {
        return $this->capturedAt;
    }

    /**
     * Sets Captured At.
     *
     * @maps captured_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCapturedAt(?\DateTime $capturedAt): void
    {
        $this->capturedAt = $capturedAt;
    }

    /**
     * Returns Invoices.
     *
     * @return InvoiceBalanceItem[]|null
     */
    public function getInvoices(): ?array
    {
        return $this->invoices;
    }

    /**
     * Sets Invoices.
     *
     * @maps invoices
     *
     * @param InvoiceBalanceItem[]|null $invoices
     */
    public function setInvoices(?array $invoices): void
    {
        $this->invoices = $invoices;
    }

    /**
     * Converts the InvoicePreviousBalance object to a human-readable string representation.
     *
     * @return string The string representation of the InvoicePreviousBalance object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'InvoicePreviousBalance',
            [
                'capturedAt' => $this->capturedAt,
                'invoices' => $this->invoices,
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
        if (isset($this->capturedAt)) {
            $json['captured_at'] = DateTimeHelper::toRfc3339DateTime($this->capturedAt);
        }
        if (isset($this->invoices)) {
            $json['invoices']    = $this->invoices;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
