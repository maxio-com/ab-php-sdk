<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Metafield;
use AdvancedBillingLib\Models\MetafieldScope;
use Core\Utils\CoreHelper;

/**
 * Builder for model Metafield
 *
 * @see Metafield
 */
class MetafieldBuilder
{
    /**
     * @var Metafield
     */
    private $instance;

    private function __construct(Metafield $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new metafield Builder object.
     */
    public static function init(): self
    {
        return new self(new Metafield());
    }

    /**
     * Sets id field.
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
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
     * Sets data count field.
     */
    public function dataCount(?int $value): self
    {
        $this->instance->setDataCount($value);
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
    public function enum($value): self
    {
        $this->instance->setEnum($value);
        return $this;
    }

    /**
     * Unsets enum field.
     */
    public function unsetEnum(): self
    {
        $this->instance->unsetEnum();
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
     * Initializes a new metafield object.
     */
    public function build(): Metafield
    {
        return CoreHelper::clone($this->instance);
    }
}
