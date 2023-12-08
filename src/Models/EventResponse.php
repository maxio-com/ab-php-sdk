<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class EventResponse implements \JsonSerializable
{
    /**
     * @var Event
     */
    private $event;

    /**
     * @param Event $event
     */
    public function __construct(Event $event)
    {
        $this->event = $event;
    }

    /**
     * Returns Event.
     */
    public function getEvent(): Event
    {
        return $this->event;
    }

    /**
     * Sets Event.
     *
     * @required
     * @maps event
     */
    public function setEvent(Event $event): void
    {
        $this->event = $event;
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
        $json['event'] = $this->event;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
