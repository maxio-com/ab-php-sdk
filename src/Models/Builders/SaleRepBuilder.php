<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SaleRep;
use Core\Utils\CoreHelper;

/**
 * Builder for model SaleRep
 *
 * @see SaleRep
 */
class SaleRepBuilder
{
    /**
     * @var SaleRep
     */
    private $instance;

    private function __construct(SaleRep $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new sale rep Builder object.
     */
    public static function init(): self
    {
        return new self(new SaleRep());
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
     * Sets full name field.
     */
    public function fullName(?string $value): self
    {
        $this->instance->setFullName($value);
        return $this;
    }

    /**
     * Sets subscriptions count field.
     */
    public function subscriptionsCount(?int $value): self
    {
        $this->instance->setSubscriptionsCount($value);
        return $this;
    }

    /**
     * Sets test mode field.
     */
    public function testMode(?bool $value): self
    {
        $this->instance->setTestMode($value);
        return $this;
    }

    /**
     * Sets subscriptions field.
     */
    public function subscriptions(?array $value): self
    {
        $this->instance->setSubscriptions($value);
        return $this;
    }

    /**
     * Initializes a new sale rep object.
     */
    public function build(): SaleRep
    {
        return CoreHelper::clone($this->instance);
    }
}
