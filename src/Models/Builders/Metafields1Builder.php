<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Metafields1;
use AdvancedBillingLib\Models\MetafieldScope;
use Core\Utils\CoreHelper;

/**
 * Builder for model Metafields1
 *
 * @see Metafields1
 */
class Metafields1Builder
{
    /**
     * @var Metafields1
     */
    private $instance;

    private function __construct(Metafields1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new metafields 1 Builder object.
     */
    public static function init(): self
    {
        return new self(new Metafields1());
    }

    /**
     * Sets current name field.
     */
    public function currentName(?string $value): self
    {
        $this->instance->setCurrentName($value);
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
     * Initializes a new metafields 1 object.
     */
    public function build(): Metafields1
    {
        return CoreHelper::clone($this->instance);
    }
}
