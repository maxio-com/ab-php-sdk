<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ReasonCodesJsonResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $ok;

    /**
     * Returns Ok.
     */
    public function getOk(): ?string
    {
        return $this->ok;
    }

    /**
     * Sets Ok.
     *
     * @maps ok
     */
    public function setOk(?string $ok): void
    {
        $this->ok = $ok;
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
        if (isset($this->ok)) {
            $json['ok'] = $this->ok;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
