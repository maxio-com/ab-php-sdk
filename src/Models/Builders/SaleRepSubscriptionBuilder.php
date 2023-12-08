<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SaleRepSubscription;
use Core\Utils\CoreHelper;

/**
 * Builder for model SaleRepSubscription
 *
 * @see SaleRepSubscription
 */
class SaleRepSubscriptionBuilder
{
    /**
     * @var SaleRepSubscription
     */
    private $instance;

    private function __construct(SaleRepSubscription $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new sale rep subscription Builder object.
     */
    public static function init(): self
    {
        return new self(new SaleRepSubscription());
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
     * Sets site name field.
     */
    public function siteName(?string $value): self
    {
        $this->instance->setSiteName($value);
        return $this;
    }

    /**
     * Sets subscription url field.
     */
    public function subscriptionUrl(?string $value): self
    {
        $this->instance->setSubscriptionUrl($value);
        return $this;
    }

    /**
     * Sets customer name field.
     */
    public function customerName(?string $value): self
    {
        $this->instance->setCustomerName($value);
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
     * Sets last payment field.
     */
    public function lastPayment(?string $value): self
    {
        $this->instance->setLastPayment($value);
        return $this;
    }

    /**
     * Sets churn date field.
     */
    public function churnDate(?string $value): self
    {
        $this->instance->setChurnDate($value);
        return $this;
    }

    /**
     * Unsets churn date field.
     */
    public function unsetChurnDate(): self
    {
        $this->instance->unsetChurnDate();
        return $this;
    }

    /**
     * Initializes a new sale rep subscription object.
     */
    public function build(): SaleRepSubscription
    {
        return CoreHelper::clone($this->instance);
    }
}
