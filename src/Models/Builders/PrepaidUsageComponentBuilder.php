<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\OveragePricing;
use AdvancedBillingLib\Models\PrepaidUsageComponent;
use Core\Utils\CoreHelper;

/**
 * Builder for model PrepaidUsageComponent
 *
 * @see PrepaidUsageComponent
 */
class PrepaidUsageComponentBuilder
{
    /**
     * @var PrepaidUsageComponent
     */
    private $instance;

    private function __construct(PrepaidUsageComponent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new prepaid usage component Builder object.
     */
    public static function init(string $name): self
    {
        return new self(new PrepaidUsageComponent($name));
    }

    /**
     * Sets unit name field.
     */
    public function unitName(?string $value): self
    {
        $this->instance->setUnitName($value);
        return $this;
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
     * Sets pricing scheme field.
     */
    public function pricingScheme(?string $value): self
    {
        $this->instance->setPricingScheme($value);
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
     * Sets overage pricing field.
     */
    public function overagePricing(?OveragePricing $value): self
    {
        $this->instance->setOveragePricing($value);
        return $this;
    }

    /**
     * Sets rollover prepaid remainder field.
     */
    public function rolloverPrepaidRemainder(?bool $value): self
    {
        $this->instance->setRolloverPrepaidRemainder($value);
        return $this;
    }

    /**
     * Sets renew prepaid allocation field.
     */
    public function renewPrepaidAllocation(?bool $value): self
    {
        $this->instance->setRenewPrepaidAllocation($value);
        return $this;
    }

    /**
     * Sets expiration interval field.
     */
    public function expirationInterval(?float $value): self
    {
        $this->instance->setExpirationInterval($value);
        return $this;
    }

    /**
     * Sets expiration interval unit field.
     */
    public function expirationIntervalUnit(?string $value): self
    {
        $this->instance->setExpirationIntervalUnit($value);
        return $this;
    }

    /**
     * Sets display on hosted page field.
     */
    public function displayOnHostedPage(?bool $value): self
    {
        $this->instance->setDisplayOnHostedPage($value);
        return $this;
    }

    /**
     * Sets allow fractional quantities field.
     */
    public function allowFractionalQuantities(?bool $value): self
    {
        $this->instance->setAllowFractionalQuantities($value);
        return $this;
    }

    /**
     * Sets public signup page ids field.
     */
    public function publicSignupPageIds(?array $value): self
    {
        $this->instance->setPublicSignupPageIds($value);
        return $this;
    }

    /**
     * Initializes a new prepaid usage component object.
     */
    public function build(): PrepaidUsageComponent
    {
        return CoreHelper::clone($this->instance);
    }
}
