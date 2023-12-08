<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ReasonCode;
use Core\Utils\CoreHelper;

/**
 * Builder for model ReasonCode
 *
 * @see ReasonCode
 */
class ReasonCodeBuilder
{
    /**
     * @var ReasonCode
     */
    private $instance;

    private function __construct(ReasonCode $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new reason code Builder object.
     */
    public static function init(): self
    {
        return new self(new ReasonCode());
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
     * Sets site id field.
     */
    public function siteId(?int $value): self
    {
        $this->instance->setSiteId($value);
        return $this;
    }

    /**
     * Sets code field.
     */
    public function code(?string $value): self
    {
        $this->instance->setCode($value);
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
     * Sets position field.
     */
    public function position(?int $value): self
    {
        $this->instance->setPosition($value);
        return $this;
    }

    /**
     * Sets created at field.
     */
    public function createdAt(?string $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Sets updated at field.
     */
    public function updatedAt(?string $value): self
    {
        $this->instance->setUpdatedAt($value);
        return $this;
    }

    /**
     * Initializes a new reason code object.
     */
    public function build(): ReasonCode
    {
        return CoreHelper::clone($this->instance);
    }
}
