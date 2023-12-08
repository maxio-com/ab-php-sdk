<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ProductFamilyResponse implements \JsonSerializable
{
    /**
     * @var ProductFamily|null
     */
    private $productFamily;

    /**
     * Returns Product Family.
     */
    public function getProductFamily(): ?ProductFamily
    {
        return $this->productFamily;
    }

    /**
     * Sets Product Family.
     *
     * @maps product_family
     */
    public function setProductFamily(?ProductFamily $productFamily): void
    {
        $this->productFamily = $productFamily;
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
        if (isset($this->productFamily)) {
            $json['product_family'] = $this->productFamily;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
