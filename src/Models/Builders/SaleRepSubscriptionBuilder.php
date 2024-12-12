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
     * Initializes a new Sale Rep Subscription Builder object.
     */
    public static function init(): self
    {
        return new self(new SaleRepSubscription());
    }

    /**
     * Sets id field.
     *
     * @param int|null $value
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets site name field.
     *
     * @param string|null $value
     */
    public function siteName(?string $value): self
    {
        $this->instance->setSiteName($value);
        return $this;
    }

    /**
     * Sets subscription url field.
     *
     * @param string|null $value
     */
    public function subscriptionUrl(?string $value): self
    {
        $this->instance->setSubscriptionUrl($value);
        return $this;
    }

    /**
     * Sets customer name field.
     *
     * @param string|null $value
     */
    public function customerName(?string $value): self
    {
        $this->instance->setCustomerName($value);
        return $this;
    }

    /**
     * Sets created at field.
     *
     * @param string|null $value
     */
    public function createdAt(?string $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Sets mrr field.
     *
     * @param string|null $value
     */
    public function mrr(?string $value): self
    {
        $this->instance->setMrr($value);
        return $this;
    }

    /**
     * Sets usage field.
     *
     * @param string|null $value
     */
    public function usage(?string $value): self
    {
        $this->instance->setUsage($value);
        return $this;
    }

    /**
     * Sets recurring field.
     *
     * @param string|null $value
     */
    public function recurring(?string $value): self
    {
        $this->instance->setRecurring($value);
        return $this;
    }

    /**
     * Sets last payment field.
     *
     * @param string|null $value
     */
    public function lastPayment(?string $value): self
    {
        $this->instance->setLastPayment($value);
        return $this;
    }

    /**
     * Sets churn date field.
     *
     * @param string|null $value
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
     * Initializes a new Sale Rep Subscription object.
     */
    public function build(): SaleRepSubscription
    {
        return CoreHelper::clone($this->instance);
    }
}
