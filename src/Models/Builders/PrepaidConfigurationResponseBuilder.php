<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PrepaidConfiguration;
use AdvancedBillingLib\Models\PrepaidConfigurationResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model PrepaidConfigurationResponse
 *
 * @see PrepaidConfigurationResponse
 */
class PrepaidConfigurationResponseBuilder
{
    /**
     * @var PrepaidConfigurationResponse
     */
    private $instance;

    private function __construct(PrepaidConfigurationResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Prepaid Configuration Response Builder object.
     *
     * @param PrepaidConfiguration $prepaidConfiguration
     */
    public static function init(PrepaidConfiguration $prepaidConfiguration): self
    {
        return new self(new PrepaidConfigurationResponse($prepaidConfiguration));
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
     * Initializes a new Prepaid Configuration Response object.
     */
    public function build(): PrepaidConfigurationResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
