<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdateMetadata;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateMetadata
 *
 * @see UpdateMetadata
 */
class UpdateMetadataBuilder
{
    /**
     * @var UpdateMetadata
     */
    private $instance;

    private function __construct(UpdateMetadata $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Update Metadata Builder object.
     */
    public static function init(): self
    {
        return new self(new UpdateMetadata());
    }

    /**
     * Sets current name field.
     *
     * @param string|null $value
     */
    public function currentName(?string $value): self
    {
        $this->instance->setCurrentName($value);
        return $this;
    }

    /**
     * Sets name field.
     *
     * @param string|null $value
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets value field.
     *
     * @param string|null $value
     */
    public function value(?string $value): self
    {
        $this->instance->setValue($value);
        return $this;
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
     * Initializes a new Update Metadata object.
     */
    public function build(): UpdateMetadata
    {
        return CoreHelper::clone($this->instance);
    }
}
