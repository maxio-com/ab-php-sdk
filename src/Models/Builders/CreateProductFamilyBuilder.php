<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateProductFamily;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateProductFamily
 *
 * @see CreateProductFamily
 */
class CreateProductFamilyBuilder
{
    /**
     * @var CreateProductFamily
     */
    private $instance;

    private function __construct(CreateProductFamily $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create product family Builder object.
     */
    public static function init(string $name): self
    {
        return new self(new CreateProductFamily($name));
    }

    /**
     * Sets handle field.
     */
    public function handle(?string $value): self
    {
        $this->instance->setHandle($value);
        return $this;
    }

    /**
     * Unsets handle field.
     */
    public function unsetHandle(): self
    {
        $this->instance->unsetHandle();
        return $this;
    }

    /**
     * Sets description field.
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Unsets description field.
     */
    public function unsetDescription(): self
    {
        $this->instance->unsetDescription();
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
     * Initializes a new create product family object.
     */
    public function build(): CreateProductFamily
    {
        return CoreHelper::clone($this->instance);
    }
}
