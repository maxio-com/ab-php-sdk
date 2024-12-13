<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\MetafieldScope;
use AdvancedBillingLib\Models\UpdateMetafield;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateMetafield
 *
 * @see UpdateMetafield
 */
class UpdateMetafieldBuilder
{
    /**
     * @var UpdateMetafield
     */
    private $instance;

    private function __construct(UpdateMetafield $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Update Metafield Builder object.
     */
    public static function init(): self
    {
        return new self(new UpdateMetafield());
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
     * Sets scope field.
     *
     * @param MetafieldScope|null $value
     */
    public function scope(?MetafieldScope $value): self
    {
        $this->instance->setScope($value);
        return $this;
    }

    /**
     * Sets input type field.
     *
     * @param string|null $value
     */
    public function inputType(?string $value): self
    {
        $this->instance->setInputType($value);
        return $this;
    }

    /**
     * Sets enum field.
     *
     * @param string[]|null $value
     */
    public function enum(?array $value): self
    {
        $this->instance->setEnum($value);
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
     * Initializes a new Update Metafield object.
     */
    public function build(): UpdateMetafield
    {
        return CoreHelper::clone($this->instance);
    }
}
