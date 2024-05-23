<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ApplyPaymentEvent;
use AdvancedBillingLib\Models\ApplyPaymentEventData;
use AdvancedBillingLib\Models\Invoice;
use Core\Utils\CoreHelper;

/**
 * Builder for model ApplyPaymentEvent
 *
 * @see ApplyPaymentEvent
 */
class ApplyPaymentEventBuilder
{
    /**
     * @var ApplyPaymentEvent
     */
    private $instance;

    private function __construct(ApplyPaymentEvent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new apply payment event Builder object.
     */
    public static function init(
        int $id,
        \DateTime $timestamp,
        Invoice $invoice,
        string $eventType,
        ApplyPaymentEventData $eventData
    ): self {
        return new self(new ApplyPaymentEvent($id, $timestamp, $invoice, $eventType, $eventData));
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
     * Initializes a new apply payment event object.
     */
    public function build(): ApplyPaymentEvent
    {
        return CoreHelper::clone($this->instance);
    }
}
