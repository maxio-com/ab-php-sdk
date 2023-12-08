<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Event;
use AdvancedBillingLib\Models\EventResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model EventResponse
 *
 * @see EventResponse
 */
class EventResponseBuilder
{
    /**
     * @var EventResponse
     */
    private $instance;

    private function __construct(EventResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new event response Builder object.
     */
    public static function init(Event $event): self
    {
        return new self(new EventResponse($event));
    }

    /**
     * Initializes a new event response object.
     */
    public function build(): EventResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
