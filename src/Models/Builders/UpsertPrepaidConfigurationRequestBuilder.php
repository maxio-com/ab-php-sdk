<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpsertPrepaidConfiguration;
use AdvancedBillingLib\Models\UpsertPrepaidConfigurationRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpsertPrepaidConfigurationRequest
 *
 * @see UpsertPrepaidConfigurationRequest
 */
class UpsertPrepaidConfigurationRequestBuilder
{
    /**
     * @var UpsertPrepaidConfigurationRequest
     */
    private $instance;

    private function __construct(UpsertPrepaidConfigurationRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Upsert Prepaid Configuration Request Builder object.
     *
     * @param UpsertPrepaidConfiguration $prepaidConfiguration
     */
    public static function init(UpsertPrepaidConfiguration $prepaidConfiguration): self
    {
        return new self(new UpsertPrepaidConfigurationRequest($prepaidConfiguration));
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
     * Initializes a new Upsert Prepaid Configuration Request object.
     */
    public function build(): UpsertPrepaidConfigurationRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
