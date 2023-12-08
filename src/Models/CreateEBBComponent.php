<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreateEBBComponent implements \JsonSerializable
{
    /**
     * @var EBBComponent
     */
    private $eventBasedComponent;

    /**
     * @param EBBComponent $eventBasedComponent
     */
    public function __construct(EBBComponent $eventBasedComponent)
    {
        $this->eventBasedComponent = $eventBasedComponent;
    }

    /**
     * Returns Event Based Component.
     */
    public function getEventBasedComponent(): EBBComponent
    {
        return $this->eventBasedComponent;
    }

    /**
     * Sets Event Based Component.
     *
     * @required
     * @maps event_based_component
     */
    public function setEventBasedComponent(EBBComponent $eventBasedComponent): void
    {
        $this->eventBasedComponent = $eventBasedComponent;
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
        $json['event_based_component'] = $this->eventBasedComponent;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
