<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ScheduledRenewalConfiguration;
use AdvancedBillingLib\Models\ScheduledRenewalConfigurationsResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model ScheduledRenewalConfigurationsResponse
 *
 * @see ScheduledRenewalConfigurationsResponse
 */
class ScheduledRenewalConfigurationsResponseBuilder
{
    /**
     * @var ScheduledRenewalConfigurationsResponse
     */
    private $instance;

    private function __construct(ScheduledRenewalConfigurationsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Scheduled Renewal Configurations Response Builder object.
     */
    public static function init(): self
    {
        return new self(new ScheduledRenewalConfigurationsResponse());
    }

    /**
     * Sets scheduled renewal configurations field.
     *
     * @param ScheduledRenewalConfiguration[]|null $value
     */
    public function scheduledRenewalConfigurations(?array $value): self
    {
        $this->instance->setScheduledRenewalConfigurations($value);
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
     * Initializes a new Scheduled Renewal Configurations Response object.
     */
    public function build(): ScheduledRenewalConfigurationsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
