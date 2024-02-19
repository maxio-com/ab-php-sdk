<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Event;
use Core\Utils\CoreHelper;

/**
 * Builder for model Event
 *
 * @see Event
 */
class EventBuilder
{
    /**
     * @var Event
     */
    private $instance;

    private function __construct(Event $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new event Builder object.
     */
    public static function init(int $id, string $key, string $message, int $customerId, \DateTime $createdAt): self
    {
        return new self(new Event($id, $key, $message, $customerId, $createdAt));
    }

    /**
     * Sets subscription id field.
     */
    public function subscriptionId(?int $value): self
    {
        $this->instance->setSubscriptionId($value);
        return $this;
    }

    /**
     * Sets event specific data field.
     */
    public function eventSpecificData($value): self
    {
        $this->instance->setEventSpecificData($value);
        return $this;
    }

    /**
     * Initializes a new event object.
     */
    public function build(): Event
    {
        return CoreHelper::clone($this->instance);
    }
}
