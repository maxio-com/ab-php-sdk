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
    public static function init(): self
    {
        return new self(new CreateProductFamily());
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
     * Initializes a new create product family object.
     */
    public function build(): CreateProductFamily
    {
        return CoreHelper::clone($this->instance);
    }
}
