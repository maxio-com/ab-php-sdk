<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ChangeChargebackStatusEvent;
use AdvancedBillingLib\Models\ChangeChargebackStatusEventData;
use AdvancedBillingLib\Models\Invoice;
use Core\Utils\CoreHelper;

/**
 * Builder for model ChangeChargebackStatusEvent
 *
 * @see ChangeChargebackStatusEvent
 */
class ChangeChargebackStatusEventBuilder
{
    /**
     * @var ChangeChargebackStatusEvent
     */
    private $instance;

    private function __construct(ChangeChargebackStatusEvent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new change chargeback status event Builder object.
     */
    public static function init(
        int $id,
        \DateTime $timestamp,
        Invoice $invoice,
        string $eventType,
        ChangeChargebackStatusEventData $eventData
    ): self {
        return new self(new ChangeChargebackStatusEvent($id, $timestamp, $invoice, $eventType, $eventData));
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
     * Initializes a new change chargeback status event object.
     */
    public function build(): ChangeChargebackStatusEvent
    {
        return CoreHelper::clone($this->instance);
    }
}
