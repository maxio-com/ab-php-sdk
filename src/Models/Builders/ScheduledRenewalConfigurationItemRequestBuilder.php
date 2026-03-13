<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ScheduledRenewalConfigurationItemRequest;
use AdvancedBillingLib\Models\ScheduledRenewalItemRequestBodyComponent;
use AdvancedBillingLib\Models\ScheduledRenewalItemRequestBodyProduct;
use Core\Utils\CoreHelper;

/**
 * Builder for model ScheduledRenewalConfigurationItemRequest
 *
 * @see ScheduledRenewalConfigurationItemRequest
 */
class ScheduledRenewalConfigurationItemRequestBuilder
{
    /**
     * @var ScheduledRenewalConfigurationItemRequest
     */
    private $instance;

    private function __construct(ScheduledRenewalConfigurationItemRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Scheduled Renewal Configuration Item Request Builder object.
     *
     * @param ScheduledRenewalItemRequestBodyComponent|ScheduledRenewalItemRequestBodyProduct $renewalConfigurationItem
     */
    public static function init($renewalConfigurationItem): self
    {
        return new self(new ScheduledRenewalConfigurationItemRequest($renewalConfigurationItem));
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
     * Initializes a new Scheduled Renewal Configuration Item Request object.
     */
    public function build(): ScheduledRenewalConfigurationItemRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
