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
     * Initializes a new create prepaid usage component price point Builder object.
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
     */
    public function handle(?string $value): self
    {
        $this->instance->setHandle($value);
        return $this;
    }

    /**
     * Sets use site exchange rate field.
     */
    public function useSiteExchangeRate(?bool $value): self
    {
        $this->instance->setUseSiteExchangeRate($value);
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
     * Initializes a new create prepaid usage component price point object.
     */
    public function build(): CreatePrepaidUsageComponentPricePoint
    {
        return CoreHelper::clone($this->instance);
    }
}
