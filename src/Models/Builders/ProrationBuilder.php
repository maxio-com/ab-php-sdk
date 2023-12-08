<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Proration;
use Core\Utils\CoreHelper;

/**
 * Builder for model Proration
 *
 * @see Proration
 */
class ProrationBuilder
{
    /**
     * @var Proration
     */
    private $instance;

    private function __construct(Proration $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new proration Builder object.
     */
    public static function init(): self
    {
        return new self(new Proration());
    }

    /**
     * Sets preserve period field.
     */
    public function preservePeriod(?bool $value): self
    {
        $this->instance->setPreservePeriod($value);
        return $this;
    }

    /**
     * Initializes a new proration object.
     */
    public function build(): Proration
    {
        return CoreHelper::clone($this->instance);
    }
}
