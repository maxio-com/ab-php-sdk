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
     * Initializes a new resume options Builder object.
     */
    public static function init(): self
    {
        return new self(new ResumeOptions());
    }

    /**
     * Sets require resume field.
     */
    public function requireResume(?bool $value): self
    {
        $this->instance->setRequireResume($value);
        return $this;
    }

    /**
     * Sets forgive balance field.
     */
    public function forgiveBalance(?bool $value): self
    {
        $this->instance->setForgiveBalance($value);
        return $this;
    }

    /**
     * Initializes a new resume options object.
     */
    public function build(): ResumeOptions
    {
        return CoreHelper::clone($this->instance);
    }
}
