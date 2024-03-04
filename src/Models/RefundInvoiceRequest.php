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

class RefundInvoiceRequest implements \JsonSerializable
{
    /**
     * @var RefundInvoice|RefundConsolidatedInvoice
     */
    private $refund;

    /**
     * @param RefundInvoice|RefundConsolidatedInvoice $refund
     */
    public function __construct($refund)
    {
        $this->refund = $refund;
    }

    /**
     * Returns Refund.
     *
     * @return RefundInvoice|RefundConsolidatedInvoice
     */
    public function getRefund()
    {
        return $this->refund;
    }

    /**
     * Sets Refund.
     *
     * @required
     * @maps refund
     * @mapsBy anyOf(RefundInvoice,RefundConsolidatedInvoice)
     *
     * @param RefundInvoice|RefundConsolidatedInvoice $refund
     */
    public function setRefund($refund): void
    {
        $this->refund = $refund;
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
        $json['refund'] =
            ApiHelper::getJsonHelper()->verifyTypes(
                $this->refund,
                'anyOf(RefundInvoice,RefundConsolidatedInvoice)'
            );
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
