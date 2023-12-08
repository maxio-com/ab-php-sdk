<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\AllocationExpirationDate;
use Core\Utils\CoreHelper;

/**
 * Builder for model AllocationExpirationDate
 *
 * @see AllocationExpirationDate
 */
class AllocationExpirationDateBuilder
{
    /**
     * @var AllocationExpirationDate
     */
    private $instance;

    private function __construct(AllocationExpirationDate $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new allocation expiration date Builder object.
     */
    public static function init(): self
    {
        return new self(new AllocationExpirationDate());
    }

    /**
     * Sets expires at field.
     */
    public function expiresAt(?string $value): self
    {
        $this->instance->setExpiresAt($value);
        return $this;
    }

    /**
     * Initializes a new allocation expiration date object.
     */
    public function build(): AllocationExpirationDate
    {
        return CoreHelper::clone($this->instance);
    }
}
