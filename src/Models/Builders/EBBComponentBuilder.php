<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\EBBComponent;
use Core\Utils\CoreHelper;

/**
 * Builder for model EBBComponent
 *
 * @see EBBComponent
 */
class EBBComponentBuilder
{
    /**
     * @var EBBComponent
     */
    private $instance;

    private function __construct(EBBComponent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new ebbcomponent Builder object.
     */
    public static function init(
        string $name,
        string $unitName,
        string $pricingScheme,
        int $eventBasedBillingMetricId
    ): self {
        return new self(new EBBComponent($name, $unitName, $pricingScheme, $eventBasedBillingMetricId));
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
     * Sets handle field.
     */
    public function handle(?string $value): self
    {
        $this->instance->setHandle($value);
        return $this;
    }

    /**
     * Sets taxable field.
     */
    public function taxable(?bool $value): self
    {
        $this->instance->setTaxable($value);
        return $this;
    }

    /**
     * Sets prices field.
     */
    public function prices(?array $value): self
    {
        $this->instance->setPrices($value);
        return $this;
    }

    /**
     * Sets upgrade charge field.
     */
    public function upgradeCharge(?string $value): self
    {
        $this->instance->setUpgradeCharge($value);
        return $this;
    }

    /**
     * Unsets upgrade charge field.
     */
    public function unsetUpgradeCharge(): self
    {
        $this->instance->unsetUpgradeCharge();
        return $this;
    }

    /**
     * Sets downgrade credit field.
     */
    public function downgradeCredit(?string $value): self
    {
        $this->instance->setDowngradeCredit($value);
        return $this;
    }

    /**
     * Unsets downgrade credit field.
     */
    public function unsetDowngradeCredit(): self
    {
        $this->instance->unsetDowngradeCredit();
        return $this;
    }

    /**
     * Sets price points field.
     */
    public function pricePoints(?array $value): self
    {
        $this->instance->setPricePoints($value);
        return $this;
    }

    /**
     * Sets unit price field.
     */
    public function unitPrice($value): self
    {
        $this->instance->setUnitPrice($value);
        return $this;
    }

    /**
     * Sets tax code field.
     */
    public function taxCode(?string $value): self
    {
        $this->instance->setTaxCode($value);
        return $this;
    }

    /**
     * Sets hide date range on invoice field.
     */
    public function hideDateRangeOnInvoice(?bool $value): self
    {
        $this->instance->setHideDateRangeOnInvoice($value);
        return $this;
    }

    /**
     * Sets price in cents field.
     */
    public function priceInCents(?string $value): self
    {
        $this->instance->setPriceInCents($value);
        return $this;
    }

    /**
     * Sets interval field.
     */
    public function interval(?int $value): self
    {
        $this->instance->setInterval($value);
        return $this;
    }

    /**
     * Sets interval unit field.
     */
    public function intervalUnit(?string $value): self
    {
        $this->instance->setIntervalUnit($value);
        return $this;
    }

    /**
     * Initializes a new ebbcomponent object.
     */
    public function build(): EBBComponent
    {
        return CoreHelper::clone($this->instance);
    }
}
