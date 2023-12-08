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

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
