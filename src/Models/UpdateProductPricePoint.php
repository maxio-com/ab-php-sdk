<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class UpdateProductPricePoint implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $handle;

    /**
     * @var int|null
     */
    private $priceInCents;

    /**
     * Returns Handle.
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }

    /**
     * Sets Handle.
     *
     * @maps handle
     */
    public function setHandle(?string $handle): void
    {
        $this->handle = $handle;
    }

    /**
     * Returns Price in Cents.
     */
    public function getPriceInCents(): ?int
    {
        return $this->priceInCents;
    }

    /**
     * Sets Price in Cents.
     *
     * @maps price_in_cents
     */
    public function setPriceInCents(?int $priceInCents): void
    {
        $this->priceInCents = $priceInCents;
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
        if (isset($this->handle)) {
            $json['handle']         = $this->handle;
        }
        if (isset($this->priceInCents)) {
            $json['price_in_cents'] = $this->priceInCents;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
