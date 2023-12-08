<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class VoidInvoiceRequest implements \JsonSerializable
{
    /**
     * @var VoidInvoice
     */
    private $void;

    /**
     * @param VoidInvoice $void
     */
    public function __construct(VoidInvoice $void)
    {
        $this->void = $void;
    }

    /**
     * Returns Void.
     */
    public function getVoid(): VoidInvoice
    {
        return $this->void;
    }

    /**
     * Sets Void.
     *
     * @required
     * @maps void
     */
    public function setVoid(VoidInvoice $void): void
    {
        $this->void = $void;
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
        $json['void'] = $this->void;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
