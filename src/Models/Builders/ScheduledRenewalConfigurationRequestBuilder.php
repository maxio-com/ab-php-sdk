<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ScheduledRenewalConfigurationRequest;
use AdvancedBillingLib\Models\ScheduledRenewalConfigurationRequestBody;
use Core\Utils\CoreHelper;

/**
 * Builder for model ScheduledRenewalConfigurationRequest
 *
 * @see ScheduledRenewalConfigurationRequest
 */
class ScheduledRenewalConfigurationRequestBuilder
{
    /**
     * @var ScheduledRenewalConfigurationRequest
     */
    private $instance;

    private function __construct(ScheduledRenewalConfigurationRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Scheduled Renewal Configuration Request Builder object.
     *
     * @param ScheduledRenewalConfigurationRequestBody $renewalConfiguration
     */
    public static function init(ScheduledRenewalConfigurationRequestBody $renewalConfiguration): self
    {
        return new self(new ScheduledRenewalConfigurationRequest($renewalConfiguration));
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
     * Initializes a new Scheduled Renewal Configuration Request object.
     */
    public function build(): ScheduledRenewalConfigurationRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
