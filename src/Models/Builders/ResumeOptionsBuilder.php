<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ResumeOptions;
use Core\Utils\CoreHelper;

/**
 * Builder for model ResumeOptions
 *
 * @see ResumeOptions
 */
class ResumeOptionsBuilder
{
    /**
     * @var ResumeOptions
     */
    private $instance;

    private function __construct(ResumeOptions $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Resume Options Builder object.
     */
    public static function init(): self
    {
        return new self(new ResumeOptions());
    }

    /**
     * Sets require resume field.
     *
     * @param bool|null $value
     */
    public function requireResume(?bool $value): self
    {
        $this->instance->setRequireResume($value);
        return $this;
    }

    /**
     * Sets forgive balance field.
     *
     * @param bool|null $value
     */
    public function forgiveBalance(?bool $value): self
    {
        $this->instance->setForgiveBalance($value);
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
     * Initializes a new Resume Options object.
     */
    public function build(): ResumeOptions
    {
        return CoreHelper::clone($this->instance);
    }
}
