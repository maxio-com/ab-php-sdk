<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\OveragePricing;
use AdvancedBillingLib\Models\PricePoint;
use Core\Utils\CoreHelper;

/**
 * Builder for model PricePoint
 *
 * @see PricePoint
 */
class PricePointBuilder
{
    /**
     * @var PricePoint
     */
    private $instance;

    private function __construct(PricePoint $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new price point Builder object.
     */
    public static function init(): self
    {
        return new self(new PricePoint());
    }

    /**
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
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
     * Sets use site exchange rate field.
     */
    public function useSiteExchangeRate(?bool $value): self
    {
        $this->instance->setUseSiteExchangeRate($value);
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
     * Initializes a new price point object.
     */
    public function build(): PricePoint
    {
        return CoreHelper::clone($this->instance);
    }
}
