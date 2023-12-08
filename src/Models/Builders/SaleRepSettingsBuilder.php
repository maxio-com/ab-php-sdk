<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SaleRepSettings;
use Core\Utils\CoreHelper;

/**
 * Builder for model SaleRepSettings
 *
 * @see SaleRepSettings
 */
class SaleRepSettingsBuilder
{
    /**
     * @var SaleRepSettings
     */
    private $instance;

    private function __construct(SaleRepSettings $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new sale rep settings Builder object.
     */
    public static function init(): self
    {
        return new self(new SaleRepSettings());
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
     * Sets subscription id field.
     */
    public function subscriptionId(?int $value): self
    {
        $this->instance->setSubscriptionId($value);
        return $this;
    }

    /**
     * Sets site link field.
     */
    public function siteLink(?string $value): self
    {
        $this->instance->setSiteLink($value);
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
     * Sets subscription mrr field.
     */
    public function subscriptionMrr(?string $value): self
    {
        $this->instance->setSubscriptionMrr($value);
        return $this;
    }

    /**
     * Sets sales rep id field.
     */
    public function salesRepId(?int $value): self
    {
        $this->instance->setSalesRepId($value);
        return $this;
    }

    /**
     * Sets sales rep name field.
     */
    public function salesRepName(?string $value): self
    {
        $this->instance->setSalesRepName($value);
        return $this;
    }

    /**
     * Initializes a new sale rep settings object.
     */
    public function build(): SaleRepSettings
    {
        return CoreHelper::clone($this->instance);
    }
}
