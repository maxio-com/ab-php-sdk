<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ScheduledRenewalConfigurationItem;
use AdvancedBillingLib\Models\ScheduledRenewalConfigurationItemResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model ScheduledRenewalConfigurationItemResponse
 *
 * @see ScheduledRenewalConfigurationItemResponse
 */
class ScheduledRenewalConfigurationItemResponseBuilder
{
    /**
     * @var ScheduledRenewalConfigurationItemResponse
     */
    private $instance;

    private function __construct(ScheduledRenewalConfigurationItemResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Scheduled Renewal Configuration Item Response Builder object.
     */
    public static function init(): self
    {
        return new self(new ScheduledRenewalConfigurationItemResponse());
    }

    /**
     * Sets scheduled renewal configuration item field.
     *
     * @param ScheduledRenewalConfigurationItem|null $value
     */
    public function scheduledRenewalConfigurationItem(?ScheduledRenewalConfigurationItem $value): self
    {
        $this->instance->setScheduledRenewalConfigurationItem($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new Scheduled Renewal Configuration Item Response object.
     */
    public function build(): ScheduledRenewalConfigurationItemResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
