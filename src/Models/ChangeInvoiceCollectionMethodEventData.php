<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

/**
 * Example schema for an `change_invoice_collection_method` event
 */
class ChangeInvoiceCollectionMethodEventData implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $fromCollectionMethod;

    /**
     * @var string|null
     */
    private $toCollectionMethod;

    /**
     * Returns From Collection Method.
     * The previous collection method of the invoice.
     */
    public function getFromCollectionMethod(): ?string
    {
        return $this->fromCollectionMethod;
    }

    /**
     * Sets From Collection Method.
     * The previous collection method of the invoice.
     *
     * @maps from_collection_method
     */
    public function setFromCollectionMethod(?string $fromCollectionMethod): void
    {
        $this->fromCollectionMethod = $fromCollectionMethod;
    }

    /**
     * Returns To Collection Method.
     * The new collection method of the invoice.
     */
    public function getToCollectionMethod(): ?string
    {
        return $this->toCollectionMethod;
    }

    /**
     * Sets To Collection Method.
     * The new collection method of the invoice.
     *
     * @maps to_collection_method
     */
    public function setToCollectionMethod(?string $toCollectionMethod): void
    {
        $this->toCollectionMethod = $toCollectionMethod;
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
        if (isset($this->fromCollectionMethod)) {
            $json['from_collection_method'] = $this->fromCollectionMethod;
        }
        if (isset($this->toCollectionMethod)) {
            $json['to_collection_method']   = $this->toCollectionMethod;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
