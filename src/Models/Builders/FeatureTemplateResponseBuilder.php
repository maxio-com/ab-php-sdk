<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\FeatureTemplate;
use AdvancedBillingLib\Models\FeatureTemplateResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model FeatureTemplateResponse
 *
 * @see FeatureTemplateResponse
 */
class FeatureTemplateResponseBuilder
{
    /**
     * @var FeatureTemplateResponse
     */
    private $instance;

    private function __construct(FeatureTemplateResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Feature Template Response Builder object.
     *
     * @param FeatureTemplate $feature
     */
    public static function init(FeatureTemplate $feature): self
    {
        return new self(new FeatureTemplateResponse($feature));
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
     * Initializes a new Feature Template Response object.
     */
    public function build(): FeatureTemplateResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
