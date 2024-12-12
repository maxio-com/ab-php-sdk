<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SignupProformaPreview implements \JsonSerializable
{
    /**
     * @var ProformaInvoice|null
     */
    private $currentProformaInvoice;

    /**
     * @var ProformaInvoice|null
     */
    private $nextProformaInvoice;

    /**
     * Returns Current Proforma Invoice.
     */
    public function getCurrentProformaInvoice(): ?ProformaInvoice
    {
        return $this->currentProformaInvoice;
    }

    /**
     * Sets Current Proforma Invoice.
     *
     * @maps current_proforma_invoice
     */
    public function setCurrentProformaInvoice(?ProformaInvoice $currentProformaInvoice): void
    {
        $this->currentProformaInvoice = $currentProformaInvoice;
    }

    /**
     * Returns Next Proforma Invoice.
     */
    public function getNextProformaInvoice(): ?ProformaInvoice
    {
        return $this->nextProformaInvoice;
    }

    /**
     * Sets Next Proforma Invoice.
     *
     * @maps next_proforma_invoice
     */
    public function setNextProformaInvoice(?ProformaInvoice $nextProformaInvoice): void
    {
        $this->nextProformaInvoice = $nextProformaInvoice;
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
        if (isset($this->currentProformaInvoice)) {
            $json['current_proforma_invoice'] = $this->currentProformaInvoice;
        }
        if (isset($this->nextProformaInvoice)) {
            $json['next_proforma_invoice']    = $this->nextProformaInvoice;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
