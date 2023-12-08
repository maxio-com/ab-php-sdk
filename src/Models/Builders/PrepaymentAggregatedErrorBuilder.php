<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PrepaymentAggregatedError;
use Core\Utils\CoreHelper;

/**
 * Builder for model PrepaymentAggregatedError
 *
 * @see PrepaymentAggregatedError
 */
class PrepaymentAggregatedErrorBuilder
{
    /**
     * @var PrepaymentAggregatedError
     */
    private $instance;

    private function __construct(PrepaymentAggregatedError $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new prepayment aggregated error Builder object.
     */
    public static function init(): self
    {
        return new self(new PrepaymentAggregatedError());
    }

    /**
     * Sets amount in cents field.
     */
    public function amountInCents(?array $value): self
    {
        $this->instance->setAmountInCents($value);
        return $this;
    }

    /**
     * Sets base field.
     */
    public function base(?array $value): self
    {
        $this->instance->setBase($value);
        return $this;
    }

    /**
     * Sets external field.
     */
    public function external(?array $value): self
    {
        $this->instance->setExternal($value);
        return $this;
    }

    /**
     * Initializes a new prepayment aggregated error object.
     */
    public function build(): PrepaymentAggregatedError
    {
        return CoreHelper::clone($this->instance);
    }
}
