<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\AttributeError;
use Core\Utils\CoreHelper;

/**
 * Builder for model AttributeError
 *
 * @see AttributeError
 */
class AttributeErrorBuilder
{
    /**
     * @var AttributeError
     */
    private $instance;

    private function __construct(AttributeError $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Attribute Error Builder object.
     *
     * @param string[] $attribute
     */
    public static function init(array $attribute): self
    {
        return new self(new AttributeError($attribute));
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
     * Initializes a new Attribute Error object.
     */
    public function build(): AttributeError
    {
        return CoreHelper::clone($this->instance);
    }
}
