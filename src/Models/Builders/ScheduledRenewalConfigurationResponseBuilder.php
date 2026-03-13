<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ScheduledRenewalConfiguration;
use AdvancedBillingLib\Models\ScheduledRenewalConfigurationResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model ScheduledRenewalConfigurationResponse
 *
 * @see ScheduledRenewalConfigurationResponse
 */
class ScheduledRenewalConfigurationResponseBuilder
{
    /**
     * @var ScheduledRenewalConfigurationResponse
     */
    private $instance;

    private function __construct(ScheduledRenewalConfigurationResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Scheduled Renewal Configuration Response Builder object.
     */
    public static function init(): self
    {
        return new self(new ScheduledRenewalConfigurationResponse());
    }

    /**
     * Sets scheduled renewal configuration field.
     *
     * @param ScheduledRenewalConfiguration|null $value
     */
    public function scheduledRenewalConfiguration(?ScheduledRenewalConfiguration $value): self
    {
        $this->instance->setScheduledRenewalConfiguration($value);
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
     * Initializes a new Scheduled Renewal Configuration Response object.
     */
    public function build(): ScheduledRenewalConfigurationResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
