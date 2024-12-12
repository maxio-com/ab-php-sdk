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
     * Initializes a new Sale Rep Settings Builder object.
     */
    public static function init(): self
    {
        return new self(new SaleRepSettings());
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
     * Sets subscription id field.
     *
     * @param int|null $value
     */
    public function subscriptionId(?int $value): self
    {
        $this->instance->setSubscriptionId($value);
        return $this;
    }

    /**
     * Sets site link field.
     *
     * @param string|null $value
     */
    public function siteLink(?string $value): self
    {
        $this->instance->setSiteLink($value);
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
     * Sets subscription mrr field.
     *
     * @param string|null $value
     */
    public function subscriptionMrr(?string $value): self
    {
        $this->instance->setSubscriptionMrr($value);
        return $this;
    }

    /**
     * Sets sales rep id field.
     *
     * @param int|null $value
     */
    public function salesRepId(?int $value): self
    {
        $this->instance->setSalesRepId($value);
        return $this;
    }

    /**
     * Sets sales rep name field.
     *
     * @param string|null $value
     */
    public function salesRepName(?string $value): self
    {
        $this->instance->setSalesRepName($value);
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
     * Initializes a new Sale Rep Settings object.
     */
    public function build(): SaleRepSettings
    {
        return CoreHelper::clone($this->instance);
    }
}
