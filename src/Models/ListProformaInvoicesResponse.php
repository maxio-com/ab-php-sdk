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

class ListProformaInvoicesResponse implements \JsonSerializable
{
    /**
     * @var ProformaInvoice[]|null
     */
    private $proformaInvoices;

    /**
     * @var ListProformaInvoicesMeta|null
     */
    private $meta;

    /**
     * Returns Proforma Invoices.
     *
     * @return ProformaInvoice[]|null
     */
    public function getProformaInvoices(): ?array
    {
        return $this->proformaInvoices;
    }

    /**
     * Sets Proforma Invoices.
     *
     * @maps proforma_invoices
     *
     * @param ProformaInvoice[]|null $proformaInvoices
     */
    public function setProformaInvoices(?array $proformaInvoices): void
    {
        $this->proformaInvoices = $proformaInvoices;
    }

    /**
     * Returns Meta.
     */
    public function getMeta(): ?ListProformaInvoicesMeta
    {
        return $this->meta;
    }

    /**
     * Sets Meta.
     *
     * @maps meta
     */
    public function setMeta(?ListProformaInvoicesMeta $meta): void
    {
        $this->meta = $meta;
    }

    /**
     * Converts the ListProformaInvoicesResponse object to a human-readable string representation.
     *
     * @return string The string representation of the ListProformaInvoicesResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ListProformaInvoicesResponse',
            [
                'proformaInvoices' => $this->proformaInvoices,
                'meta' => $this->meta,
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
        if (isset($this->proformaInvoices)) {
            $json['proforma_invoices'] = $this->proformaInvoices;
        }
        if (isset($this->meta)) {
            $json['meta']              = $this->meta;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
