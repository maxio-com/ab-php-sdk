<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class PrepaymentAggregatedError implements \JsonSerializable
{
    /**
     * @var string[]|null
     */
    private $amountInCents;

    /**
     * @var string[]|null
     */
    private $base;

    /**
     * @var string[]|null
     */
    private $external;

    /**
     * Returns Amount in Cents.
     *
     * @return string[]|null
     */
    public function getAmountInCents(): ?array
    {
        return $this->amountInCents;
    }

    /**
     * Sets Amount in Cents.
     *
     * @maps amount_in_cents
     *
     * @param string[]|null $amountInCents
     */
    public function setAmountInCents(?array $amountInCents): void
    {
        $this->amountInCents = $amountInCents;
    }

    /**
     * Returns Base.
     *
     * @return string[]|null
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
     * @param string[]|null $base
     */
    public function setBase(?array $base): void
    {
        $this->base = $base;
    }

    /**
     * Returns External.
     *
     * @return string[]|null
     */
    public function getExternal(): ?array
    {
        return $this->external;
    }

    /**
     * Sets External.
     *
     * @maps external
     *
     * @param string[]|null $external
     */
    public function setExternal(?array $external): void
    {
        $this->external = $external;
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
        if (isset($this->amountInCents)) {
            $json['amount_in_cents'] = $this->amountInCents;
        }
        if (isset($this->base)) {
            $json['base']            = $this->base;
        }
        if (isset($this->external)) {
            $json['external']        = $this->external;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
