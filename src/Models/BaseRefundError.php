<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class BaseRefundError implements \JsonSerializable
{
    /**
     * @var array[]|null
     */
    private $base;

    /**
     * Returns Base.
     *
     * @return array[]|null
     */
    public function getBase(): ?array
    {
        return $this->base;
    }

    /**
     * Sets Base.
     *
     * @maps base
     *
     * @param array[]|null $base
     */
    public function setBase(?array $base): void
    {
        $this->base = $base;
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
        if (isset($this->base)) {
            $json['base'] = $this->base;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
