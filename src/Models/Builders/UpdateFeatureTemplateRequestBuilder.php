<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Feature1;
use AdvancedBillingLib\Models\UpdateFeatureTemplateRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateFeatureTemplateRequest
 *
 * @see UpdateFeatureTemplateRequest
 */
class UpdateFeatureTemplateRequestBuilder
{
    /**
     * @var UpdateFeatureTemplateRequest
     */
    private $instance;

    private function __construct(UpdateFeatureTemplateRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Update Feature Template Request Builder object.
     *
     * @param Feature1 $feature
     */
    public static function init(Feature1 $feature): self
    {
        return new self(new UpdateFeatureTemplateRequest($feature));
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
     * Initializes a new Update Feature Template Request object.
     */
    public function build(): UpdateFeatureTemplateRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
