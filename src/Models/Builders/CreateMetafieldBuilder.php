<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateMetafield;
use AdvancedBillingLib\Models\MetafieldScope;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateMetafield
 *
 * @see CreateMetafield
 */
class CreateMetafieldBuilder
{
    /**
     * @var CreateMetafield
     */
    private $instance;

    private function __construct(CreateMetafield $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create metafield Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateMetafield());
    }

    /**
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets scope field.
     */
    public function scope(?MetafieldScope $value): self
    {
        $this->instance->setScope($value);
        return $this;
    }

    /**
     * Sets input type field.
     */
    public function inputType(?string $value): self
    {
        $this->instance->setInputType($value);
        return $this;
    }

    /**
     * Sets enum field.
     */
    public function enum(?array $value): self
    {
        $this->instance->setEnum($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new create metafield object.
     */
    public function build(): CreateMetafield
    {
        return CoreHelper::clone($this->instance);
    }
}
