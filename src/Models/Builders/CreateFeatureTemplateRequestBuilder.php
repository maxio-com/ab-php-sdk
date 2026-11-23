<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateFeatureTemplateRequest;
use AdvancedBillingLib\Models\Feature;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateFeatureTemplateRequest
 *
 * @see CreateFeatureTemplateRequest
 */
class CreateFeatureTemplateRequestBuilder
{
    /**
     * @var CreateFeatureTemplateRequest
     */
    private $instance;

    private function __construct(CreateFeatureTemplateRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Feature Template Request Builder object.
     *
     * @param Feature $feature
     */
    public static function init(Feature $feature): self
    {
        return new self(new CreateFeatureTemplateRequest($feature));
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
     * Initializes a new Create Feature Template Request object.
     */
    public function build(): CreateFeatureTemplateRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
