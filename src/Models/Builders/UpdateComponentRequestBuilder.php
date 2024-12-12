<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdateComponent;
use AdvancedBillingLib\Models\UpdateComponentRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateComponentRequest
 *
 * @see UpdateComponentRequest
 */
class UpdateComponentRequestBuilder
{
    /**
     * @var UpdateComponentRequest
     */
    private $instance;

    private function __construct(UpdateComponentRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Update Component Request Builder object.
     *
     * @param UpdateComponent $component
     */
    public static function init(UpdateComponent $component): self
    {
        return new self(new UpdateComponentRequest($component));
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
     * Initializes a new Update Component Request object.
     */
    public function build(): UpdateComponentRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
