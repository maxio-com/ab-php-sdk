<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SignupProformaPreviewResponse implements \JsonSerializable
{
    /**
     * @var SignupProformaPreview
     */
    private $proformaInvoicePreview;

    /**
     * @param SignupProformaPreview $proformaInvoicePreview
     */
    public function __construct(SignupProformaPreview $proformaInvoicePreview)
    {
        $this->proformaInvoicePreview = $proformaInvoicePreview;
    }

    /**
     * Returns Proforma Invoice Preview.
     */
    public function getProformaInvoicePreview(): SignupProformaPreview
    {
        return $this->proformaInvoicePreview;
    }

    /**
     * Sets Proforma Invoice Preview.
     *
     * @required
     * @maps proforma_invoice_preview
     */
    public function setProformaInvoicePreview(SignupProformaPreview $proformaInvoicePreview): void
    {
        $this->proformaInvoicePreview = $proformaInvoicePreview;
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
        $json['proforma_invoice_preview'] = $this->proformaInvoicePreview;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
