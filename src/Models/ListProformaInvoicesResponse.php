<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

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

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
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
