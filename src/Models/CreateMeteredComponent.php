<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreateMeteredComponent implements \JsonSerializable
{
    /**
     * @var MeteredComponent
     */
    private $meteredComponent;

    /**
     * @param MeteredComponent $meteredComponent
     */
    public function __construct(MeteredComponent $meteredComponent)
    {
        $this->meteredComponent = $meteredComponent;
    }

    /**
     * Returns Metered Component.
     */
    public function getMeteredComponent(): MeteredComponent
    {
        return $this->meteredComponent;
    }

    /**
     * Sets Metered Component.
     *
     * @required
     * @maps metered_component
     */
    public function setMeteredComponent(MeteredComponent $meteredComponent): void
    {
        $this->meteredComponent = $meteredComponent;
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
        $json['metered_component'] = $this->meteredComponent;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
