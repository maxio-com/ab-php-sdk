<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateUsage;
use AdvancedBillingLib\Models\CreateUsageRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateUsageRequest
 *
 * @see CreateUsageRequest
 */
class CreateUsageRequestBuilder
{
    /**
     * @var CreateUsageRequest
     */
    private $instance;

    private function __construct(CreateUsageRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Usage Request Builder object.
     *
     * @param CreateUsage $usage
     */
    public static function init(CreateUsage $usage): self
    {
        return new self(new CreateUsageRequest($usage));
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
     * Initializes a new Create Usage Request object.
     */
    public function build(): CreateUsageRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
