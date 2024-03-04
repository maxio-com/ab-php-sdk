<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateMetadata;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateMetadata
 *
 * @see CreateMetadata
 */
class CreateMetadataBuilder
{
    /**
     * @var CreateMetadata
     */
    private $instance;

    private function __construct(CreateMetadata $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create metadata Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateMetadata());
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
     * Sets value field.
     */
    public function value(?string $value): self
    {
        $this->instance->setValue($value);
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
     * Initializes a new create metadata object.
     */
    public function build(): CreateMetadata
    {
        return CoreHelper::clone($this->instance);
    }
}
