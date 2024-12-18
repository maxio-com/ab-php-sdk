<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreatePrepaidUsageComponentPricePoint;
use AdvancedBillingLib\Models\OveragePricing;
use AdvancedBillingLib\Models\Price;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreatePrepaidUsageComponentPricePoint
 *
 * @see CreatePrepaidUsageComponentPricePoint
 */
class CreatePrepaidUsageComponentPricePointBuilder
{
    /**
     * @var CreatePrepaidUsageComponentPricePoint
     */
    private $instance;

    private function __construct(CreatePrepaidUsageComponentPricePoint $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Prepaid Usage Component Price Point Builder object.
     *
     * @param string $name
     * @param string $pricingScheme
     * @param Price[] $prices
     * @param OveragePricing $overagePricing
     */
    public static function init(
        string $name,
        string $pricingScheme,
        array $prices,
        OveragePricing $overagePricing
    ): self {
        return new self(new CreatePrepaidUsageComponentPricePoint($name, $pricingScheme, $prices, $overagePricing));
    }

    /**
     * Sets handle field.
     *
     * @param string|null $value
     */
    public function handle(?string $value): self
    {
        $this->instance->setHandle($value);
        return $this;
    }

    /**
     * Sets use site exchange rate field.
     *
     * @param bool|null $value
     */
    public function useSiteExchangeRate(?bool $value): self
    {
        $this->instance->setUseSiteExchangeRate($value);
        return $this;
    }

    /**
     * Sets rollover prepaid remainder field.
     *
     * @param bool|null $value
     */
    public function rolloverPrepaidRemainder(?bool $value): self
    {
        $this->instance->setRolloverPrepaidRemainder($value);
        return $this;
    }

    /**
     * Sets renew prepaid allocation field.
     *
     * @param bool|null $value
     */
    public function renewPrepaidAllocation(?bool $value): self
    {
        $this->instance->setRenewPrepaidAllocation($value);
        return $this;
    }

    /**
     * Sets expiration interval field.
     *
     * @param float|null $value
     */
    public function expirationInterval(?float $value): self
    {
        $this->instance->setExpirationInterval($value);
        return $this;
    }

    /**
     * Sets expiration interval unit field.
     *
     * @param string|null $value
     */
    public function expirationIntervalUnit(?string $value): self
    {
        $this->instance->setExpirationIntervalUnit($value);
        return $this;
    }

    /**
     * Unsets expiration interval unit field.
     */
    public function unsetExpirationIntervalUnit(): self
    {
        $this->instance->unsetExpirationIntervalUnit();
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
     * Initializes a new Create Prepaid Usage Component Price Point object.
     */
    public function build(): CreatePrepaidUsageComponentPricePoint
    {
        return CoreHelper::clone($this->instance);
    }
}
