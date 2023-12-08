<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SaleRepItemMrr;
use Core\Utils\CoreHelper;

/**
 * Builder for model SaleRepItemMrr
 *
 * @see SaleRepItemMrr
 */
class SaleRepItemMrrBuilder
{
    /**
     * @var SaleRepItemMrr
     */
    private $instance;

    private function __construct(SaleRepItemMrr $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new sale rep item mrr Builder object.
     */
    public static function init(): self
    {
        return new self(new SaleRepItemMrr());
    }

    /**
     * Sets mrr field.
     */
    public function mrr(?string $value): self
    {
        $this->instance->setMrr($value);
        return $this;
    }

    /**
     * Sets usage field.
     */
    public function usage(?string $value): self
    {
        $this->instance->setUsage($value);
        return $this;
    }

    /**
     * Sets recurring field.
     */
    public function recurring(?string $value): self
    {
        $this->instance->setRecurring($value);
        return $this;
    }

    /**
     * Initializes a new sale rep item mrr object.
     */
    public function build(): SaleRepItemMrr
    {
        return CoreHelper::clone($this->instance);
    }
}
