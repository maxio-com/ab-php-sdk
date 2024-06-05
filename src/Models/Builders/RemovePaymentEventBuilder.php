<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Invoice;
use AdvancedBillingLib\Models\RemovePaymentEvent;
use AdvancedBillingLib\Models\RemovePaymentEventData;
use Core\Utils\CoreHelper;

/**
 * Builder for model RemovePaymentEvent
 *
 * @see RemovePaymentEvent
 */
class RemovePaymentEventBuilder
{
    /**
     * @var RemovePaymentEvent
     */
    private $instance;

    private function __construct(RemovePaymentEvent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new remove payment event Builder object.
     */
    public static function init(
        int $id,
        \DateTime $timestamp,
        Invoice $invoice,
        string $eventType,
        RemovePaymentEventData $eventData
    ): self {
        return new self(new RemovePaymentEvent($id, $timestamp, $invoice, $eventType, $eventData));
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new remove payment event object.
     */
    public function build(): RemovePaymentEvent
    {
        return CoreHelper::clone($this->instance);
    }
}
